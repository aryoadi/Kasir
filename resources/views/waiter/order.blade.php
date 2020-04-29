@extends('partial.maindashboard')
@section('title' ,'Order')
@section('sidebar')
<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="/waiter">Menu</a></li>
        <li><a class="nav-link" href="/order">order</a></li>
      </ul>
    </li>
  </ul>
  @endsection
  @section('content')
  <section class="section">
      <div class="section-header">
          <h1>Order</h1>
      </div>
      <a href="/waiter/corder" class="btn btn-primary mb-3">Tambah Order</a>

      <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Id Order</th>
              <th scope="col">No Meja</th>
              <th scope="col">Nama Masakan</th>
              <th scope="col">Harga</th>
              <th scope="col">keterangan</th>
              <th scope="col">Status Order</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detail as $key=>$mja)
            <tr>
            <th>{{$key +1 }}</th>
            <th>{{$mja->no_meja}}</th>
            <th>{{$mja->nama_masakan}}</th>
            <th>{{$mja->harga}}</th>
            <th>{{$mja->keterangan}}</th>
            <th>{{$mja->status_detail_order}}</th>
            <td>
            <a href="{{route('destroydetail', $mja->id_detail_order)}}" class="btn btn-danger">Delete</a>
            {{-- <a href="{{route('edit', $mja->id_masakan)}}" class="btn btn-primary">Edit</a> --}}
            </td>
            </tr>

          @endforeach
        </tbody>
    </table>
  </section>
      @endsection