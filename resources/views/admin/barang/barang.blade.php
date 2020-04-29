@extends('partial.maindashboard')
@section('title' ,'entri barang')
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
  <section class="section">
      <div class="section-header">
          <h1>Menu</h1>
      </div>

      <div class="section-body">
          <a href="admin/barang/create" class="btn btn-primary mb-3">Tambah Menu</a>

          <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status Makanan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $key=>$brg)
                <tr>
                <th>{{$key +1 }}</th>
                <th>{{$brg->nama_masakan}}</th>
                <th>{{$brg->harga}}</th>
                <th>{{$brg->status_masakan}}</th>
                <td>
                <a href="{{route('destroy', $brg->id_masakan)}}" class="btn btn-danger">Delete</a>
                
                <a href="{{route('editbarang', $brg->id_masakan)}}" class="btn btn-primary">Edit</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>

      </div>

  </section>
  @endsection