@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Detail Penerbit</h2>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <p>{{ $penerbit->nama }}</p>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <p>{{ $penerbit->alamat }}</p>
        </div>
        <a href="{{ route('penerbit.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
