@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <h2>Daftar Penulis</h2>
        <a href="{{ route('penulis.create') }}" class="btn btn-primary mb-3">Tambah Penulis</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Biografi</th>
                <th>Action</th>
            </tr>
            @foreach ($penuliss as $pen)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $pen->nama }}</td>
                    <td>{{ $pen->biografi }}</td>
                    <td>
                        <form action="{{ route('penulis.destroy', $pen->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('penulis.show', $pen->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('penulis.edit', $pen->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus penulis ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
