@extends('layouts.dashboard')
@section('title')
    Create Products
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Produk</label>
                        <input class="form-control" type="text" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Harga Produk</label>
                        <input class="form-control" type="text" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="">Harga Nameset</label>
                        <input class="form-control" type="text" name="harga_nameset">
                    </div>
                    <div class="mb-3">
                        <label for="">Status Produk</label>
                        <select class="form-control" name="is_ready">
                            <option value="1">Stok Ready</option>
                            <option value="0">Stok Habis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Produk</label>
                        <input class="form-control" type="text" name="jenis">
                    </div>
                    <div class="mb-3">
                        <label for="">Berat Produk</label>
                        <input class="form-control" type="text" name="berat">
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar Produk</label>
                        <input class="form-control" type="file" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="">Liga Produk</label>
                        <select class="form-control" name="liga_id">
                            @foreach ($liga as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary mb-2" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection