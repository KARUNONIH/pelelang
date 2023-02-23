<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\itemModel;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;


class adminController extends Controller
{
    public function index(){
        $awal = itemModel::where('status', 1)->sum('harga_awal');
        $akhir = itemModel::where('status', 1)->sum('harga_akhir');
        $profit = $akhir - $awal;
        // $report = itemModel::where('complete_at', '<', date('y-m-d'))->orderBy('complete_at')->gr;
        $report = Carbon::now('Asia/Jakarta')->month;
        // $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
        $item = itemModel::where('status', 1)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
        return view('admin.dashboard' , [
            'profit' => $profit,
            'item' => $item
        ]);
    }
    public function item(){
        return view('admin.item');
    }

    public function pdf(){
        $data = itemModel::all();
        $pdf = PDF::loadView('pdfadmin', [
            'data' => $data
        ])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    // public function download()
    // {
    //     $item = itemModel::all();

    //     $pdf = PDF::loadView('admin.pdf', array('users' =>  $item))
    //     ->setPaper('a4', 'portrait');

    //     return $pdf->download('admind.item');
    // }
}
