@extends('layouts.dashboard')
@section('title')
    Create Products
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12">
                <form action="{{ route('liga.update', $liga->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Nama Liga</label>
                        <input class="form-control" type="text" value="{{ $liga->nama }}" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Negara Produk</label>
                        <input class="form-control" type="text" value="{{ $liga->negara }}" name="negara">
                    </div>
                    <div class="mb-3">
                        <label for="">Gambar Nameset</label>
                        <input class="form-control" type="file" name="gambar">
                    </div>
                    <button class="btn btn-primary mb-2" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection