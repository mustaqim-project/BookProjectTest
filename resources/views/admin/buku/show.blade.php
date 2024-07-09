@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Detail Buku</h2>
        <div class="form-group">
            <label for="judul">Judul:</label>
            <p>{{ $buku->judul }}</p>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori:</label>
            <p>{{ $buku->kategori->nama }}</p>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis:</label>
            <p>{{ $buku->penulis->nama }}</p>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit:</label>
            <p>{{ $buku->penerbit->nama }}</p>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <p>{{ $buku->deskripsi }}</p>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            @if ($buku->gambar)
                <img src="{{ asset('images/' . $buku->gambar) }}" alt="{{ $buku->judul }}" class="img-fluid">
            @else
                <p>No image available</p>
            @endif
        </div>
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
