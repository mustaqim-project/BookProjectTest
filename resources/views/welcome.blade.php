<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .book-card {
            cursor: pointer;
        }

        .book-card:hover {
            background-color: #f8f9fa;
        }

        .modal-body img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
        <img src="{{ asset('admin/image/tokobuku.png') }}" alt="logo" height="50" />
        Buku</a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="kategoriDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="kategoriDropdown">
                        @foreach ($kategories as $kategori)
                            <a class="dropdown-item"
                                href="{{ url('/dash/kategori/' . $kategori->id) }}">{{ $kategori->nama }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="penulisDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Penulis
                    </a>
                    <div class="dropdown-menu" aria-labelledby="penulisDropdown">
                        @foreach ($penulis as $author)
                            <a class="dropdown-item"
                                href="{{ url('/dash/penulis/' . $author->id) }}">{{ $author->nama }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="penerbitDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Penerbit
                    </a>
                    <div class="dropdown-menu" aria-labelledby="penerbitDropdown">
                        @foreach ($penerbits as $publisher)
                            <a class="dropdown-item"
                                href="{{ url('/dash/penerbit/' . $publisher->id) }}">{{ $publisher->nama }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">
                            <div class="avatar mr-1">
                                <img src="admin/assets/images/avatar/avatar-s-1.png" alt="User Avatar"
                                    class="rounded-circle img-thumbnail" style="width: 50px; height: 50px;">

                                Hi, {{ Auth::user()->name }}
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>




    <div class="container mt-4">
        <div class="row">
            @foreach ($bukus as $buku)
                <div class="col-md-4 mb-4">
                    <div class="card book-card" data-toggle="modal" data-target="#bookModal"
                        data-book="{{ json_encode($buku) }}">
                        <img src="{{ asset('images/' . $buku->gambar) }}" class="card-img-top"
                            alt="{{ $buku->judul }}" style=" height: 300px;">

                        <div class="card-body">
                            <h5 class="card-title">{{ $buku->judul }}</h5>
                            <p class="card-text">{!! Str::limit($buku->deskripsi, 100) !!}</p>
                            <p class="card-text"><small class="text-muted">Penulis: {{ $buku->penulis->nama }}</small>
                            </p>
                            <p class="card-text"><small class="text-muted">Penerbit:
                                    {{ $buku->penerbit->nama }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookModalLabel">Detail Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="Book Image" id="bookImage">
                    <h5 id="bookTitle"></h5>
                    <p id="bookDescription"></p>
                    <p><small class="text-muted">Penulis: <span id="bookAuthor"></span></small></p>
                    <p><small class="text-muted">Penerbit: <span id="bookPublisher"></span></small></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#bookModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var book = button.data('book');
            var modal = $(this);
            modal.find('#bookImage').attr('src', '/images/' + book.gambar);
            modal.find('#bookTitle').text(book.judul);
            modal.find('#bookDescription').html(book.deskripsi);
            modal.find('#bookAuthor').text(book.penulis.nama);
            modal.find('#bookPublisher').text(book.penerbit.nama);
        });
    </script>

</body>

</html>
