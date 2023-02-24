<?php

namespace App\Http\Controllers;
use App\Models\itemModel;
use App\Models\bidModel;
use App\Models\kategoriModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
    public function show($id)
    {
        $item = itemModel::where('id', $id)->first();
        return view('user.detail' , [
            'item' => $item,

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
        //     itemModel::where('id', $id)->update([
        //         'complete_at' => Carbon::now('Asia/Jakarta')
        //     ]);

        //     return redirect('/item');
        // }
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



}
