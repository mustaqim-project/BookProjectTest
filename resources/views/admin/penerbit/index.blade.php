@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Daftar Penerbit</h2>
        <a href="{{ route('penerbit.create') }}" class="btn btn-primary mb-3">Tambah Penerbit</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            @foreach ($penerbits as $pen)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $pen->nama }}</td>
                    <td>{{ $pen->alamat }}</td>
                    <td>
                        <form action="{{ route('penerbit.destroy', $pen->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('penerbit.show', $pen->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('penerbit.edit', $pen->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus penerbit ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
