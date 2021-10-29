@extends('layouts.dashboard')

@section('title')
    Edit Status
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-12">
                <form action="{{ route('pesanan.update', $pesanan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            @foreach ($status as $row)
                                @if ($pesanan->status == $row->id)
                                    <option value="{{ $row->id }}" selected>{{ $row->nama }}</option>
                                @else
                                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection