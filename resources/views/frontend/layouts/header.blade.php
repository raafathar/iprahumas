@section('header')
    <!-- ------------------------------------- -->
    <!-- Header Start -->
    <!-- ------------------------------------- -->
    <header class="header-fp p-0 w-100">
        <nav class="navbar navbar-expand-lg bg-white-subtle py-2 py-lg-9">
            <div class="custom-container d-flex align-items-center justify-content-between">
                <a href="../main/frontend-landingpage.html" class="text-nowrap logo-img">
                    <img src="../assets/images/logos/logo.png" class="dark-logo" alt="Logo-Dark" height="58" />
                    <img src="../assets/images/logos/logo.png" class="light-logo" alt="Logo-light" height="58" />
                </a>
                <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="ti ti-menu-2 fs-8"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 gap-xl-7 gap-8 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                                <i class="ti ti-chevron-down fs-3"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('profil/sejarah-singkat') }}">Sejarah Singkat</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('profil/visimisi') }}">Visi Misi</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Kode Etik Keanggotaan (Soon)</a></li>
                                <li><a class="dropdown-item" href="{{ url('profil/struktur-organisasi') }}">Struktur
                                        Organisasi</a></li>
                                <li><a class="dropdown-item" href="#">Anggaran Dasar (AD/ART) (Soon)</a></li>
                                <li><a class="dropdown-item" href="{{ url('profil/manfaat-anggota') }}">Manfaat Anggota</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary" href="/berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary" href="../main/index.html">Pelatihan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary"
                                href="../main/frontend-pricingpage.html">Publikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4 fw-bold text-dark link-primary {{ request()->is('contact') ? 'active' : '' }}"
                                href="{{ url('contact') }}">Kontak</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-3">
                        <div>
                            <a href="../main/authentication-login.html" class="btn btn-primary py-8 px-9">Log In</a>
                        </div>
                        <div>
                            <a href="../main/authentication-login.html"
                                class="btn btn-light border border-dark py-8 px-9">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ------------------------------------- -->
    <!-- Header End -->
    <!-- ------------------------------------- -->
@endsection
