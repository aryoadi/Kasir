@extends('partial.maindashboard')
@section('title' ,'Edit Barang')
@section('sidebar')
<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/barang">Menu</a></li>
      </ul>
    </li>
  </ul>
  @endsection
@section('content')
<div class="container mt-5">    
        <div class="text-center">Edit Menu</div>
<form method="POST" action="{{route('update',$barang->id_masakan)}}">
  @csrf
        <input type="hidden" name="_method" value="patch">
        <label for="nama_masakan">Nama Menu</label>
    <input type="text" class="form-control" value="{{$barang->nama_masakan}}" name="nama_masakan">

        <label for="harga">Harga</label>
    <input type="text" class="form-control" value="{{$barang->harga}}" name="harga">
        
        <label for="status_masakan">Status makanan</label>
    <input type="text" class="form-control" value="{{$barang->status_masakan}}" name="status_masakan">
        <br>
        <button type="submit" class="btn btn-danger">Edit data</button>
    </form>
</div>
@endsection