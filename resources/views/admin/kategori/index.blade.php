@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Daftar Kategori</h2>
        <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $kategori->nama }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('kategori.show', $kategori->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('kategori.edit', $kategori->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
