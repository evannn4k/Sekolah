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
                        <form action="{{ route("berita.search") }}" method="post">
                            <input type="text" name="keyword" class="form-control border-start-0" id="searchInput"
                            placeholder="Cari berita...">
                        </form>
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

            @foreach ($beritas as $berita)
            <div class="col-lg-4 col-md-6 news-item" data-kategori="kegiatan" data-aos="fade-up">
                <div class="news-card">
                    <div class="news-image">
                        <img src="{{ asset("storage/images/berita/$berita->gambar") }}" alt="News">
                        <div class="news-badge">{{ $berita->tag }}</div>
                    </div>
                    <div class="p-4">
                        <div class="d-flex gap-3 mb-3 text-muted small">
                            <span><i class="far fa-calendar me-1"></i> {{ $berita->tanggal_publish }}</span>
                            <span><i class="far fa-eye me-1"></i> {{ $berita->views ?? 0 }}</span>
                        </div>
                        <h5 class="fw-bold mb-3">
                            <a href="{{ route("detail-berita", $berita) }}" class="text-decoration-none text-dark">{{ $berita->judul }}</a>
                        </h5>
                        <p class="text-muted mb-3">{{ Str::limit($berita->konten, 150) }}</p>
                        <a href="{{ route("detail-berita", $berita) }}" class="text-success fw-semibold text-decoration-none">
                            Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Additional news items would go here -->

        </div>

        <nav class="mt-5" data-aos="fade-up">
            <ul class="pagination justify-content-center">

                <li class="page-item {{ $beritas->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $beritas->previousPageUrl() }}">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>

                @for ($i = 1; $i <= $beritas->lastPage(); $i++)
                    <li class="page-item {{ $beritas->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $beritas->url($i) }}">{{ $i }}</a>
                    </li>
                    @endfor

                <li class="page-item {{ $beritas->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $beritas->nextPageUrl() }}">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</section>

@endsection

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