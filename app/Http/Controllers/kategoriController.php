<?php

namespace App\Http\Controllers;

use App\Models\itemModel;
use App\Models\kategoriModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $kategori = kategoriModel::all();
        // return view('admin.kategori', [
        //     'kategori' => $kategori,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'nama_kategori' =>'required',
        ]);


           $store = kategoriModel::create([
                'nama_kategori' => $request->nama_kategori,
            ]);
            if($store){
                Alert::success('Berhasil', 'Kategori berhasil ditambahkan');
            }else{
                Alert::error('Error', 'Kategori gagal ditambahkan!');
            }
        

        return redirect()->back()->with('success', 'Data kategori berhasil diperbarui!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
       $request->validate([
            'nama_kategori' =>'required',
        ]);


           $p = kategoriModel::where('id', $id)->update(['nama_kategori' => $request->nama_kategori]);

        if ($p){
            Alert::success('Success', 'Kategori berhasil Diedit');
        } else {
            Alert::error('Error', 'Kategori gagal Diedit!');
        }
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
       $a = kategoriModel::where('id', $id)->delete();
       if ($a){
            Alert::success('Success', 'Kategori berhasil dihapus');
       } else {
            Alert::error('Error', 'Kategori gagal dihapus!');
       }
        return redirect()->back()->with('success', 'Data kategori berhasil dihapus!');
    }
}
