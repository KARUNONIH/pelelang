<?php

namespace App\Http\Controllers;
use App\Models\itemModel;
use App\Models\bidModel;
use App\Models\User;
use App\Models\kategoriModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategori = kategoriModel::all();
        // $item = itemModel::all();
        // return view('admin.item' , [
        //     'item' => $item,
        //     'kategori' => $kategori
        // ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga_awal' => 'required',
            'deskripsi' => 'required',
            'complete_at' => 'required',
            'gambar' => 'required',
            'kategori_id' => 'required',

        ]);
            // $validate['user_id'] = Auth::id();

       if($request->file('gambar')){
            $gambar = $request->file('gambar')->store('item_image');
        }

        $a = $request->complete_at;
        if($a < Carbon::now()){
            itemModel::create([
                'nama' => $request->nama,
                'harga_awal' => $request->harga_awal,
                'harga_akhir' => $request->harga_awal,
                'deskripsi' => $request->deskripsi,
                'complete_at' => $request->complete_at,
                'kategori_id' => $request->kategori_id,
                'gambar' => $gambar,
                'status' => 1
            ]);
        }else{
            itemModel::create([
                'nama' => $request->nama,
                'harga_awal' => $request->harga_awal,
                'harga_akhir' => $request->harga_awal,
                'deskripsi' => $request->deskripsi,
                'complete_at' => $request->complete_at,
                'kategori_id' => $request->kategori_id,
                'gambar' => $gambar,
                'status' => 2
            ]);
        }




        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, itemModel $itemModel, bidModel $bidModel)
    {
        $a = Auth::id();
        $h = user::where('type',0)->pluck('id');
        $b = bidModel::where('id_item', $id)->where('id_user', $a)->orderBy('bid_price', 'desc')->value('bid_price');
        $item = itemModel::where('id', $id)->first();
        $price = bidModel::where('id_item', $id)->orderBy('bid_price', 'desc')->value('bid_price');
        if ($price == null) {
            $c = itemModel::where('id', $id)->value('harga_awal');
        }else {
            $c = $price;
        }
        if (itemModel::where('id', $id)->value('harga_awal') <= 100) {

            $j = 1;
        }elseif(itemModel::where('id', $id)->value('harga_awal') <= 1000 && itemModel::where('id', $id)->value('harga_awal')>=101){
            $j = 10;
        }elseif(itemModel::where('id', $id)->value('harga_awal') <= 10000 && itemModel::where('id', $id)->value('harga_awal')>=1001){
            $j = 100;
        }elseif(itemModel::where('id', $id)->value('harga_awal') <= 100000 && itemModel::where('id', $id)->value('harga_awal')>=10001){
            $j = 1000;
        }elseif(itemModel::where('id', $id)->value('harga_awal') <= 1000000 && itemModel::where('id', $id)->value('harga_awal')>=100001){
            $j = 10000;
        }
        $e = bidModel::where('id_item', $id)->distinct('id_user')->wherein('id_user', $h)->count();
        $f = itemModel::where('id', $id)->get();

        $d = bidmodel::where('id_item', $id)->where('id_user', $a)->get();
        return view('user.detail' , [
            'item' => $item,
            'bid' => $b,
            'c' => $c,
            'd' => $d,
            'f' => $f,
            'e' => $e,
            'j'=> $j,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validate=  $request->validate([
            'nama' =>'required',
            // 'harga_awal' =>'required',
            // 'deskripsi' =>'required',
            // 'complete_at' =>'required',
            'gambar' =>'required',
            // 'kategori_id' =>'required',

        ]);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validate['gambar'] = $request->file('gambar')->store('item_image');
        }
        itemModel::where('id', $id)->update($validate);
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function start($id ,Request $request)
    {
    $lelang = itemModel::find($id);
    $lelang->status = "0";
    $lelang->save();
    return redirect()->back()->with('success', 'Lelang berhasil dimulai.');
    }
    public function stop($id)
{
    $lelang = itemModel::find($id);
    $lelang->status = "1";
    $lelang->save();

        itemModel::where('id', $id)->update([
            'complete_at' => Carbon::now('Asia/Jakarta')
        ]);

    return redirect()->back()->with('success', 'Lelang berhasil dihentikan.');
}

public function pay($id)
    {   $user = Auth::id();
        $item = itemModel::where('id', $id)->first();
        return view('user.pay' , [
            'item' => $item,
            'user'=>$user

        ]);
    }


}
