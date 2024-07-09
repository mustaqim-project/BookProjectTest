@extends('admin.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Tambah Kategori</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
