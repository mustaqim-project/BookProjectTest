@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Buku</h2>
        <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="gambar">Gambar:</label>
                @if ($buku->gambar)
                    <img src="{{ asset('images/' . $buku->gambar) }}" alt="{{ $buku->judul }}" class="img-fluid mb-2"
                        style="max-width: 300px;">
                    <br>
                @endif
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori:</label>
                <select class="form-control" id="kategori_id" name="kategori_id">
                    @foreach ($kategori as $kat)
                        <option value="{{ $kat->id }}" {{ $buku->kategori_id == $kat->id ? 'selected' : '' }}>
                            {{ $kat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="penulis_id">Penulis:</label>
                <select class="form-control" id="penulis_id" name="penulis_id">
                    @foreach ($penulis as $pen)
                        <option value="{{ $pen->id }}" {{ $buku->penulis_id == $pen->id ? 'selected' : '' }}>
                            {{ $pen->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="penerbit_id">Penerbit:</label>
                <select class="form-control" id="penerbit_id" name="penerbit_id">
                    @foreach ($penerbit as $pen)
                        <option value="{{ $pen->id }}" {{ $buku->penerbit_id == $pen->id ? 'selected' : '' }}>
                            {{ $pen->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{!! $buku->deskripsi !!}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    {{-- Include CKEditor script --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
