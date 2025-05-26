<!-- resources/views/partials/navbar.blade.php -->
<nav class="layout-navbar shadow-none py-0">
    <div class="container">
        <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-4">
            <div class="navbar-brand app-brand demo d-flex py-0 me-4">
                <button class="navbar-toggler border-0 px-0 me-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-menu bx-sm align-middle"></i>
                </button>
                <a href="{{ url('/') }}" class="app-brand-link">
                    <img src="{{ asset('logo/logo_jasa.png') }}" alt="Logo" style="width: 200px; height: auto;" />
                </a>
            </div>

            <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="tf-icons bx bx-x bx-sm"></i>
                </button>

                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link fw-medium" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#portfolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#testimoni">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#kontak">Kontak</a></li>
                </ul>
            </div>

            <div class="landing-menu-overlay d-lg-none"></div>

            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li>
                    <a href="#kontak" class="btn btn-primary">
                        <span class="tf-icons bx bx-phone-call me-md-1"></span>
                        <span class="d-none d-md-block">Hubungi Kami</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>