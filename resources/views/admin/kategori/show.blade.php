@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Detail Kategori</h2>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <p>{{ $kategori->nama }}</p>
        </div>
        <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
