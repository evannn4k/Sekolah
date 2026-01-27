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
                <!-- Gallery Item 1 -->
                <div class="col-lg-4 col-md-6 gallery-filter pembelajaran" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400&h=300&fit=crop"
                            alt="Pembelajaran">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Kegiatan Belajar Mengajar</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Pembelajaran
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="col-lg-4 col-md-6 gallery-filter ekstrakurikuler" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=300&fit=crop"
                            alt="Ekstrakurikuler">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Ekstrakurikuler Pramuka</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Ekstrakurikuler
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="col-lg-4 col-md-6 gallery-filter acara" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop"
                            alt="Acara">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Perayaan Hari Besar Islam</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Acara Sekolah
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="col-lg-4 col-md-6 gallery-filter prestasi" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop"
                            alt="Prestasi">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Pemenang Olimpiade</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Prestasi
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="col-lg-4 col-md-6 gallery-filter pembelajaran" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=300&fit=crop"
                            alt="Pembelajaran">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Praktikum Sains</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Pembelajaran
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="col-lg-4 col-md-6 gallery-filter fasilitas" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=400&h=300&fit=crop"
                            alt="Fasilitas">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Gedung Sekolah</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Fasilitas
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="col-lg-4 col-md-6 gallery-filter ekstrakurikuler" data-aos="zoom-in">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=400&h=300&fit=crop"
                            alt="Olahraga">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Ekstrakurikuler Olahraga</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Ekstrakurikuler
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="col-lg-4 col-md-6 gallery-filter acara" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=300&fit=crop"
                            alt="Acara">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Field Trip Museum</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Acara Sekolah
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 9 -->
                <div class="col-lg-4 col-md-6 gallery-filter fasilitas" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop"
                            alt="Perpustakaan">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Perpustakaan Sekolah</div>
                            <div class="gallery-category">
                                <i class="fas fa-folder me-2"></i>Fasilitas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
