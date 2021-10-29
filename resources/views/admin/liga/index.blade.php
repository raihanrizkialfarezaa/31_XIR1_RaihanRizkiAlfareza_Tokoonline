@extends('layouts.dashboard')
@section('title', 'Products')
@section('content')
    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-md-2 mb-3 ml-auto">
                <a href="{{ route('liga.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="col-md-12">
                <div class="table table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>No.</th>
                            <th>Nama Liga</th>
                            <th>Negara</th>
                            <th>Aksi</th>
                        </thead>
                        <?php $i = 1; ?>
                        @forelse ($liga as $row)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->negara }}</td>
                                <td>
                                    <a href="{{ route('liga.edit', $row->id) }}" class="btn btn-primary">Edit</a> |
                                    <form action="{{ route('liga.destroy', $row->id) }}" method="POST" class="d-inline">
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