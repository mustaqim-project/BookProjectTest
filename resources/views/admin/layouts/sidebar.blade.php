<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="{{ asset('admin/image/tokobuku.png') }}" alt="logo" srcset="" />
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Main Menu</li>

                <li class="sidebar-item">
                    <a href="/home" class="sidebar-link">
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Book Store</li>

                <li class="sidebar-item">
                    <a href="{{ route('buku.index') }}" class="sidebar-link">
                        <i data-feather="book" width="20" height="20"></i>
                        <span>Buku</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('kategori.index') }}" class="sidebar-link">
                        <i data-feather="tag" width="20" height="20"></i>
                        <span>Kategori</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('penulis.index') }}" class="sidebar-link">
                        <i data-feather="pen-tool" width="20" height="20"></i>
                        <span>Penulis</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('penerbit.index') }}" class="sidebar-link">
                        <i data-feather="printer" width="20" height="20"></i>
                        <span>Penerbit</span>
                    </a>
                </li>


                <script>
                    function setActiveLink() {
                        const currentPath = window.location.pathname;
                        const links = document.querySelectorAll('.sidebar-link');

                        links.forEach(link => {
                            if (link.getAttribute('href') === currentPath) {
                                link.parentElement.classList.add('active');
                            }
                        });
                    }
                    setActiveLink();
                </script>
            </ul>
        </div>
    </div>
</div>
