@extends('partial.maindashboard')
@section('title' ,'entri meja')
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
          <h1>Meja</h1>
      </div>

      <div class="section-body">
          <a href="admin/meja/create" class="btn btn-primary mb-3">Tambah Meja</a>

          <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id Order</th>
                    <th scope="col">No Meja</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Id User</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status Order</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $key=>$mja)
                <tr>
                <th>{{$key +1 }}</th>
                <th>{{$mja->no_meja}}</th>
                <th>{{$mja->tanggal}}</th>
                <th>{{$mja->id_user}}</th>
                <th>{{$mja->keterangan}}</th>
                <th>{{$mja->status_order}}</th>
                <td>
                <a href="{{route('destroymeja', $mja->id_order)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('editmeja', $mja->id_order)}}" class="btn btn-primary">Edit</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </section>
  @endsection