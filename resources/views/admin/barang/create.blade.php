@extends('partial.maindashboard')
@section('title' ,'Tambah Barang')
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
        <div class="text-center">Tambah Menu</div>
    
    <form action="/barang" method="POST">
        @csrf
        <label for="nama_masakan">Nama Menu</label>
        <input type="text" class="form-control" name="nama_masakan">

        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga">
        
        <label for="status_masakan">Status makanan</label>
        <input type="text" class="form-control" name="status_masakan">
        <br>
        <input type="submit" value="Simpan" class="btn btn-danger">
    </form>
    
</div>
@endsection