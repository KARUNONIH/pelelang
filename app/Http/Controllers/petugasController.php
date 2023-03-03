<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemModel;
use App\Models\kategoriModel;
use Carbon\Carbon;

class petugasController extends Controller
{
    public function index(){
        $startDateCurrent = Carbon::now()->startOfMonth();
        $endDateCurrent = Carbon::now()->endOfMonth();
        $startDateLast = Carbon::now()->subMonth()->startOfMonth();
        $endDateLast = Carbon::now()->subMonth()->endOfMonth();
        $countCurrent = itemModel::where('id_user', '!=', 0)->whereBetween('complete_at', [$startDateCurrent, $endDateCurrent])->count();
        $countLast = itemModel::where('id_user', '!=', 0)->whereBetween('complete_at', [$startDateLast, $endDateLast])->count();

        $diff = $countCurrent - $countLast;
        $percentage = $countLast > 0 ? ($diff / $countLast) * 100 : 0;
        $awal = itemModel::where('complete_at', '<', carbon::now('Asia/Jakarta'))->where(function ($query) {
            $query->where('status', 1)->orWhere('status', 0);})->sum('harga_awal');
        $akhir = itemModel::where('complete_at', '<', carbon::now('Asia/Jakarta'))->where(function ($query) {
            $query->where('status', 1)->orWhere('status', 0);})->sum('harga_akhir');
        $profit = $akhir - $awal;
        $x = itemModel::where('status', 1)->where(function ($query) {
            $query->where('id_user', 0);
        })->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
        $item = itemModel::where(function ($query) {
            $query->where('status', 1)->orWhere('status', 0);})->where('id_user', '!=', 0)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();        $xcountawal = $item->sum('harga_awal');
            $xcountakhir = $item->sum('harga_akhir');
            $xprofit = $xcountakhir - $xcountawal;
        $report = Carbon::now('Asia/Jakarta')->month;
        // $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
        $total = itemModel::where('complete_at', '<', Carbon::now('Asia/Jakarta'))->where(function($q){$q->where('status',0)->orWhere('status',1);})->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();

        return view('petugas.dashboard' , [
            'profit' => $profit,
            'item' => $item,
            'total'=> $total,
            'x'=> $x,
            'xprofit'=> $xprofit

        ]);
    }
    public function item(){
        $kategori = kategoriModel::all();
        $item = itemModel::orderBy('id', 'desc')->get();
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
