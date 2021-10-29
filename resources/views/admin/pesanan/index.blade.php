@extends('layouts.dashboard')

@section('title')
    Pesanan
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12">
                <div class="table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>No. Pesanan</th>
                            <th>Nama User</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        @forelse ($pesanan as $row)
                            <tr>
                                <td>{{ $row->kode_pemesanan }}</td>
                                <td>{{ $row->user->name }}</td>
                                @if ($row->status == 0)
                                    <td>Sedang Di Keranjang</td>
                                @else
                                    <td>{{ $row->statuss->nama }}</td>
                                @endif
                                <td>
                                    <a href="{{ route('pesanan.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        @empty
                            
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection