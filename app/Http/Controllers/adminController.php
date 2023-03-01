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


class adminController extends Controller
{use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function index(){
        $awal = itemModel::where('status', 1)->sum('harga_awal');
        $akhir = itemModel::where('status', 1)->sum('harga_akhir');
        $profit = $akhir - $awal;
        // $report = itemModel::where('complete_at', '<', date('y-m-d'))->orderBy('complete_at')->gr;
        $report = itemModel::where('status', 1)->get();
        // $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
        $item = itemModel::where('status', 1)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
        return view('admin.dashboard' , [
            'profit' => $profit,
            'item' => $item,
            'report' => $report,
        ]);
    }
    public function item(){
        $kategori = kategoriModel::all();
        $item = itemModel::all();
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
        $data = itemModel::all();
        $pdf = PDF::loadView('pdfadmin', [
            'data' => $data
        ])->setPaper('a4', 'landscape');
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
