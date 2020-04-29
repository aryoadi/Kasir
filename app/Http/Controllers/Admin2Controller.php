<?php

namespace App\Http\Controllers;

use App\Meja;
use Illuminate\Http\Request;

class Admin2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $order = Meja::All();
        return view ('admin/meja/meja', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin/meja/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Meja;
        $order->no_meja = $request->no_meja;
        $order->tanggal = $request->tanggal;
        $order->id_user = $request->id_user;
        $order->keterangan = $request->keterangan;
        $order->status_order = $request->status_order;
        $order->save();
        return redirect('/meja');

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
        $order = Meja::find($id);
        return view('/admin/meja/edit', compact('order'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatemeja(Request $request, $id)
    {
        $order = Meja::find($id);
            $order->no_meja = $request->no_meja;
            $order->tanggal = $request->tanggal;
            $order->id_user = $request->id_user;
            $order->keterangan = $request->keterangan;
            $order->status_order = $request->status_order;
        $order->update();
        return redirect('/meja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meja = Meja::destroy($id);
        return redirect('/meja');
    }
}
