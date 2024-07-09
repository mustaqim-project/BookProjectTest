@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Tambah Penerbit</h2>
        <form action="{{ route('penerbit.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
