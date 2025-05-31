<section id="portfolio" class="section-py portfolio">
    <div class="container">
        <div class="text-center mb-4">
            <span class="badge bg-label-primary">Portofolio</span>
        </div>
        <h4 class="text-center mb-1">
            <span class="position-relative fw-extrabold z-1">
                Proyek Desain & Gambar AutoCAD
                <i class="bx bx-folder-open section-title-icon position-absolute object-fit-contain bottom-0 z-n1"></i>
            </span>
        </h4>
        <p class="text-center mb-5">Beberapa proyek real estate yang telah kami kerjakan dalam berbagai kategori desain
            dan kebutuhan gambar kerja.</p>

        <!-- Filter Kategori -->
        <div class="text-center mb-5">
            <button class="btn btn-outline-primary m-1 filter-btn active" data-filter="all">Semua</button>
            <button class="btn btn-outline-primary m-1 filter-btn" data-filter="residensial">Residensial</button>
            <button class="btn btn-outline-primary m-1 filter-btn" data-filter="komersial">Komersial</button>
            <button class="btn btn-outline-primary m-1 filter-btn" data-filter="industri">Industri</button>
        </div>

        <!-- Grid Portfolio -->
        <div class="row g-4 portfolio-container">
            <!-- Item 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item residensial">
                <div class="card shadow-sm">
                    <img src="{{ asset('dashboard_assets/assets/img/client/desain/desain-4.jpg') }}"
                        class="card-img-top" alt="Desain Rumah Mewah 2 Lantai">
                    <div class="card-body">
                        <h5 class="card-title">Desain Rumah Mewah 2 Lantai</h5>
                        <p class="card-text">Gambar kerja lengkap AutoCAD untuk rumah di Bogor, termasuk denah, tampak,
                            potongan, dan MEP dasar.</p>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item komersial">
                <div class="card shadow-sm">
                    <img src="{{ asset('dashboard_assets/assets/img/client/desain/desain-2.jpg') }}"
                        class="card-img-top" alt="Desain Rumah Mewah 2 Lantai">
                    <div class="card-body">
                        <h5 class="card-title">Desain Kantor 3 Lantai</h5>
                        <p class="card-text">Proyek desain dan gambar kerja kantor area komersial dengan struktur baja
                            ringan dan konsep industrial.</p>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item industri">
                <div class="card shadow-sm">
                    <img src="{{ asset('dashboard_assets/assets/img/client/desain/desain-3.jpg') }}"
                        class="card-img-top" alt="Desain Rumah Mewah 2 Lantai">
                    <div class="card-body">
                        <h5 class="card-title">Site Plan & Gudang Industri</h5>
                        <p class="card-text">Gambar layout dan utilitas untuk gudang skala menengah di kawasan industri
                            Cikarang.</p>
                    </div>
                </div>
            </div>

            <!-- Tambahkan lebih banyak item jika perlu -->
        </div>
    </div>
</section>