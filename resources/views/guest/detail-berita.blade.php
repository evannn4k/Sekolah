@extends('layout.guest-layout')

@push("style")
<link rel="stylesheet" href="{{ asset("css/guest/detail-berita.css") }}">
@endpush

@section('main')
<section class="article-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up">
                <h1 class="article-title">
                    {{ $berita->judul }}
                </h1>
                <div class="article-meta">
                    <div class="meta-item">
                        <i class="far fa-calendar"></i>
                        <span>{{ $berita->tanggal_publish }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="far fa-user"></i>
                        <span>{{ $berita->penulis }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="far fa-eye"></i>
                        <span>{{ $berita->views }}</span>
                    </div>
                    <!-- <div class="meta-item">
                        <i class="far fa-clock"></i>
                        <span>{{ $berita->tags }}</span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="featured-image mt-5" data-aos="fade-up">
                <img src="{{ asset("storage/images/berita/$berita->gambar") }}" alt="Hari Santri">
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Article Content -->
            <div class="col-lg-8">
                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <h5 class="fw-bold mb-3">Bagikan Artikel Ini:</h5>
                    <div class="share-buttons">
                        <a href="#" class="share-btn facebook">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </a>
                        <a href="#" class="share-btn twitter">
                            <i class="fab fa-twitter"></i> Twitter
                        </a>
                        <a href="#" class="share-btn whatsapp">
                            <i class="fab fa-whatsapp"></i> WhatsApp
                        </a>
                        <button class="share-btn copy" onclick="copyLink()">
                            <i class="fas fa-link"></i> Copy Link
                        </button>
                    </div>
                </div>

                <!-- Article Body -->
                <div class="article-content" data-aos="fade-up">

                    <div class="lh-lg">
                        {!! nl2br($berita->konten) !!}
                    </div>

                    <!-- <p>
                        <strong>BANTUL</strong> - MI Muhammadiyah Gempolsewu menggelar peringatan Hari Santri Nasional
                        dengan meriah pada tanggal 22 Oktober 2024. Kegiatan ini diikuti oleh seluruh siswa dari kelas
                        1 hingga kelas 6 dengan penuh antusias dan semangat.
                    </p>

                    <p>
                        Kepala Sekolah MI Muhammadiyah Gempolsewu, Drs. H. Ahmad Fauzi, M.Pd.I menyampaikan bahwa
                        peringatan Hari Santri Nasional ini bertujuan untuk mengenang jasa-jasa para santri dalam
                        memperjuangkan kemerdekaan Indonesia serta menanamkan nilai-nilai keislaman kepada siswa sejak dini.
                    </p>

                    <blockquote>
                        "Melalui kegiatan ini, kami berharap siswa-siswi dapat lebih menghargai perjuangan para santri
                        dan semakin mencintai agama Islam serta bangsa Indonesia," ujar Drs. H. Ahmad Fauzi.
                    </blockquote>

                    <h2>Rangkaian Kegiatan</h2>

                    <p>
                        Acara dimulai pukul 07.00 WIB dengan upacara pembukaan yang dipimpin oleh Kepala Sekolah.
                        Setelah upacara, dilanjutkan dengan berbagai lomba yang telah disiapkan panitia.
                    </p>

                    <h3>1. Lomba Tahfidz Al-Qur'an</h3>
                    <p>
                        Lomba tahfidz dibagi menjadi 3 kategori berdasarkan kelas. Siswa kelas 1-2 menghafal juz 30,
                        kelas 3-4 menghafal surat-surat pilihan, dan kelas 5-6 menghafal juz 29. Para peserta
                        menunjukkan hafalan mereka dengan lancar dan penuh penghayatan.
                    </p>

                    <h3>2. Lomba Adzan</h3>
                    <p>
                        Lomba adzan diikuti oleh siswa putra dari seluruh kelas. Para peserta menunjukkan kemampuan
                        mereka dalam mengumandangkan adzan dengan tartil dan merdu. Dewan juri terdiri dari para ustadz
                        yang kompeten di bidang tilawah.
                    </p>

                    <h3>3. Lomba Kaligrafi</h3>
                    <p>
                        Lomba kaligrafi menampilkan kreativitas siswa dalam menulis huruf Arab dengan indah.
                        Peserta diminta menulis ayat-ayat pilihan Al-Qur'an dengan berbagai teknik kaligrafi yang
                        telah mereka pelajari.
                    </p>

                    <h3>4. Lomba Cerdas Cermat Islami</h3>
                    <p>
                        Lomba ini menguji pengetahuan siswa tentang sejarah Islam, tokoh-tokoh Islam, dan ajaran-ajaran
                        Islam dasar. Setiap kelas mengirimkan 3 orang perwakilan terbaiknya untuk berkompetisi.
                    </p>

                    <div class="article-gallery">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=400&h=300&fit=crop" alt="Lomba 1">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=400&h=300&fit=crop" alt="Lomba 2">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&h=300&fit=crop" alt="Lomba 3">
                    </div>

                    <h2>Antusiasme Peserta</h2>

                    <p>
                        Seluruh siswa terlihat sangat antusias mengikuti setiap perlombaan. Guru-guru dan panitia
                        juga memberikan dukungan penuh dengan menyiapkan hadiah menarik untuk para pemenang.
                    </p>

                    <p>
                        "Saya sangat senang bisa ikut lomba tahfidz. Ini kesempatan untuk menunjukkan hafalan yang
                        sudah saya pelajari," ujar Fatimah, siswi kelas 5 yang menjadi juara 1 lomba tahfidz kategori
                        kelas tinggi.
                    </p>

                    <h2>Pengumuman Pemenang</h2>

                    <p>
                        Acara ditutup dengan pengumuman para pemenang dan penyerahan hadiah oleh Kepala Sekolah.
                        Para juara mendapatkan piala, sertifikat, dan hadiah menarik lainnya. Semua peserta juga
                        mendapatkan sertifikat partisipasi sebagai bentuk apresiasi atas keikutsertaan mereka.
                    </p>

                    <ul>
                        <li>Juara 1 Lomba Tahfidz: Fatimah Azzahra (Kelas 5)</li>
                        <li>Juara 1 Lomba Adzan: Ahmad Zaki (Kelas 6)</li>
                        <li>Juara 1 Lomba Kaligrafi: Siti Aisyah (Kelas 4)</li>
                        <li>Juara 1 Cerdas Cermat: Tim Kelas 6A</li>
                    </ul>

                    <h2>Penutup</h2>

                    <p>
                        Kegiatan peringatan Hari Santri Nasional ini ditutup dengan doa bersama dan foto bersama
                        seluruh peserta. Kepala Sekolah berharap kegiatan seperti ini dapat terus dilaksanakan setiap
                        tahun dan menjadi tradisi yang baik di MI Muhammadiyah Gempolsewu.
                    </p>

                    <p>
                        Selain menumbuhkan semangat berlomba secara sehat, kegiatan ini juga mempererat tali
                        silaturahmi antara siswa, guru, dan orang tua yang turut hadir memberikan dukungan kepada
                        putra-putri mereka.
                    </p> -->

                    <!-- Tags -->
                    <div class="tags-section">
                        <strong>Tags:</strong>
                        <a href="#" class="tag">#{{ $berita->tags }}</a>
                    </div>
                </div>

                <!-- Author Box -->
                <div class="author-box" data-aos="fade-up">
                    <div class="author-avatar">AD</div>
                    <div class="author-info">
                        <h4>Admin MI Gempolsewu</h4>
                        <p>Tim redaksi dan dokumentasi MI Muhammadiyah Gempolsewu yang bertugas memberikan
                            informasi terkini seputar kegiatan dan prestasi sekolah.</p>
                    </div>
                </div>

                <!-- Related News -->
                <div class="related-news" data-aos="fade-up">
                    <h3 class="fw-bold mb-4">Berita Terkait</h3>
                    <div class="row g-4">
                        
                        @foreach ($beritas as $beritaTerkait)
                        <div class="col-md-6">
                            <a href="{{ route("detail-berita", $beritaTerkait->slug) }}" class="related-card">
                                <img src="{{ asset("storage/images/berita/$beritaTerkait->gambar") }}" alt="Related">
                                <div class="related-card-body">
                                    <h5 class="related-card-title">
                                        {{ $beritaTerkait->judul }}
                                    </h5>
                                    <div class="related-card-meta">
                                        <i class="far fa-calendar me-2"></i>{{ $beritaTerkait->tanggal_publish }}
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-section" data-aos="fade-up">
                    <h3 class="fw-bold mb-4">Komentar (3)</h3>

                    <!-- Comment Form -->
                    <form class="comment-form mb-5">
                        <h5 class="mb-3">Tinggalkan Komentar</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email Anda" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Tulis komentar Anda..." required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Komentar
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Comments List -->
                    <div class="comments-list">
                        <div class="comment-item">
                            <div class="comment-header">
                                <div class="comment-avatar">SH</div>
                                <div>
                                    <div class="comment-author">Siti Hartini</div>
                                    <div class="comment-date">16 Januari 2025, 10:30</div>
                                </div>
                            </div>
                            <p class="mb-0">
                                Alhamdulillah, kegiatan yang sangat bermanfaat untuk anak-anak.
                                Terima kasih kepada pihak sekolah yang sudah mengadakan acara ini.
                            </p>
                        </div>

                        <div class="comment-item">
                            <div class="comment-header">
                                <div class="comment-avatar">BP</div>
                                <div>
                                    <div class="comment-author">Budi Prasetyo</div>
                                    <div class="comment-date">15 Januari 2025, 20:15</div>
                                </div>
                            </div>
                            <p class="mb-0">
                                Anak saya sangat senang bisa ikut lomba kaligrafi. Semoga kegiatan
                                seperti ini terus diadakan setiap tahun.
                            </p>
                        </div>

                        <div class="comment-item">
                            <div class="comment-header">
                                <div class="comment-avatar">RW</div>
                                <div>
                                    <div class="comment-author">Ratna Wulandari</div>
                                    <div class="comment-date">15 Januari 2025, 18:45</div>
                                </div>
                            </div>
                            <p class="mb-0">
                                Masyaa Allah, acara yang luar biasa! Anak-anak jadi lebih semangat
                                menghafal Al-Qur'an. Jazakumullah khairan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Popular News -->
                <div class="sidebar-card" data-aos="fade-up">
                    <h4 class="sidebar-title">Berita Popular</h4>

                    @foreach ($beritaPopulers as $beritaPopuler)
                    <a href="{{ route("detail-berita", $beritaPopuler->slug) }}" class="popular-item">
                        <img src="{{ asset("storage/images/berita/$beritaPopuler->gambar") }}" alt="Popular">
                        <div>
                            <div class="popular-item-title">
                                {{ $beritaPopuler->judul }}
                            </div>
                            <div class="popular-item-date">
                                <i class="far fa-calendar me-1"></i> {{ $beritaPopuler->tanggal_publish }}
                            </div>
                        </div>
                    </a>
                    @endforeach

                </div>

                <!-- Categories -->
                <div class="sidebar-card" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="sidebar-title">Kategori</h4>
                    <div class="d-flex flex-column gap-2">
                        <a href="#" class="tag d-block">
                            <i class="fas fa-folder me-2"></i>Kegiatan Sekolah
                        </a>
                        <a href="#" class="tag d-block">
                            <i class="fas fa-trophy me-2"></i>Prestasi
                        </a>
                        <a href="#" class="tag d-block">
                            <i class="fas fa-bullhorn me-2"></i>Pengumuman
                        </a>
                        <a href="#" class="tag d-block">
                            <i class="fas fa-newspaper me-2"></i>Artikel
                        </a>
                    </div>
                </div>

                <!-- CTA Box -->
                <div class="sidebar-card" style="background: linear-gradient(135deg, #16a34a, #059669); color: white;" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="sidebar-title" style="border-color: rgba(255,255,255,0.3); color: white;">
                        Bergabung dengan Kami
                    </h4>
                    <p class="mb-3" style="opacity: 0.9;">
                        Daftarkan putra-putri Anda di MI Muhammadiyah Gempolsewu dan berikan pendidikan
                        terbaik untuk masa depan mereka.
                    </p>
                    <a href="{{ route("kontak") }}" class="btn btn-light btn-sm">
                        <i class="fas fa-phone me-2"></i>Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push("script")
<script>
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true
    });

    // Back to top button
    window.addEventListener('scroll', function() {
        const backToTop = document.getElementById('backToTop');
        if (window.scrollY > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });

    document.getElementById('backToTop').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Copy link function
    function copyLink() {
        const url = window.location.href;
        navigator.clipboard.writeText(url).then(function() {
            alert('Link berhasil dicopy!');
        });
    }

    // Comment form submission
    document.querySelector('.comment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Terima kasih atas komentar Anda! Komentar akan ditampilkan setelah dimoderasi.');
        this.reset();
    });
</script>
@endpush