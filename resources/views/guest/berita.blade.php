@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/berita.css') }}">
@endpush

@section('main')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Berita & Artikel</h1>
            <p class="text-white-50 lead" data-aos="fade-up">Informasi terkini dari MI Muhammadiyah Gempolsewu</p>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <!-- Search & Filter -->
            <div class="search-filter-section mb-5" data-aos="fade-up">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-text bg-white">
                                <i class="fas fa-search text-success"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" id="searchInput"
                                placeholder="Cari berita...">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-select" id="filterKategori">
                            <option value="">Semua Kategori</option>
                            <option value="kegiatan">Kegiatan</option>
                            <option value="prestasi">Prestasi</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="artikel">Artikel</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="form-select" id="filterTahun">
                            <option value="">Semua Tahun</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- News Grid -->
            <div class="row g-4" id="newsContainer">
                <!-- News Item 1 -->
                <div class="col-lg-4 col-md-6 news-item" data-kategori="kegiatan" data-aos="fade-up">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=300&fit=crop"
                                alt="News">
                            <div class="news-badge">Kegiatan</div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex gap-3 mb-3 text-muted small">
                                <span><i class="far fa-calendar me-1"></i> 15 Jan 2025</span>
                                <span><i class="far fa-eye me-1"></i> 234</span>
                            </div>
                            <h5 class="fw-bold mb-3">
                                <a href="#" class="text-decoration-none text-dark">Peringatan Hari Santri Nasional
                                    2025</a>
                            </h5>
                            <p class="text-muted mb-3">MI Muhammadiyah Gempolsewu mengadakan peringatan Hari Santri
                                Nasional...</p>
                            <a href="#" class="text-success fw-semibold text-decoration-none">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="col-lg-4 col-md-6 news-item" data-kategori="prestasi" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=400&h=300&fit=crop"
                                alt="News">
                            <div class="news-badge">Prestasi</div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex gap-3 mb-3 text-muted small">
                                <span><i class="far fa-calendar me-1"></i> 10 Jan 2025</span>
                                <span><i class="far fa-eye me-1"></i> 189</span>
                            </div>
                            <h5 class="fw-bold mb-3">
                                <a href="#" class="text-decoration-none text-dark">Juara 1 Olimpiade Matematika</a>
                            </h5>
                            <p class="text-muted mb-3">Siswa kelas 6 berhasil meraih juara 1 dalam Olimpiade Matematika...
                            </p>
                            <a href="#" class="text-success fw-semibold text-decoration-none">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="col-lg-4 col-md-6 news-item" data-kategori="pengumuman" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop"
                                alt="News">
                            <div class="news-badge">Pengumuman</div>
                        </div>
                        <div class="p-4">
                            <div class="d-flex gap-3 mb-3 text-muted small">
                                <span><i class="far fa-calendar me-1"></i> 5 Jan 2025</span>
                                <span><i class="far fa-eye me-1"></i> 512</span>
                            </div>
                            <h5 class="fw-bold mb-3">
                                <a href="#" class="text-decoration-none text-dark">Pendaftaran Siswa Baru
                                    2025/2026</a>
                            </h5>
                            <p class="text-muted mb-3">Pendaftaran siswa baru tahun ajaran 2025/2026 telah dibuka...</p>
                            <a href="#" class="text-success fw-semibold text-decoration-none">
                                Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Additional news items would go here -->

            </div>

            <!-- Pagination -->
            <nav class="mt-5" data-aos="fade-up">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    @push('script')
        <script>
            AOS.init({
                duration: 1000,
                once: true
            });

            // Filter functionality
            document.getElementById('filterKategori').addEventListener('change', filterNews);
            document.getElementById('searchInput').addEventListener('keyup', filterNews);

            function filterNews() {
                const kategori = document.getElementById('filterKategori').value.toLowerCase();
                const search = document.getElementById('searchInput').value.toLowerCase();
                const items = document.querySelectorAll('.news-item');

                items.forEach(item => {
                    const itemKategori = item.getAttribute('data-kategori');
                    const itemTitle = item.querySelector('h5').textContent.toLowerCase();

                    const matchKategori = kategori === '' || itemKategori === kategori;
                    const matchSearch = search === '' || itemTitle.includes(search);

                    if (matchKategori && matchSearch) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        </script>
    @endpush
@endsection
