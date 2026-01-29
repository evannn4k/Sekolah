@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/kontak.css') }}">
@endpush

@section('main')
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
                            {{ $profil->alamat }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-card text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Telepon</h5>
                        <p class="text-muted mb-1">{{ $profil->telepon }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card text-center">
                        <div class="contact-icon mx-auto">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Email</h5>
                        <p class="text-muted mb-0">{{ $profil->email }}</p>
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
                        <form action="{{ route("pesan") }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap *</label>
                                    <input type="text" class="form-control @error("nama_lengkap") is-invalid @enderror" id="nama_lengkap" name="nama_lengkap">
                                    @error("nama_lengkap")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-semibold">Email *</label>
                                    <input type="email" class="form-control @error("email") is-invalid @enderror" id="email" name="email">
                                    @error("email")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="telepon" class="form-label fw-semibold">Telepon</label>
                                    <input type="number" class="form-control @error("telepon") is-invalid @enderror" id="telepon" name="telepon">
                                    @error("telepon")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="subject" class="form-label fw-semibold">Subjek *</label>
                                    <select class="form-select @error("subject") is-invalid @enderror" id="subjek" name="subject">
                                        <option value="">Pilih Subjek</option>
                                        <option value="Pendaftaran Siswa Baru">Pendaftaran Siswa Baru</option> 
                                        <option value="Informasi Umum">Informasi Umum</option>
                                        <option value="Keluhan/Saran">Keluhan/Saran</option>
                                        <option value="Kerjasama">Kerjasama</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    @error("subject")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="pesan" class="form-label fw-semibold">Pesan *</label>
                                    <textarea class="form-control @error("pesan") is-invalid @enderror" id="pesan" rows="5" name="pesan"></textarea>
                                    @error("pesan")
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7762378386838!2d110.04948019981386!3d-6.917333865072926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7043fbc3a75a39%3A0x9d92d86851b178d8!2sMI%20Muhammadiyah%20Gempolsewu!5e0!3m2!1sid!2sid!4v1769565142175!5m2!1sid!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.123!2d110.345!3d-7.890!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTMnMjQuNCJTIDExMMKwMjAnNDQuNCJF!5e0!3m2!1sid!2sid!4v1234567890"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe> --}}
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
    {{-- <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="text-success fw-semibold text-uppercase mb-2" style="letter-spacing: 2px; font-size: 14px;">
                    FAQ</div>
                <h2 class="fw-bold" style="font-size: 2.5rem;">Pertanyaan yang Sering Diajukan</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up">
                        <div class="accordion-item border-0 shadow-sm mb-3"
                            style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    Kapan pendaftaran siswa baru dibuka?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pendaftaran siswa baru biasanya dibuka mulai bulan Januari hingga Juni setiap tahunnya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3"
                            style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Apa saja persyaratan pendaftaran?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Fotocopy Akte Kelahiran, Fotocopy KK, Pas Foto 3x4 (4 lembar), dan formulir pendaftaran.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-0 shadow-sm mb-3"
                            style="border-radius: 16px; overflow: hidden;">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
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
    </section> --}}
@endsection

@push('script')
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get values
            const nama = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const pesan = document.getElementById('pesan').value;

            // Simple validation
            if (nama && email && pesan) {
                alert('Terima kasih! Pesan Anda telah berhasil dikirim.');
                this.reset();
            } else {
                alert('Mohon lengkapi semua field yang wajib diisi.');
            }
        });
    </script>
@endpush
