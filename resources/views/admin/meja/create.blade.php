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
        <div class="text-center">Tambah Meja</div>
    
    <form action="/meja" method="POST">
        @csrf
        <label for="no_meja">No Meja</label>
        <input type="text" class="form-control" name="no_meja">

        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal">
        
        {{-- <label for="id_user">id_user</label> --}}
        <input type="hidden" class="form-control" value="{{ Auth::user()->id_user }}" name="id_user">

        <label for="keterangan">keterangan</label>
        <input type="text" class="form-control" name="keterangan">

        <label for="status_order">Status order</label>
        <input type="text" class="form-control" name="status_order">
        <br>
        <input type="submit" value="Simpan" class="btn btn-danger">
    </form>
    
</div>
@endsection