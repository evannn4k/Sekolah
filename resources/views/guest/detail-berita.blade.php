<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita - MI Muhammadiyah Gempolsewu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #16a34a;
            --primary-dark: #15803d;
            --secondary-color: #059669;
            --accent-color: #fbbf24;
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --text-dark: #374151;
            --text-light: #6b7280;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.7;
        }
        
        /* Navbar dari template sebelumnya */
        .navbar-modern {
            padding: 0;
            background: #ffffff !important;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }
        
        .top-info-bar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            font-size: 13px;
            padding: 8px 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-color) !important;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .brand-logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            padding: 28px 18px !important;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        /* Article Header */
        .article-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 140px 0 60px;
            position: relative;
            overflow: hidden;
        }
        
        .article-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%2316a34a" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }
        
        .article-category {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        .article-title {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        
        .article-meta {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
        }
        
        .meta-item i {
            color: var(--accent-color);
        }
        
        /* Featured Image */
        .featured-image {
            margin-top: -80px;
            position: relative;
            z-index: 10;
        }
        
        .featured-image img {
            width: 100%;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }
        
        /* Article Content */
        .article-content {
            background: white;
            padding: 60px;
            border-radius: 24px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }
        
        .article-content h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-top: 40px;
            margin-bottom: 20px;
        }
        
        .article-content h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-top: 30px;
            margin-bottom: 15px;
        }
        
        .article-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-dark);
            margin-bottom: 20px;
            text-align: justify;
        }
        
        .article-content ul, .article-content ol {
            margin-bottom: 20px;
            padding-left: 30px;
        }
        
        .article-content li {
            font-size: 1.05rem;
            line-height: 1.8;
            margin-bottom: 10px;
        }
        
        .article-content blockquote {
            background: var(--light-color);
            border-left: 4px solid var(--primary-color);
            padding: 20px 30px;
            margin: 30px 0;
            font-style: italic;
            font-size: 1.15rem;
            color: var(--text-dark);
        }
        
        .article-content img {
            width: 100%;
            border-radius: 16px;
            margin: 30px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Article Image Gallery */
        .article-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .article-gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        .article-gallery img:hover {
            transform: scale(1.05);
        }
        
        /* Share Buttons */
        .share-section {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }
        
        .share-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        
        .share-btn {
            padding: 12px 24px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }
        
        .share-btn.facebook {
            background: #1877f2;
            color: white;
        }
        
        .share-btn.twitter {
            background: #1da1f2;
            color: white;
        }
        
        .share-btn.whatsapp {
            background: #25d366;
            color: white;
        }
        
        .share-btn.copy {
            background: #6b7280;
            color: white;
        }
        
        .share-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            opacity: 0.9;
        }
        
        /* Tags */
        .tags-section {
            margin: 30px 0;
        }
        
        .tag {
            display: inline-block;
            background: var(--light-color);
            color: var(--text-dark);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 14px;
            margin: 5px;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .tag:hover {
            background: var(--primary-color);
            color: white;
        }
        
        /* Author Box */
        .author-box {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px;
            border-radius: 20px;
            margin-bottom: 40px;
            display: flex;
            gap: 30px;
            align-items: center;
        }
        
        .author-avatar {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: var(--primary-color);
            font-weight: 700;
            flex-shrink: 0;
        }
        
        .author-info h4 {
            font-size: 1.5rem;
            margin-bottom: 8px;
        }
        
        .author-info p {
            margin-bottom: 0;
            opacity: 0.9;
        }
        
        /* Related News */
        .related-news {
            background: white;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        
        .related-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        
        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .related-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .related-card-body {
            padding: 20px;
        }
        
        .related-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 10px;
            line-height: 1.4;
        }
        
        .related-card-meta {
            font-size: 13px;
            color: var(--text-light);
        }
        
        /* Comments Section */
        .comments-section {
            background: white;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-top: 40px;
        }
        
        .comment-form textarea {
            min-height: 120px;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            padding: 15px;
        }
        
        .comment-form textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.1);
        }
        
        .btn-submit {
            padding: 14px 40px;
            border-radius: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(22, 163, 74, 0.4);
        }
        
        .comment-item {
            padding: 25px;
            background: var(--light-color);
            border-radius: 16px;
            margin-bottom: 20px;
        }
        
        .comment-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 12px;
        }
        
        .comment-avatar {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
        }
        
        .comment-author {
            font-weight: 600;
            color: var(--dark-color);
        }
        
        .comment-date {
            font-size: 13px;
            color: var(--text-light);
        }
        
        /* Sidebar */
        .sidebar-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .sidebar-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--primary-color);
        }
        
        .popular-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            text-decoration: none;
            color: inherit;
            transition: all 0.3s;
        }
        
        .popular-item:hover {
            transform: translateX(5px);
        }
        
        .popular-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            flex-shrink: 0;
        }
        
        .popular-item-title {
            font-weight: 600;
            color: var(--dark-color);
            font-size: 0.95rem;
            line-height: 1.4;
            margin-bottom: 5px;
        }
        
        .popular-item-date {
            font-size: 12px;
            color: var(--text-light);
        }
        
        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(22, 163, 74, 0.4);
            transition: all 0.3s ease;
            z-index: 999;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            color: white;
        }
        
        .back-to-top.show {
            display: flex;
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .article-title {
                font-size: 2rem;
            }
            
            .article-content {
                padding: 30px 20px;
            }
            
            .author-box {
                flex-direction: column;
                text-align: center;
            }
            
            .related-news, .comments-section {
                padding: 30px 20px;
            }
        }
        
        @media (max-width: 767px) {
            .article-title {
                font-size: 1.75rem;
            }
            
            .article-meta {
                gap: 15px;
            }
            
            .share-buttons {
                justify-content: center;
            }
            
            .article-content h2 {
                font-size: 1.5rem;
            }
            
            .article-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Top Info Bar -->
    <div class="top-info-bar d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <i class="fas fa-phone me-2"></i>(0274) 123456
                    <span class="ms-4"><i class="fas fa-envelope me-2"></i>mi.gempolsewu@gmail.com</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-white text-decoration-none me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white text-decoration-none me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white text-decoration-none me-3"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-modern sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <div class="brand-logo">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div>
                    <div style="font-size: 18px;">MI Muhammadiyah</div>
                    <div style="font-size: 12px; color: #6b7280; font-weight: 500;">Gempolsewu</div>
                </div>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.html">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="guru-staff.html">Guru & Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="berita.html">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prestasi.html">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fasilitas.html">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.html">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Article Header -->
    <section class="article-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <span class="article-category">
                        <i class="fas fa-folder me-2"></i>Kegiatan Sekolah
                    </span>
                    <h1 class="article-title">
                        Peringatan Hari Santri Nasional 2025 dengan Berbagai Lomba Menarik
                    </h1>
                    <div class="article-meta">
                        <div class="meta-item">
                            <i class="far fa-calendar"></i>
                            <span>15 Januari 2025</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-user"></i>
                            <span>Admin MI Gempolsewu</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-eye"></i>
                            <span>234 Views</span>
                        </div>
                        <div class="meta-item">
                            <i class="far fa-clock"></i>
                            <span>5 min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Image -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="featured-image" data-aos="fade-up">
                    {{-- <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1200&h=600&fit=crop" alt="Hari Santri"> --}}
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
                        <p>
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

                        <!-- Gallery dalam artikel -->
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
                        </p>

                        <!-- Tags -->
                        <div class="tags-section">
                            <strong>Tags:</strong>
                            <a href="#" class="tag">#HariSantri</a>
                            <a href="#" class="tag">#Kegiatan</a>
                            <a href="#" class="tag">#Lomba</a>
                            <a href="#" class="tag">#Islam</a>
                            <a href="#" class="tag">#Pendidikan</a>
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
                            <div class="col-md-6">
                                <a href="detail-berita.html" class="related-card">
                                    <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=400&h=200&fit=crop" alt="Related">
                                    <div class="related-card-body">
                                        <h5 class="related-card-title">
                                            Juara 1 Olimpiade Matematika Tingkat Kecamatan
                                        </h5>
                                        <div class="related-card-meta">
                                            <i class="far fa-calendar me-2"></i>10 Jan 2025
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="detail-berita.html" class="related-card">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=200&fit=crop" alt="Related">
                                    <div class="related-card-body">
                                        <h5 class="related-card-title">
                                            Pendaftaran Siswa Baru Tahun Ajaran 2025/2026
                                        </h5>
                                        <div class="related-card-meta">
                                            <i class="far fa-calendar me-2"></i>5 Jan 2025
                                        </div>
                                    </div>
                                </a>
                            </div>
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
                        
                        <a href="detail-berita.html" class="popular-item">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=100&h=100&fit=crop" alt="Popular">
                            <div>
                                <div class="popular-item-title">
                                    Juara 1 Olimpiade Matematika Tingkat Kecamatan
                                </div>
                                <div class="popular-item-date">
                                    <i class="far fa-calendar me-1"></i>10 Jan 2025
                                </div>
                            </div>
                        </a>

                        <a href="detail-berita.html" class="popular-item">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=100&h=100&fit=crop" alt="Popular">
                            <div>
                                <div class="popular-item-title">
                                    Pendaftaran Siswa Baru 2025/2026
                                </div>
                                <div class="popular-item-date">
                                    <i class="far fa-calendar me-1"></i>5 Jan 2025
                                </div>
                            </div>
                        </a>

                        <a href="detail-berita.html" class="popular-item">
                            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=100&h=100&fit=crop" alt="Popular">
                            <div>
                                <div class="popular-item-title">
                                    Kegiatan Field Trip ke Museum
                                </div>
                                <div class="popular-item-date">
                                    <i class="far fa-calendar me-1"></i>2 Jan 2025
                                </div>
                            </div>
                        </a>

                        <a href="detail-berita.html" class="popular-item">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=100&h=100&fit=crop" alt="Popular">
                            <div>
                                <div class="popular-item-title">
                                    Workshop Guru Mengajar Kreatif
                                </div>
                                <div class="popular-item-date">
                                    <i class="far fa-calendar me-1"></i>28 Des 2024
                                </div>
                            </div>
                        </a>
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
                        <a href="kontak.html" class="btn btn-light btn-sm">
                            <i class="fas fa-phone me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
            window.scrollTo({ top: 0, behavior: 'smooth' });
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
</body>
</html>
