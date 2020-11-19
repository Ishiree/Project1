@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Form Pengajuan Barang
                </div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <form action="{{ route('daftar_pengajuan.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label class="text-left">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control mb-3" autofocus required>
                        <label class="text-left">Quantity</label>
                        <input type="text" name="quantity" class="form-control mb-3" autofocus required>
                        <label class="text-left">Total Harga</label>
                        <input type="text" name="total_harga" class="form-control mb-3" autofocus required>
                        <label class="text-left">Nama Pemohon</label>
                        <input type="text" name="nama_pemohon" class="form-control mb-3" autofocus required>
                        <button type="submit" class="btn btn-success mt-3">Save</button>
                    </div>
                </form>
                  
                </div>
              </div>
        </div>
    </div>
</div>
@endsection