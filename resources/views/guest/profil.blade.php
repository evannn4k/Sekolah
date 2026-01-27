<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - MI Muhammadiyah Gempolsewu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        @import url('index.html');
        
        .page-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 120px 0 60px;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%2316a34a" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }
        
        .page-title {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 16px;
        }
        
        .breadcrumb {
            background: transparent;
            padding: 0;
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.6);
        }
        
        .breadcrumb-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: white;
        }
        
        .visi-misi-card {
            background: white;
            padding: 50px;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            height: 100%;
        }
        
        .icon-box {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #16a34a, #059669);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }
        
        .timeline {
            position: relative;
            padding-left: 40px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #16a34a, #059669);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 40px;
        }
        
        .timeline-dot {
            position: absolute;
            left: -28px;
            top: 8px;
            width: 12px;
            height: 12px;
            background: #16a34a;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.2);
        }
        
        .identity-table {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }
        
        .identity-table td {
            padding: 20px 30px;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .identity-table tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <!-- Copy navbar dari index.html -->
    
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Profil Sekolah</h1>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Tentang Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=600&h=400&fit=crop" 
                         class="img-fluid rounded-4 shadow-lg" alt="School">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-subtitle mb-3">TENTANG KAMI</div>
                    <h2 class="section-title mb-4">MI Muhammadiyah Gempolsewu</h2>
                    <p class="text-muted mb-4" style="line-height: 1.8; font-size: 1.05rem;">
                        MI Muhammadiyah Gempolsewu merupakan lembaga pendidikan tingkat dasar yang berada di bawah 
                        naungan Pimpinan Cabang Muhammadiyah (PCM) setempat. Sekolah ini telah berdiri sejak tahun 1975 
                        dan terus berkembang hingga saat ini dengan tetap memegang teguh nilai-nilai Islami.
                    </p>
                    <p class="text-muted" style="line-height: 1.8; font-size: 1.05rem;">
                        Dengan motto "Beriman, Berilmu, Beramal", kami berkomitmen untuk membentuk generasi yang tidak 
                        hanya cerdas secara intelektual, tetapi juga memiliki akhlak mulia dan jiwa yang religius.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="py-5 bg-light" id="visi-misi">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <div class="section-subtitle">VISI & MISI</div>
                <h2 class="section-title">Panduan Kami dalam Mendidik</h2>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="visi-misi-card">
                        <div class="icon-box">
                            <i class="fas fa-eye fa-2x text-white"></i>
                        </div>
                        <h3 class="text-center mb-4" style="color: #16a34a;">VISI</h3>
                        <p class="text-center lead mb-0" style="line-height: 1.8;">
                            "Terwujudnya Generasi Qur'ani yang Cerdas, Terampil, dan Berakhlakul Karimah"
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="visi-misi-card">
                        <div class="icon-box">
                            <i class="fas fa-bullseye fa-2x text-white"></i>
                        </div>
                        <h3 class="text-center mb-4" style="color: #16a34a;">MISI</h3>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                <span>Menyelenggarakan pendidikan yang berkualitas dan islami</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                <span>Membentuk karakter siswa yang berakhlak mulia</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                <span>Mengembangkan potensi akademik dan non-akademik siswa</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                <span>Menciptakan lingkungan belajar yang kondusif</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                <span>Menjalin kerjasama dengan orang tua dan masyarakat</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah -->
    <section class="py-5" id="sejarah">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <div class="section-subtitle">SEJARAH</div>
                <h2 class="section-title">Perjalanan Kami</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="timeline">
                        <div class="timeline-item" data-aos="fade-left">
                            <div class="timeline-dot"></div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="badge bg-success mb-3">1975</div>
                                    <h5 class="mb-3" style="color: #16a34a;">Berdirinya MI Muhammadiyah Gempolsewu</h5>
                                    <p class="text-muted mb-0">
                                        MI Muhammadiyah Gempolsewu didirikan dengan 3 ruang kelas dan 45 siswa pertama.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item" data-aos="fade-left" data-aos-delay="100">
                            <div class="timeline-dot"></div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="badge bg-success mb-3">1990</div>
                                    <h5 class="mb-3" style="color: #16a34a;">Pembangunan Gedung Baru</h5>
                                    <p class="text-muted mb-0">
                                        Pembangunan gedung baru dengan 6 ruang kelas. Jumlah siswa meningkat menjadi 150.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item" data-aos="fade-left" data-aos-delay="200">
                            <div class="timeline-dot"></div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="badge bg-success mb-3">2010</div>
                                    <h5 class="mb-3" style="color: #16a34a;">Meraih Akreditasi A</h5>
                                    <p class="text-muted mb-0">
                                        Berhasil meraih akreditasi A dari BAN-S/M sebagai bukti kualitas pendidikan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item" data-aos="fade-left" data-aos-delay="300">
                            <div class="timeline-dot"></div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="badge bg-success mb-3">2025</div>
                                    <h5 class="mb-3" style="color: #16a34a;">Era Digital</h5>
                                    <p class="text-muted mb-0">
                                        Transformasi digital dengan 450+ siswa dan 25+ tenaga pendidik profesional.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Identitas -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <div class="section-subtitle">IDENTITAS</div>
                <h2 class="section-title">Data Sekolah</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <table class="identity-table w-100">
                        <tr>
                            <td width="40%" class="fw-bold">Nama Sekolah</td>
                            <td>MI Muhammadiyah Gempolsewu</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">NPSN</td>
                            <td>20403456</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Akreditasi</td>
                            <td><span class="badge bg-success">A</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Alamat</td>
                            <td>Jl. Raya Gempolsewu No. 123, Bantul, DIY 55184</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Telepon</td>
                            <td>(0274) 123456</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Email</td>
                            <td>mi.gempolsewu@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Kepala Sekolah</td>
                            <td>Drs. H. Ahmad Fauzi, M.Pd.I</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Tahun Berdiri</td>
                            <td>1975</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Copy footer dari index.html -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>
