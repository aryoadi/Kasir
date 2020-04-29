<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meja;
use App\Barang;
use App\Order;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = DB::table('detail_order')
        ->join('order', 'detail_order.id_order', '=', 'order.id_order')
        ->join('masakan', 'detail_order.id_masakan', '=', 'masakan.id_masakan')
        ->select('detail_order.*', 'order.no_meja', 'masakan.harga','masakan.nama_masakan')
        ->get();
        // dd($detail);
        return view('waiter/order',compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nome = Meja::pluck('no_meja','id_order');
        $masak = Barang::pluck('nama_masakan','id_masakan');
        return view('waiter/corder',compact('nome','masak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $det = Order::create($request->all());
        return redirect('/waiter/order');
        
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
        $ord = Order::destroy($id);
        return redirect('/waiter/order');
    }
}
