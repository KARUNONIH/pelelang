<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\itemModel;
use App\Models\User;
use App\Models\kategoriModel;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;


class adminController extends Controller
{
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

    // public function download()
    // {
    //     $item = itemModel::all();

    //     $pdf = PDF::loadView('admin.pdf', array('users' =>  $item))
    //     ->setPaper('a4', 'portrait');

    //     return $pdf->download('admind.item');
    // }
}
