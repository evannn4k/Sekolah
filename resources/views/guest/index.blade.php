@extends('layout.guest-layout')

@push("style")
    <link rel="stylesheet" href="{{ asset("css/guest/berada.css") }}">
@endpush

@section('main')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <div class="section-subtitle text-white mb-3">
                        <i class="fas fa-star me-2"></i>PENDIDIKAN BERKUALITAS
                    </div>
                    <h1 class="hero-title">
                        Membentuk Generasi <span
                            style="background: linear-gradient(135deg, var(--accent-color), #fbbf24); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Qur'ani</span>
                        yang Cerdas
                    </h1>
                    <p class="hero-subtitle">
                        MI Muhammadiyah Gempolsewu berkomitmen memberikan pendidikan Islam terbaik dengan memadukan
                        kurikulum nasional dan nilai-nilai Islami untuk membentuk karakter siswa yang berakhlak mulia.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="kontak.html" class="btn btn-modern btn-primary-modern">
                            Daftar Sekarang
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="profil.html" class="btn btn-modern btn-outline-modern">
                            Tentang Kami
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="hero-image">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&h=400&fit=crop"
                            alt="Students" class="img-fluid">

                        <!-- Floating Card 1 -->
                        <div class="floating-card floating-card-1">
                            <div class="d-flex align-items-center gap-3">
                                <div class="stat-icon" style="width: 50px; height: 50px; font-size: 20px;">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">50+</div>
                                    <div class="text-muted small">Prestasi</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Card 2 -->
                        <div class="floating-card floating-card-2" style="animation-delay: 1s;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="stat-icon" style="width: 50px; height: 50px; font-size: 20px;">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">450+</div>
                                    <div class="text-muted small">Siswa Aktif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number">450+</div>
                        <div class="stat-label">Siswa Aktif</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Guru Profesional</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Prestasi</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stat-number">A</div>
                        <div class="stat-label">Akreditasi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=600&h=400&fit=crop"
                            alt="School Building" class="img-fluid">
                        <div class="experience-badge">
                            <div class="experience-number">50</div>
                            <div class="experience-text">Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-subtitle">TENTANG KAMI</div>
                    <h2 class="section-title mb-4">Pendidikan Islami Berkualitas Sejak 1975</h2>
                    <p class="text-muted mb-4" style="font-size: 1.05rem; line-height: 1.8;">
                        MI Muhammadiyah Gempolsewu telah berdiri sejak tahun 1975 dengan komitmen memberikan
                        pendidikan Islam yang berkualitas. Kami memadukan kurikulum nasional dengan nilai-nilai
                        Islami untuk membentuk generasi yang tidak hanya cerdas secara intelektual, tetapi juga
                        memiliki akhlak mulia.
                    </p>
                    <ul class="check-list mb-4">
                        <li>
                            <div class="check-icon"><i class="fas fa-check"></i></div>
                            <span>Akreditasi A dengan standar pendidikan tinggi</span>
                        </li>
                        <li>
                            <div class="check-icon"><i class="fas fa-check"></i></div>
                            <span>Guru profesional dan bersertifikat pendidik</span>
                        </li>
                        <li>
                            <div class="check-icon"><i class="fas fa-check"></i></div>
                            <span>Fasilitas lengkap dan modern</span>
                        </li>
                        <li>
                            <div class="check-icon"><i class="fas fa-check"></i></div>
                            <span>Program ekstrakurikuler yang beragam</span>
                        </li>
                        <li>
                            <div class="check-icon"><i class="fas fa-check"></i></div>
                            <span>Prestasi siswa tingkat kabupaten hingga nasional</span>
                        </li>
                    </ul>
                    <a href="profil.html" class="btn btn-modern btn-primary-modern">
                        Selengkapnya
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-subtitle">BERITA TERBARU</div>
                <h2 class="section-title">Informasi & Kegiatan Terkini</h2>
                <p class="section-description">
                    Ikuti perkembangan dan kegiatan terbaru dari MI Muhammadiyah Gempolsewu
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400&h=300&fit=crop"
                                alt="News">
                            <div class="news-badge">Kegiatan</div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="far fa-calendar"></i> 15 Jan 2025</span>
                                <span><i class="far fa-eye"></i> 234</span>
                            </div>
                            <h3 class="news-title">
                                <a href="detail-berita.html">Peringatan Hari Santri Nasional 2025</a>
                            </h3>
                            <p class="news-excerpt">
                                MI Muhammadiyah Gempolsewu mengadakan peringatan Hari Santri Nasional dengan
                                berbagai lomba dan kegiatan menarik untuk siswa...
                            </p>
                            <a href="detail-berita.html" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=400&h=300&fit=crop"
                                alt="News">
                            <div class="news-badge">Prestasi</div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="far fa-calendar"></i> 10 Jan 2025</span>
                                <span><i class="far fa-eye"></i> 189</span>
                            </div>
                            <h3 class="news-title">
                                <a href="detail-berita.html">Juara 1 Olimpiade Matematika Tingkat Kecamatan</a>
                            </h3>
                            <p class="news-excerpt">
                                Siswa kelas 6 MI Muhammadiyah Gempolsewu berhasil meraih juara 1 dalam Olimpiade
                                Matematika tingkat kecamatan...
                            </p>
                            <a href="detail-berita.html" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop"
                                alt="News">
                            <div class="news-badge">Pengumuman</div>
                        </div>
                        <div class="news-content">
                            <div class="news-meta">
                                <span><i class="far fa-calendar"></i> 5 Jan 2025</span>
                                <span><i class="far fa-eye"></i> 512</span>
                            </div>
                            <h3 class="news-title">
                                <a href="detail-berita.html">Pendaftaran Siswa Baru Tahun Ajaran 2025/2026</a>
                            </h3>
                            <p class="news-excerpt">
                                Pendaftaran siswa baru tahun ajaran 2025/2026 telah dibuka. Segera daftarkan
                                putra-putri Anda untuk bergabung...
                            </p>
                            <a href="detail-berita.html" class="read-more">
                                Baca Selengkapnya
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="berita.html" class="btn btn-modern btn-primary-modern">
                    Lihat Semua Berita
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-subtitle">GALERI KEGIATAN</div>
                <h2 class="section-title">Dokumentasi Kegiatan & Prestasi</h2>
                <p class="section-description">
                    Lihat berbagai kegiatan dan momen berharga di MI Muhammadiyah Gempolsewu
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400&h=300&fit=crop"
                            alt="Gallery">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Kegiatan Pembelajaran</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=300&fit=crop"
                            alt="Gallery">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Ekstrakurikuler</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop"
                            alt="Gallery">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Acara Sekolah</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="0">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=300&fit=crop"
                            alt="Gallery">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Kegiatan Olahraga</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&h=300&fit=crop"
                            alt="Gallery">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Prestasi Siswa</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=400&h=300&fit=crop"
                            alt="Gallery">
                        <div class="gallery-overlay">
                            <div class="gallery-title">Fasilitas Sekolah</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="galeri.html" class="btn btn-modern btn-primary-modern">
                    Lihat Semua Galeri
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-subtitle">TESTIMONI</div>
                <h2 class="section-title">Apa Kata Mereka?</h2>
                <p class="section-description">
                    Pengalaman dan testimoni dari orang tua siswa kami
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right quote-icon"></i>
                        <p class="testimonial-text">
                            "Anak saya sangat senang bersekolah di MI Muhammadiyah Gempolsewu. Guru-gurunya
                            sangat perhatian dan metode pembelajaran yang diterapkan sangat efektif."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">SH</div>
                            <div>
                                <div class="author-name">Siti Hartini</div>
                                <div class="author-title">Orang Tua Siswa Kelas 4</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right quote-icon"></i>
                        <p class="testimonial-text">
                            "Fasilitas sekolah sangat lengkap dan lingkungan belajarnya kondusif. Anak-anak
                            tidak hanya pintar secara akademis tapi juga berakhlak mulia."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">BP</div>
                            <div>
                                <div class="author-name">Budi Prasetyo</div>
                                <div class="author-title">Orang Tua Siswa Kelas 6</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <i class="fas fa-quote-right quote-icon"></i>
                        <p class="testimonial-text">
                            "Saya sangat puas dengan perkembangan anak saya. Program tahfidz dan kegiatan
                            keagamaan lainnya sangat membantu membentuk karakter religius anak."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-avatar">RW</div>
                            <div>
                                <div class="author-name">Ratna Wulandari</div>
                                <div class="author-title">Orang Tua Siswa Kelas 3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center cta-content" data-aos="zoom-in">
                    <h2 class="text-white fw-bold mb-4" style="font-size: 2.5rem;">
                        Daftarkan Putra-Putri Anda Sekarang!
                    </h2>
                    <p class="text-white mb-5" style="font-size: 1.2rem; opacity: 0.9;">
                        Bergabunglah dengan keluarga besar MI Muhammadiyah Gempolsewu dan berikan pendidikan
                        terbaik untuk masa depan anak Anda
                    </p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="kontak.html" class="btn btn-modern btn-outline-modern btn-lg">
                            <i class="fas fa-phone me-2"></i>
                            Hubungi Kami
                        </a>
                        <a href="profil.html" class="btn btn-modern btn-lg"
                            style="background: white; color: var(--primary-color);">
                            <i class="fas fa-info-circle me-2"></i>
                            Info Lengkap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
