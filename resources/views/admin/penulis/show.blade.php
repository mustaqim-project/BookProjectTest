@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Detail Penulis</h2>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <p>{{ $penulis->nama }}</p>
        </div>
        <div class="form-group">
            <label for="biografi">Biografi:</label>
            <p>{{ $penulis->biografi }}</p>
        </div>
        <a href="{{ route('penulis.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection
