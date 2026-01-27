<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - MI Muhammadiyah Gempolsewu</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; color: #374151; }
        
        .page-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 120px 0 60px;
        }
        
        .page-title {
            font-size: 3rem;
            font-weight: 800;
            color: white;
        }
        
        .contact-card {
            background: white;
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            height: 100%;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #16a34a, #059669);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .form-control, .form-select {
            padding: 14px 20px;
            border-radius: 12px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #16a34a;
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.1);
        }
        
        .btn-submit {
            padding: 14px 40px;
            border-radius: 50px;
            background: linear-gradient(135deg, #16a34a, #059669);
            border: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(22, 163, 74, 0.4);
        }
        
        .map-container {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .social-link {
            width: 50px;
            height: 50px;
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #374151;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-link:hover {
            background: linear-gradient(135deg, #16a34a, #059669);
            color: white;
            border-color: transparent;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Hubungi Kami</h1>
            <p class="text-white-50 lead" data-aos="fade-up">Jangan ragu untuk menghubungi kami</p>
        </div>
    </div>

    <!-- Contact Info Cards -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="contact-card text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Alamat</h5>
                        <p class="text-muted mb-0">
                            Jl. Raya Gempolsewu No. 123<br>
                            Bantul, DIY 55184
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Telepon</h5>
                        <p class="text-muted mb-1">(0274) 123456</p>
                        <p class="text-muted mb-0">0812-3456-7890</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Email</h5>
                        <p class="text-muted mb-0">mi.gempolsewu@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Jam Kerja</h5>
                        <p class="text-muted mb-1">Senin - Jumat</p>
                        <p class="text-muted mb-0">07.00 - 14.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Form -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-card">
                        <h3 class="fw-bold mb-4">Kirim Pesan</h3>
                        <form id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="nama" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Email *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Telepon</label>
                                    <input type="tel" class="form-control" id="telepon">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Subjek *</label>
                                    <select class="form-select" id="subjek" required>
                                        <option value="">Pilih Subjek</option>
                                        <option>Pendaftaran Siswa Baru</option>
                                        <option>Informasi Umum</option>
                                        <option>Keluhan/Saran</option>
                                        <option>Kerjasama</option>
                                        <option>Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Pesan *</label>
                                    <textarea class="form-control" id="pesan" rows="5" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map & Social Media -->
                <div class="col-lg-6" data-aos="fade-left">
                    <!-- Map -->
                    <div class="map-container mb-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.123!2d110.345!3d-7.890!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTMnMjQuNCJTIDExMMKwMjAnNDQuNCJF!5e0!3m2!1sid!2sid!4v1234567890" 
                            width="100%" 
                            height="350" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>

                    <!-- Social Media -->
                    <div class="contact-card">
                        <h5 class="fw-bold mb-4">Ikuti Kami</h5>
                        <div class="d-flex gap-3 mb-4">
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                        <p class="text-muted mb-0">
                            Ikuti media sosial kami untuk mendapatkan informasi dan update terbaru 
                            tentang kegiatan sekolah.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="text-success fw-semibold text-uppercase mb-2" style="letter-spacing: 2px; font-size: 14px;">FAQ</div>
                <h2 class="fw-bold" style="font-size: 2.5rem;">Pertanyaan yang Sering Diajukan</h2>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up">
                        <div class="accordion-item border-0 shadow-sm mb-3" style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Kapan pendaftaran siswa baru dibuka?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pendaftaran siswa baru biasanya dibuka mulai bulan Januari hingga Juni setiap tahunnya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3" style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Apa saja persyaratan pendaftaran?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Fotocopy Akte Kelahiran, Fotocopy KK, Pas Foto 3x4 (4 lembar), dan formulir pendaftaran.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3" style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Apakah tersedia fasilitas antar-jemput?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kami dapat memberikan rekomendasi layanan antar-jemput yang terpercaya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm" style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Berapa biaya pendidikan?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Untuk informasi detail biaya, silakan hubungi bagian administrasi sekolah.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get values
            const nama = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const pesan = document.getElementById('pesan').value;
            
            // Simple validation
            if(nama && email && pesan) {
                alert('Terima kasih! Pesan Anda telah berhasil dikirim.');
                this.reset();
            } else {
                alert('Mohon lengkapi semua field yang wajib diisi.');
            }
        });
    </script>
</body>
</html>
