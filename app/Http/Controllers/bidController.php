<?php

namespace App\Http\Controllers;
use App\Models\bidModel;
use App\Models\itemModel;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class bidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bid = bidModel::all();
        return redirect('/item-detail', [
            'bid' => $bid
        ]);
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
    public function store(Request $request, $item_id)
    {
        $request->validate([
            'bid_price' => 'required',
        ]);

       $a = bidModel::create([
            'bid_price' => $request->bid_price,
            'id_item' => $item_id,
            'id_user' => Auth::id()

        ]);

       itemModel::where('id' ,$item_id)->update([
            'harga_akhir' => $request->bid_price,
            'id_user' => Auth::id()
        ]);

        if($a){
            Alert::success('Berhasil', 'Bid berhasil ditambahkan');
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
            'item' => $item
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Auth::id();
        $h = user::where('type',0)->pluck('id');
        $r = bidModel::where('id_item', $id)->distinct('id_user')->wherein('id_user', $h)->count();
        $b = bidModel::where('id_item', $id)->orderBy('bid_price', 'DESC')->first()->value('id_user');

        bidModel::where('id_user', $a)->where('id_item', $id)->delete();
        $e =bidModel::where('id_item', $id)->orderBy('bid_price', 'DESC')->value('bid_price');
        if ($e == null) {
            $c = itemModel::where('id', $id)->value('harga_awal');
        }else{
            $c = $e;
        }
        if ($r == 1){
            $b = 0;
        }else{
            $b = bidModel::where('id_item', $id)->orderBy('bid_price', 'DESC')->first()->value('id_user');
        }

        itemModel::where('id', $id)->update([
            'id_user' => $b,
            'harga_akhir' =>$c
        ]);
        return redirect()->back();
    }
}
