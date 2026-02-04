<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <img src="{{ asset("storage/images/profil/$profil->logo") }}" alt="" class="img-fluid brand-logo">
                    {{ $profil->nama_sekolah }}
                </div>
                <p class="footer-description">
                    {{ $profil->visi }}
                </p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title">Menu Cepat</h5>
                <ul class="footer-links">
                    <li><a href="{{ route("index") }}"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                    <li><a href="{{ route("profil") }}"><i class="fas fa-chevron-right"></i> Profil</a></li>
                    <li><a href="{{ route("berita") }}"><i class="fas fa-chevron-right"></i> Berita</a></li>
                    <li><a href="{{ route("galeri") }}"><i class="fas fa-chevron-right"></i> Galeri</a></li>
                    <li><a href="{{ route("prestasi") }}"><i class="fas fa-chevron-right"></i> Prestasi</a></li>
                    <li><a href="{{ route("kontak") }}"><i class="fas fa-chevron-right"></i> Kontak</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Informasi</h5>
                <ul class="footer-links">
                    <li><a href="{{ route("profil") }}"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                    <li><a href="{{ route("guru-staff") }}"><i class="fas fa-chevron-right"></i> Guru & Staff</a></li>
                    <li><a href="{{ route("fasilitas") }}"><i class="fas fa-chevron-right"></i> Fasilitas</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> PPDB</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Kalender Akademik</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Kontak Kami</h5>
                <div class="footer-contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <div>{{ $profil->alamat }}</div>
                    </div>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-phone"></i>
                    <div>{{ $profil->telepon }}</div>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-envelope"></i>
                    <div>{{ $profil->email }}</div>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-clock"></i>
                    <div>{{ $profil->jam_kerja }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="mb-0">
                &copy; 2025 MI Muhammadiyah Gempolsewu. All Rights Reserved.
                <span class="mx-2">|</span>
                Developed with <i class="fas fa-heart text-danger"></i> by Tim IT MI Gempolsewu
            </p>
        </div>
    </div>
</footer>