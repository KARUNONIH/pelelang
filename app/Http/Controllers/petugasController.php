<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemModel;
use App\Models\kategoriModel;
use Carbon\Carbon;

class petugasController extends Controller
{
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
        $x = itemModel::where(function ($q) {
            $q->where('status', 1)->orwhere('status',0);})->where('complete_at', '<=' ,Carbon::now('Asia/Jakarta'))->where('id_user', 0)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
        $item = itemModel::where(function ($query) {
            $query->where('status', 1)->orWhere('status', 0);})->where('complete_at', '<=', Carbon::now('Asia/Jakarta'))->where('id_user', '!=', 0)->whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->get();
            $xcountawal = $item->sum('harga_awal');
            $xcountakhir = $item->sum('harga_akhir');
            $xprofit = $xcountakhir - $xcountawal;
        $report = Carbon::now('Asia/Jakarta')->month;
        $kategori = kategoriModel::all();

        // $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
        $total = itemModel::whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->where('status', '!=', 2)->get();
        $ongoing = itemModel::whereMonth('complete_at',Carbon::now('Asia/Jakarta')->month)->where('status', '!=', 2)->where('complete_at', '>=' , Carbon::now('Asia/Jakarta'))->get();

        return view('petugas.dashboard' , [
            'profit' => $profit,
            'item' => $item,
            'total'=> $total,
            'x'=> $x,
            'xprofit'=> $xprofit,
            'ongoing' => $ongoing,
            'kategori' => $kategori,


        ]);
    }
    public function item(){
        $kategori = kategoriModel::all();
        $item = itemModel::orderByRaw("FIELD(status , 2 , 0, 1) ASC")->orderBy('complete_at', 'desc')->get();
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
