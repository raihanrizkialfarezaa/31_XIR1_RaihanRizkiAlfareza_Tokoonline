@extends('layouts.dashboard')
@section('title')
    Create Products
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12">
                <form action="{{ route('liga.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama Liga</label>
                        <input class="form-control" type="text" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="">Negara Produk</label>
                        <input class="form-control" type="text" name="negara">
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