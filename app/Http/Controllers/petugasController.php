<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemModel;
use App\Models\kategoriModel;
use Carbon\Carbon;

class petugasController extends Controller
{
    public function index(){
        $awal = itemModel::where('status', 1)->sum('harga_awal');
        $akhir = itemModel::where('status', 1)->sum('harga_akhir');
        $profit = $akhir - $awal;
        // $report = itemModel::where('complete_at', '<', date('y-m-d'))->orderBy('complete_at')->gr;
        $report = Carbon::now('Asia/Jakarta')->month;
        // $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
        $item = itemModel::where('status', 1)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
        return view('petugas.dashboard' , [
            'profit' => $profit,
            'item' => $item
        ]);
    }
    public function item(){
        $kategori = kategoriModel::all();
        $item = itemModel::all();
        return view('petugas.item' ,
            [
                'kategori' => $kategori,
                'item' => $item
            ]);
    }

    public function kategori()
    {
        $kategori = kategoriModel::all();
        return view('petugas.kategori', [
            'kategori' => $kategori,
        ]);
    }
}
