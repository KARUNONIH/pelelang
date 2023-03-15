<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\itemModel;
use App\Models\User;
use App\Models\kategoriModel;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Ramsey\Uuid\Uuid;


class InvoiceUuidGenerator
{
    public static function generate()
    {
        return Uuid::uuid4()->toString();
    }
}

class adminController extends Controller
{use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function index(){
        $startDateCurrent = Carbon::now('Asia/Jakarta')->startOfMonth();
$endDateCurrent = Carbon::now('Asia/Jakarta')->endOfMonth();
$startDateLast = Carbon::now('Asia/Jakarta')->subMonth()->startOfMonth();
$endDateLast = Carbon::now('Asia/Jakarta')->subMonth()->endOfMonth();
$countCurrent = itemModel::where('id_user', '!=', 0)->whereBetween('complete_at', [$startDateCurrent, $endDateCurrent])->count();
$countLast = itemModel::where('id_user', '!=', 0)->whereBetween('complete_at', [$startDateLast, $endDateLast])->count();

$diff = $countCurrent - $countLast;
$percentage = $countLast > 0 ? ($diff / $countLast) * 100 : 0;

$awal = itemModel::where('complete_at', '<', carbon::now('Asia/Jakarta'))->where(function ($query) {
    $query->where('status', 1)->orWhere('status', 0);})->sum('harga_awal');
$akhir = itemModel::where('complete_at', '<', carbon::now('Asia/Jakarta'))->where(function ($query) {
    $query->where('status', 1)->orWhere('status', 0);})->sum('harga_akhir');
$profit = $akhir - $awal;
// $report = itemModel::where('complete_at', '<', date('y-m-d'))->orderBy('complete_at')->gr;
$report = itemModel::where('status', 1)->get();
// $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
$x = itemModel::where('status', 1)->where(function ($query) {
    $query->where('id_user', 0);
})->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
$item = itemModel::where(function ($query) {
    $query->where('status', 1)->orWhere('status', 0);})->where('complete_at', '<=', Carbon::now('Asia/Jakarta'))->where('id_user', '!=', 0)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
    $xcountawal = $item->sum('harga_awal');
    $xcountakhir = $item->sum('harga_akhir');
    $xprofit = $xcountakhir - $xcountawal;
    $total = itemModel::whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->where('status', '!=', 2)->get();
    $itema = $item->count() + $total->count();
$user = User::where('type', '!=', '0')->orderBy('type', 'asc')->get();
        $kategori = kategoriModel::all();
$ongoing = itemModel::whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->where('complete_at', '>=' , Carbon::now('Asia/Jakarta'))->where('status', '!=', 2)->get();

        return view('admin.dashboard' , [
            'profit' => $profit,
            'item' => $item,
            'report' => $report,
            'total'=> $total,
            'user' => $user,
            'x'=>$x,
            'xprofit'=> $xprofit,
            'ongoing'=>$ongoing,
            'kategori'=> $kategori
        ]);
    }
    public function item(){
        $kategori = kategoriModel::all();
        $item = itemModel::orderBy('id', 'desc')->get();
        return view('admin.item' ,
            [
                'kategori' => $kategori,
                'item' => $item
            ]);
    }

    public function kategori()
    {
        $kategori = kategoriModel::all();
        return view('admin.kategori', [
            'kategori' => $kategori,
        ]);
    }

    public function pdf(){
        $pdfid = Carbon::now('Asia/Jakarta')->format('YmdHis');
        $item = itemModel::where(function ($query) {
            $query->where('status', 1)->orWhere('status', 0);})->where('id_user', '!=', 0)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
            $date = Carbon::now('Asia/Jakarta')->toDateString();
        $total = $item->sum('harga_akhir') - $item->sum('harga_awal');

        $pdf = PDF::loadView('pdfadmin', [
            'item' => $item,
            'date' => $date,
            'total' => $total,
            'pdfid'=> $pdfid
        ])->setPaper('a4', 'potrait');
        return $pdf->stream();
    }

    public function role(){
       $user =  user::all();
        return view('admin.role',[
            'user' => $user
        ]);
    }

    public function addrole(Request $request){
        $request->validate([
            'name' => 'required',
            'email' =>'required',
            'password' =>'required',
            'type' => 'required',
        ]);

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type
        ]);

        return redirect()->back()->with('success', 'Berhasil menambahkan user!');
    }

    public function edit(Request $request): View
    {


        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('admin.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // public function download()
    // {
    //     $item = itemModel::all();

    //     $pdf = PDF::loadView('admin.pdf', array('users' =>  $item))
    //     ->setPaper('a4', 'portrait');

    //     return $pdf->download('admind.item');
    // }
}
