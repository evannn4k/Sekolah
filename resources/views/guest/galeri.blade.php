@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/galeri.css') }}">
@endpush

@section('main')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Galeri Kegiatan</h1>
            <p class="text-white-50 lead" data-aos="fade-up">Dokumentasi kegiatan dan momen berharga</p>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <!-- Filter Buttons -->
            <div class="filter-buttons" data-aos="fade-up">
                <button class="filter-btn active" data-filter="all">Semua</button>
                <button class="filter-btn" data-filter="pembelajaran">Pembelajaran</button>
                <button class="filter-btn" data-filter="ekstrakurikuler">Ekstrakurikuler</button>
                <button class="filter-btn" data-filter="acara">Acara Sekolah</button>
                <button class="filter-btn" data-filter="prestasi">Prestasi</button>
                <button class="filter-btn" data-filter="fasilitas">Fasilitas</button>
            </div>

            <!-- Gallery Grid -->
            <div class="row g-4">
                @foreach ($galeris as $galeri)
                    <div class="col-lg-4 col-md-6 gallery-filter pembelajaran" data-filter="{{ $galeri->kategori }}" data-aos="zoom-in">
                        <div class="gallery-item">
                            <img src="{{ asset("storage/images/galeri/$galeri->gambar") }}" alt="Pembelajaran">
                            <div class="gallery-overlay">
                                <div class="gallery-title">{{ $galeri->judul }}</div>
                                <div class="gallery-category">
                                    <i class="fas fa-folder me-2"></i>{{ $galeri->kategori }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <nav class="mt-5" data-aos="fade-up">
                <ul class="pagination justify-content-center">

                    <li class="page-item {{ $galeris->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $galeris->previousPageUrl() }}">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>

                    @for ($i = 1; $i <= $galeris->lastPage(); $i++)
                        <li class="page-item {{ $galeris->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $galeris->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $galeris->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $galeris->nextPageUrl() }}">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox-modal" id="lightbox">
        <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
        <img src="" alt="Lightbox Image" id="lightboxImg">
    </div>
@endsection

@push('script')
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-filter');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Filter items
                galleryItems.forEach(item => {
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Lightbox
        const galleryImages = document.querySelectorAll('.gallery-item img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightboxImg');

        galleryImages.forEach(img => {
            img.addEventListener('click', function() {
                lightboxImg.src = this.src;
                lightbox.classList.add('show');
            });
        });

        function closeLightbox() {
            lightbox.classList.remove('show');
        }

        // Close lightbox on click outside
        lightbox.addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
    </script>
@endpush
