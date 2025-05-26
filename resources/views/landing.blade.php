<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-wide " dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('dashboard_assets/assets/') }}" data-template="front-pages">

@include('partials.head-meta')
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('dashboard_assets/assets/img/favicon/favicon.ico') }}" />

<!-- Canonical SEO -->
<link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('dashboard_assets/assets/img/favicon/favicon.ico') }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">


<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/css/rtl/core.css') }}"
    class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/css/rtl/theme-default.css') }}"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/demo.css') }}" />
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/css/pages/front-page.css') }}" />


<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/libs/nouislider/nouislider.css') }}" />
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/libs/swiper/swiper.css') }}" />
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/libs/iziToast/css/iziToast.min.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<meta name="google-site-verification" content="Hf-tUtIVnBjdVd_xwX2KDz_B7coRKIPh0Be0mkY27ao" />
<!-- Page CSS -->
<link rel="stylesheet" href="{{ asset('dashboard_assets/assets/vendor/css/pages/front-page-landing.css') }}" />

<!-- Helpers -->
<script src="{{ asset('dashboard_assets/assets/vendor/js/helpers.js') }}"></script>
<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
{{-- <script src="{{ asset('dashboard_assets/assets/vendor/js/template-customizer.js') }}"></script> --}}
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('dashboard_assets/assets/js/front-config.js') }}"></script>
<style>
    body {
        width: 100vw;
        overflow-x: hidden;
    }

    label.required::after {
        content: '*';
        color: red;
        margin-left: 5px;
    }

    .image-container img {
        width: 150px;
        /* Tentukan lebar gambar */
        height: 150px;
        /* Tentukan tinggi gambar */
        object-fit: cover;
        /* Membuat gambar sesuai dengan dimensi tanpa meregangkan */
        border-radius: 5px;
        /* Opsional, untuk membuat sudut gambar sedikit melengkung */
        margin-right: 15px;
        /* Menambahkan ruang di sebelah kanan gambar */
    }

    .whatsapp-float {
        position: fixed;
        bottom: 25px;
        right: 25px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease;
    }

    .whatsapp-float:hover {
        background-color: #1ebe5d !important;
        transform: scale(1.1);
    }
</style>

<body>

    <script src="{{ asset('dashboard_assets/assets/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/vendor/js/mega-dropdown.js') }}"></script>

    <!-- Navbar: Start -->
    @include('partials.navbar')
    <!-- Navbar: End -->

    <!-- Sections:Start -->
    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        @include('pages.hero')
        <!-- Useful features: End -->
        @include('pages.services')
        @include('pages.proyek')

        @include('pages.reviews')
        <!-- FAQ: Start -->
        @include('pages.faq')

        {{-- Contact Form --}}
        {{-- @include('pages.contact') --}}

    </div>

    <!-- / Sections:End -->
    <!-- Footer: Start -->
    @include('partials.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
                const filterButtons = document.querySelectorAll(".filter-btn");
                const portfolioItems = document.querySelectorAll(".portfolio-item");

                filterButtons.forEach(button => {
                    button.addEventListener("click", () => {
                        const filter = button.getAttribute("data-filter");

                        filterButtons.forEach(btn => btn.classList.remove("active"));
                        button.classList.add("active");

                        portfolioItems.forEach(item => {
                            if (filter === "all" || item.classList.contains(filter)) {
                                item.style.display = "block";
                            } else {
                                item.style.display = "none";
                            }
                        });
                    });
                });
            });
    </script>
    <a href="https://wa.me/6281234567890" class="btn btn-icon btn-success whatsapp-float" target="_blank"
        data-bs-toggle="tooltip" data-bs-placement="left" title="Tanyakan di sini">
        <i class="fab fa-whatsapp fs-3"></i>
    </a>
</body>

</html>

<!-- beautify ignore:end -->
