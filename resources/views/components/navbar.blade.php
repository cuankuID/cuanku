<nav class="navbar navbar-expand-lg classic transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="/">
                <img src="{{ asset('assets/img/cuanku-full.png') }}" width="172" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
            <h3 class="text-white fs-30 mb-0">Cuan.ku</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
            <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                <a class="nav-link" href="/">Beranda</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Tentang</a>
                <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="/about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="/team">Team Kami</a></li>
                </ul>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link" href="/service">Layanan</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="{{ route('post.index') }}">Berita</a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link" href="/contact">Kontak</a>
                </li>

            </ul>
            <!-- /.navbar-nav -->
            <div class="offcanvas-footer d-lg-none">
                <div>
                <a href="mailto:hello.cuankuid@gmail.com" class="link-inverse">hello.cuankuid@gmail.com</a>
                <br /> 00 (123) 456 78 90 <br />
                <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    {{-- <a href="#"><i class="uil uil-facebook-f"></i></a> --}}
                    {{-- <a href="#"><i class="uil uil-dribbble"></i></a> --}}
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    {{-- <a href="#"><i class="uil uil-youtube"></i></a> --}}
                </nav>
                <!-- /.social -->
                </div>
            </div>
            <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
            @auth
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary rounded-pill">Dashboard</a>
            </li>
            @else
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('login') }}" class="btn btn-sm btn-primary rounded-pill">Sign In</a>
            </li>
            @endauth
            <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
            </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
</nav>