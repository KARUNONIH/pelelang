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
        $kategori = kategoriModel::all();
        return view('admin.kategori', [
            'kategori' => $kategori,
        ]);
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
       $validate = $request->validate([
            'nama_kategori' =>'required',
        ]);

        if($validate){
           $store = kategoriModel::create([
                'nama_kategori' => $request->nama_kategori,
            ]);
            if($store){
                Alert::success('Berhasil', 'Kategori berhasil ditambahkan');
            }
        }


        return redirect('/kategori')->with('success', 'Data kategori berhasil diperbarui!');

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
        kategoriModel::where('id', $id)->update(['nama_kategori' => $request->nama_kategori]);
        return redirect('admin/kategori')->with('success', 'Data kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategoriModel::where('id', $id)->delete();
        return redirect('admin/kategori')->with('success', 'Data kategori berhasil dihapus!');
    }
}
