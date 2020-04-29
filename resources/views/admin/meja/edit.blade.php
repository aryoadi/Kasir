@extends('partial.maindashboard')
@section('title' ,'Edit Barang')
@section('sidebar')
<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/barang">Menu</a></li>
        <li><a class="nav-link" href="/meja">Meja</a></li>
      </ul>
    </li>
  </ul>
  @endsection
@section('content')
<div class="container mt-5">    
        <div class="text-center">Edit Menu</div>
<form method="POST" action="{{route('updatemeja',$order->id_order)}}">
  @csrf
        <input type="hidden" name="_method" value="patch">
        <label for="no_meja">No Meja</label>
    <input type="text" class="form-control" value="{{$order->no_meja}}" name="no_meja">

        <label for="tanggal">Tanggal</label>
    <input type="text" class="form-control" value="{{$order->tanggal}}" name="tanggal">
    
    <input type="hidden" class="form-control" value="{{ Auth::user()->id_user }}" name="id_user">
        
        <label for="keterangan">keterangan</label>
    <input type="text" class="form-control" value="{{$order->keterangan}}" name="keterangan">
    
    <label for="status_order">Status order</label>
<input type="text" class="form-control" value="{{$order->status_order}}" name="status_order">
        <br>
        <button type="submit" class="btn btn-danger">Edit data</button>
    </form>
</div>
@endsection