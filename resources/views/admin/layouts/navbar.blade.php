<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="avatar mr-1">
                    <img src="{{ asset('admin/assets/images/avatar/avatar-s-1.png') }}" alt="" />
                </div>
                <div class="d-none d-md-block d-lg-inline-block">
                    Hi, {{ Auth::user()->name }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

