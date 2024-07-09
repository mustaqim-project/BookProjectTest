@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Tambah Buku</h2>
        <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar" onchange="previewImage(event)">
                <img id="preview" src="#" alt="Preview Gambar" style="max-width: 200px; margin-top: 10px; display: none;">
            </div>

            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori:</label>
                <select class="form-control" id="kategori_id" name="kategori_id">
                    @foreach ($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="penulis_id">Penulis:</label>
                <select class="form-control" id="penulis_id" name="penulis_id">
                    @foreach ($penulis as $pen)
                        <option value="{{ $pen->id }}">{{ $pen->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="penerbit_id">Penerbit:</label>
                <select class="form-control" id="penerbit_id" name="penerbit_id">
                    @foreach ($penerbit as $pen)
                        <option value="{{ $pen->id }}">{{ $pen->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- JavaScript untuk preview gambar -->
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
