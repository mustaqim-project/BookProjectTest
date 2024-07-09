@extends('admin.layouts.master')

@section('content')
<div class="container">
    <h2>Daftar Buku</h2>
    <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Action</th>
        </tr>
        @foreach ($bukus as $buku)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori->nama }}</td>
            <td>{{ $buku->penulis->nama }}</td>
            <td>{{ $buku->penerbit->nama }}</td>
            <td>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('buku.show', $buku->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection


