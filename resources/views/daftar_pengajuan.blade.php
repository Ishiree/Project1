@extends('layouts.app')
@section('tittle', 'Daftar Barang')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">Nama Barang</th>
                <th scope="col" class="text-center">Quantity</th>
                <th scope="col" class="text-center">Total Harga</th>
                <th scope="col" class="text-center">Nama Pemohon</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pengajuan as $ajuan)
              <tr>
                <td>{{ $ajuan->nama_barang }}</td>
                <td>{{ $ajuan->quantity }}</td>
                <td>{{ $ajuan->total_harga }}</td>
                <td>{{ $ajuan->nama_pemohon }}</td>
                <td>Diproses</td>
                <td class="text-center"> <a href="" class="badge badge-warning">edit</a>
                    <a href="daftar_pengajuan.show" class="badge badge-primary">detail</a> </td>
              @endforeach
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection