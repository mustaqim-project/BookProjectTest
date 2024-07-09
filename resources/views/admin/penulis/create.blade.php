@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Tambah Penulis</h2>
        <form action="{{ route('penulis.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="biografi">Biografi:</label>
                <textarea class="form-control" id="biografi" name="biografi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#biografi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
