@extends('layouts.dashboard')
@section('title', 'Products')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-md-2 mb-3 ml-auto">
                <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="col-md-12">
                <div class="table table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>No.</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Harga Nameset</th>
                            <th>Status Stok</th>
                            <th>Jenis</th>
                            <th>Aksi</th>
                        </thead>
                        <?php $i = 1; ?>
                        @forelse ($products as $row)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ number_format($row->harga) }}</td>
                                <td>{{ number_format($row->harga_nameset) }}</td>
                                @if ($row->is_ready == 1)
                                    <td>Stok Ready</td>
                                @else
                                    <td>Stok Habis</td>
                                @endif
                                <td>{{ $row->jenis }}</td>
                                <td>
                                    <a href="{{ route('product.edit', $row->id) }}" class="btn btn-primary">Edit</a> |
                                    <form action="{{ route('product.destroy', $row->id) }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="7">Data Masih Kosong!</td>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection