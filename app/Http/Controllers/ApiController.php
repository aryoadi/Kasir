<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return [
            'status' => 200,
            'data' => $barang
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $barang = new Barang;
        $barang->nama_masakan = $request->nama_masakan;
        $barang->harga = $request->harga;
        $barang->status_masakan = $request->status_masakan;
        $barang->save();
        return "Data Berhasil Masuk";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $nama_masakan =$request->nama_masakan;
        $harga =$request->harga;
        $status_masakan =$request->status_masakan;

        $barang = Barang::find($id);
        $barang->nama_masakan =$nama_masakan;
        $barang->harga =$harga;
        $barang->status_masakan =$status_masakan;
        $barang->save();
        return "Data Berhasil Di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return "Data Berhasil Di Hapus";
    }
}
