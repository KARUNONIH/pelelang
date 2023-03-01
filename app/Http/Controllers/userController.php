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
    public function index(Request $request){
        $almost = itemModel::take(10)->where('status', 0)->orderBy('complete_at', 'ASC')->where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->get();
        $new = itemModel::take(3)->where('status', 0)->where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->orderBy('id', 'DESC')->get();
        $b = itemModel::take(3)->where('status', 0)->where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->orderBy('id', 'DESC')->pluck('id');
        // $a = bidModel::whereIn('id_item', $b)->distinct('id_user')->count()->toArray();
        // return $a;
        $kategori = kategoriModel::all();
        if ($request->kategori){
            $item = itemModel::where('kategori_id', $request->kategori)->where('status', 0)->where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->paginate(8);
        }else if($request->has('terlaris')){
            $item = itemModel::withCount('bid')->orderBy('bid_count' , 'DESC')->where('status', 0)->where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->paginate(8);
        }else{
            $item = itemModel::where('complete_at', '>=', Carbon::now('Asia/Jakarta'))->where('status', 0)->paginate(8);

        }
        return view('user.home' , [
            'x' => $item,
            'kategori' => $kategori,
            'almost' => $almost,
            'new' => $new,
            // 'a'=>$a,
            // 'results' => $results
        ]);
    }

    public function cek(Request $request){
        $a = Auth::id();
        $b = bidModel::where('id_user', $a)->pluck('id_item');
        $d = User::where('id', $a)->value('name');
        if ($request->has('tertinggi')){
            $c = itemModel::where('id_user', $a)->where('complete_at' ,'>=',Carbon::now('Asia/Jakarta'))->get();
        }else{
            $c = itemModel::whereIn('id', $b)->where('complete_at' ,'>=',Carbon::now('Asia/Jakarta'))->get();
        }
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

    public function kategori(Request $request){
    //     $kategori = itemModel::query();
    //     $bid = bidModel::pluck('id_item');
    // if ($request->has('kategori')) {
    //    $kategori->where('kategori_id', $request->input('kategori'))->get();
    // }


    // // if ($request->has('terlaris')) {
    // //     $kategori->whereIn('id',$bid)->count();
    // // }
    // // if ($request->has('semua')) {
    // //     $kategori;
    // // }
    // return view('user.home', [
    //     // 'item' => $kategori,
    //     'kategori' => kategoriModel::all()
    // ]);
    }

    public function search(Request $request)
    {
        $employees = itemModel::all();
      if($request->keyword != ''){
      $employees = itemModel::where('nama','LIKE','%'.$request->keyword.'%')->get();
      }
      return response()->json([
         'employees' => $employees
      ]);
    }

}
