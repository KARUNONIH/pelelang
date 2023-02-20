<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\itemModel;
use Carbon\Carbon;

class adminController extends Controller
{
    public function index(){
        $awal = itemModel::sum('harga_awal');
        $akhir = itemModel::sum('harga_akhir');
        $profit = $akhir - $awal;
        // $report = itemModel::where('complete_at', '<', date('y-m-d'))->orderBy('complete_at')->gr;
        $report = Carbon::now('Asia/Jakarta')->month;
        // $item = itemModel::take(6)->orderBy('complete_at', 'DESC')->where('complete_at', '>=' ,date('y-m-d'))->get();
        $item = itemModel::whereMonth('complete_at', '=', $report)->where('complete_at', '<', Carbon::now('Asia/Jakarta'))->get();
        return view('admin.dashboard' , [
            'profit' => $profit,
            'item' => $item
        ]);
    }
    public function item(){
        return view('admin.item');
    }
}
