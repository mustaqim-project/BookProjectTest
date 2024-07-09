<nav class="navbar navbar-header navbar-expand navbar-light">
    <div class="page-title">
        <img src="admin/image/tokobuku.png" alt="logo" srcset="" height="50"/>

    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
            @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
    @else
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="avatar mr-1">
                    <img src="admin/assets/images/avatar/avatar-s-1.png" alt="" srcset="" />
                </div>
                <div class="d-none d-md-block d-lg-inline-block">
                    Hi, {{ Auth::user()->name }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
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

