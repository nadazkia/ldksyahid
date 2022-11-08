<nav class="navbar navbar-dark bg-success navbar-expand-lg  sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand p-0 me-0 me-lg-2" href="/">
            <img class="d-inline-block align-top" src="{{ asset('img/logo_ldkswhite.png') }}" alt="Logo LDK Syahid"
                width="35">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ ($active === "home") ? 'active' : '' }}">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item {{ ($active === "post") ? 'active' : '' }}">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="nav-item {{ ($active === "struktur") ? 'active' : '' }}">
                    <a class="nav-link" href="/struktur">Struktur</a>
                </li>
                <li class="nav-item {{ ($active === "about") ? 'active' : '' }}">
                    <a class="nav-link" href="/about">Tentang</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aktivitas</a>
                    <ul class="dropdown-menu animated--grow-in">
                        <li> <a class="dropdown-item" href="#">yuuuu</a> </li>
                        <li> <a class="dropdown-item" href="#">Another link</a> </li>
                        <li> <a class="dropdown-item" href="#">A third link</a>  </li> 
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aktivitas Iseng</a>
                    <div class="dropdown-menu animated--grow-in">
                        <a class="dropdown-item" href="#">asdas</a>
                        <a class="dropdown-item" href="#">Anasdk</a>
                        <a class="dropdown-item" href="#">A thiasd link</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ms-md-auto">
                <li class="nav-item {{ ($active === "login") ? 'active' : '' }}">
                    <a class="nav-link" href="/login">Masuk</a>
                </li>
                <li class="nav-item {{ ($active === "register") ? 'active' : '' }}">
                    <a class="nav-link" href="/register">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>