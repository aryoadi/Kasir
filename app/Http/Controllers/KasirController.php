<?php
namespace App\Http\Controllers;
use App\Barang;
use App\Transaksi;
use App\Meja;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KasirController extends Controller
{
    public function index()
    {
        
        $transaksi = DB::table('transaksi')
        ->join('detail_order', 'transaksi.id_detail_order', '=', 'detail_order.id_detail_order')
        ->join('order', 'detail_order.id_order', '=', 'order.id_order')
        ->join('masakan', 'detail_order.id_masakan', '=', 'masakan.id_masakan')
        ->select('transaksi.*', 'detail_order.*', 'order.no_meja', 'masakan.nama_masakan', 'masakan.harga')
        ->get();
        // dd($transaksi);
        return view('kasir/index', compact('transaksi'));
    }
    public function create()
    {
        // $detail = DB::table('detail_order')
        // ->join('order', 'detail_order.id_order', '=', 'order.id_order')
        // ->select('detail_order.id_detail_order', 'order.no_meja')
        // ->get();
        $dtl = Order::pluck('id_detail_order');
        // $nom = Meja::pluck('no_meja','id_order');
        // $msk = Barang::pluck('nama_masakan','id_masakan');
        // return view('kasir/create',compact('nom','msk'));
        return view('/kasir/create', compact('dtl'));
    }
    public function store(Request $request)
    {
        // $tsk = new \App\Transaksi;
        // $tsk->id_detail_order = $request->id_detail_order;
        // $tsk->tanggal = $request->tanggal;
        // $tsk->total_bayar = $request->total_bayar;
        // $tsk->save();
        $det = Transaksi::create($request->all());
        // return redirect('/kasir');
        // dd($trans);
        return redirect('/kasir');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id) {
        // $transaksi = Transaksi::find($id);
        // return $transaksi;
    }
    public function update(Request $request, $id)
    {
        // $transaksi = Transaksi::findOrFail($id);
        // if ($request->total_bayar <= $request->kembalian) {
        //     $transaksi->kembalian = $request->kembalian - $request->total_bayar;
        //     $transaksi->update();    
    
        //     return response()->json([
        //         'success'=> true
        //     ]);
        // }
        // return false;
    }

    public function destroy($id_transaksi)
    {
        // Transaksi::destroy($id_transaksi);
        // return redirect('/kasir');
    }
}