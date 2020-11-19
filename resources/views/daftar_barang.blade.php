@extends('layouts.app')
@section('tittle', 'Daftar Barang')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                
                <th scope="col">Nama Barang</th>
                <th scope="col">Quantity</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->status }}</td>
              @endforeach
              </tr>
            </tbody>
          </table>
          
        </div>
    </div>
</div>
@endsection
