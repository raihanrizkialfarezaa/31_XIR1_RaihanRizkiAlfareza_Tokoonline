@extends('layouts.dashboard')

@section('title')
    Create Status
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12">
                <form action="{{ route('status.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <button type="submit" class="btn btn-primary rounded">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection