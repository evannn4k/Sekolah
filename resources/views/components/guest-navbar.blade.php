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
                    <a class="nav-link active" href="{{ route("index") }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route("profil") }}">Tentang Sekolah</a></li>
                        <li><a class="dropdown-item" href="{{ route("profil") }}#visi-misi">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route("profil") }}#sejarah">Sejarah</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("guru-staff") }}">Guru & Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("berita") }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("galeri") }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("prestasi") }}">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("fasilitas") }}">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("kontak") }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>