@extends('partial.maindashboard')
@section('title' ,'Tambah Barang')
@section('sidebar')
<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/waiter">Menu</a></li>
      </ul>
    </li>
  </ul>
  @endsection
@section('content')
<div class="container mt-5">    
        <div class="text-center">Tambah Order</div>
    
    <form action="/waiter/order" method="POST">
        @csrf
        <label for="no_meja">Nomor Meja</label>
        <select id="id_order" name="id_order" class="custom-select form-control">
            <option selected disabled>Pilih Nomor Meja</option>
             @foreach ($nome as $key=>$det)
            <option value="{{$key}}">{{$det}}
            </option>
            @endforeach
          </select> <br><br>

        <label for="nama_masakan">Nama Menu</label>
        <select id="id_masakan" name="id_masakan" class="custom-select form-control">
            <option selected disabled>Pilih Menu</option>
             @foreach ($masak as $key=>$mask)
            <option value="{{$key}}">{{$mask}}
            </option>
            @endforeach
          </select><br><br>

        <label for="keterangan">keterangan</label>
        <input type="text" class="form-control" name="keterangan">

        <label for="status_detail_order">Status order</label>
        <input type="text" class="form-control" name="status_detail_order">
        <br>
        <input type="submit" value="Simpan" class="btn btn-danger">
    </form>
    
</div>
@endsection