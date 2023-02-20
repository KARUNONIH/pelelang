<?php

namespace App\Http\Controllers;
use App\Models\itemModel;
use App\Models\kategoriModel;
use App\Models\bidModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class userController extends Controller
{
    public function index(){
        $kategori = kategoriModel::all();
        $item = itemModel::all();
        return view('user.home' , [
            'item' => $item,
            'kategori' => $kategori
        ]);
    }

    public function cek(){
        $a = Auth::id();
        $b = bidModel::where('id_user', $a)->pluck('id_item');
        $d = User::where('id', $a)->value('name');
        $c = itemModel::whereIn('id', $b)->where('complete_at' ,'>=',Carbon::now('Asia/Jakarta'))->get();
        return view('user.cek', [
            'c' => $c ,
            'nama' => $d,

        ]);
    }

    public function history(){
        $a = Auth::id();
        $b = bidModel::where('id_user', $a)->pluck('id_item');
        $d = User::where('id', $a)->value('name');
        
        $item = itemModel::whereIn('id', $b)->where('complete_at' ,'<',Carbon::now('Asia/Jakarta'))->get();
        return view('user.history' ,[
            'item' => $item,
            'nama' => $d
        ]);
    }
}
