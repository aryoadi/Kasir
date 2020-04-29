@extends('partial.maindashboard')
@section('title' ,'Transaksi')
@section('sidebar')
<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item">
      <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
    </li>
  </ul>
  @endsection
  @section('content')
  <section class="section">
      <div class="section-header">
          <h1>Transaksi</h1>
      </div>
      <a href="/kasir/create" class="btn btn-primary mb-3">Tambah Transaksi</a>

      <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Id Transaksi</th>
              {{-- <th scope="col">Id User</th> --}}
              <th scope="col">Id Order</th>
              <th scope="col">Nama Menu</th>
              {{-- <th scope="col">Harga</th> --}}
              <th scope="col">Tanggal</th>
              <th scope="col">Total Bayar</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $key=>$tr)
            <tr>
            <th>{{$key +1 }}</th>
            {{-- <th>{{$tr->id_user}}</th> --}}
            <th>{{$tr->id_order}}</th>
            <th>{{$tr->nama_masakan}}</th>
            {{-- <th>{{$tr->harga}}</th> --}}
            <th>{{$tr->tanggal}}</th>
            <th>{{$tr->total_bayar}}</th>
            {{-- <th>{{$tr->bayar}}</th> --}}
            <td>
            {{-- <a href="{{route('destroydetail', $mja->id_detail_order)}}" class="btn btn-danger">Delete</a> --}}
         <a href="" class="btn btn-primary">Bayar</a>
         </td>
            </tr>

          @endforeach
        </tbody>
    </table>
  </section>
      @endsection