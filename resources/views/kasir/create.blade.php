@extends('partial.maindashboard')
@section('title' ,'Tambah Transaksi')
@section('sidebar')
<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/kasir">Menu</a></li>
      </ul>
    </li>
  </ul>
  @endsection
@section('content')
<div class="container mt-5">    
        <div class="text-center">Tambah Transaksi</div>
    
     <form action="/kasir" method="POST">
        @csrf
        <label for="id_detail_order">Id Detail</label>
        <select name="id_detail_order" id="id_detail_order" class="custom-select form-control">
          <option selected disabled>Pilih Id</option>
          @foreach ($dtl as $key=>$det)
          <option value="{{$key}}">{{$det}}
          </option>
          @endforeach
        </select>

        <input type="submit" value="Simpan" class="btn btn-danger">
    </form> 
    
</div>
@endsection