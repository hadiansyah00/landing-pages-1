<!-- Footer: Start -->
<footer class="footer bg-light py-5 mt-5 border-top">
    <div class="container">
        <div class="row gy-4 gx-5">
            <!-- Brand & Description -->
            <div class="col-lg-4 col-md-6">
                <a href="#" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg width="60" height="60" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="60" height="60" fill="#F3F4F6" />
                        <!-- Rumah -->
                        <path d="M50 120 L100 70 L150 120 V170 H50 V120 Z" fill="#3B82F6" stroke="#1E3A8A"
                            stroke-width="4" />
                        <!-- Atap -->
                        <path d="M45 120 L100 65 L155 120" fill="none" stroke="#1E40AF" stroke-width="4" />
                        <!-- Jendela -->
                        <rect x="70" y="130" width="20" height="20" fill="#E0F2FE" stroke="#1E3A8A" stroke-width="2" />
                        <rect x="110" y="130" width="20" height="20" fill="#E0F2FE" stroke="#1E3A8A" stroke-width="2" />
                        <!-- Pena gambar -->
                        <path d="M160 40 L180 60 L120 120 L100 120 L100 100 L160 40 Z" fill="#10B981" stroke="#065F46"
                            stroke-width="3" />
                        <!-- Nama jasa -->
                        {{-- <text x="100" y="190" font-family="Arial, sans-serif" font-size="16" text-anchor="middle"
                            fill="#111827">
                            Estetikaland
                        </text> --}}
                    </svg>
                    <span class="ms-2 fw-bold text-dark">Estetikaland</span>
                </a>
                <p class="text-muted">Website ini memberikan informasi dan layanan terbaik bagi pengguna, mahasiswa, dan
                    civitas akademika.</p>
                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="text-dark"><i class="bx bxl-facebook-circle fs-4"></i></a>
                    <a href="#" class="text-dark"><i class="bx bxl-twitter fs-4"></i></a>
                    <a href="#" class="text-dark"><i class="bx bxl-instagram fs-4"></i></a>
                    <a href="#" class="text-dark"><i class="bx bxl-youtube fs-4"></i></a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Navigasi</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-muted text-decoration-none">Beranda</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Tentang Kami</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Kontak</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <!-- Bantuan -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Bantuan</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Panduan</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Pusat Bantuan</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Laporkan Masalah</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-bold mb-3">Hubungi Kami</h6>
                <p class="text-muted mb-1"><i class="bx bx-map me-2"></i>Jl. Contoh Alamat No.123, Kota</p>
                <p class="text-muted mb-1"><i class="bx bx-envelope me-2"></i>info@email.com</p>
                <p class="text-muted mb-0"><i class="bx bx-phone me-2"></i>+62 812 3456 7890</p>
            </div>
        </div>

        <hr class="my-4" />

        <!-- Copyright -->
        <div class="d-flex justify-content-between flex-wrap">
            <p class="text-muted mb-0">&copy; 2025 Nama Website. All rights reserved.</p>
            <p class="text-muted mb-0">Made with <i class="bx bxs-heart text-danger"></i> by Tim IT</p>
        </div>
    </div>
</footer>
<!-- Footer: End -->
<!-- Footer: End -->
<script async data-watzapkey="tuT61864" src="https://cdn.watzap.id/widget-api.js"></script> <!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('dashboard_assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/vendor/js/bootstrap.js') }}"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NDC7V4P44N"></script>
<script>
    window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-NDC7V4P44N');
</script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('dashboard_assets/assets/vendor/libs/nouislider/nouislider.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/vendor/libs/swiper/swiper.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/vendor/libs/iziToast/js/iziToast.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('dashboard_assets/assets/js/front-main.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/custom.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('dashboard_assets/assets/js/front-page-landing.js') }}"></script>