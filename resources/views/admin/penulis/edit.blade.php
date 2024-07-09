@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Penulis</h2>
        <form action="{{ route('penulis.update', $penulis->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $penulis->nama }}">
            </div>
            <div class="form-group">
                <label for="biografi">Biografi:</label>
                <textarea class="form-control" id="biografi" name="biografi">{{ $penulis->biografi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Include CKEditor JS -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#biografi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
