@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12 text-center">
                <div class="table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>Id</th>
                            <th>Nama</th>
                        </thead>
                        @forelse ($status as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama }}</td>
                            </tr>
                        @empty
                            <td colspan="2">Data Masih Kosong!</td>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection