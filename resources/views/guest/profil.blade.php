@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/profil.css') }}">
@endpush

@section('main')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Profil Sekolah</h1>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="py-5 bg-light" id="sambutan">
        <div class="container">
            <div data-aos="fade-right">  
                <div class="section-subtitle mb-3">SAMBUTAN</div>
                <h2 class="section-title">KEPALA SEKOLAH {{ $profil->nama_sekolah }}</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-7" data-aos="fade-right">
                    <div class="py-4 lh-lg">
                        {!! nl2br($profil->sambutan_kepsek) !!}
                    </div>
                </div>
                <div class="col-md-5" data-aos="fade-left">
                    <div class="py-4">
                        <img src="{{ asset("storage/images/profil/$profil->foto_kepsek") }}" alt="" class="w-100 img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section class="py-5" id="tantang">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=600&h=400&fit=crop"
                        class="img-fluid rounded-4 shadow-lg" alt="School">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-subtitle mb-3">TENTANG KAMI</div>
                    <h2 class="section-title mb-4">{{ $profil->nama_sekolah }}</h2>
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
                            {{ $profil->visi }}
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
                            @foreach ($misis as $misi)
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-success me-3 mt-1"></i>
                                    <span>{{ $misi }}</span>
                                </li>
                            @endforeach
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
                            <td>{{ $profil->nama_sekolah }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">NPSN</td>
                            <td>{{ $profil->npsn }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Akreditasi</td>
                            <td><span class="badge bg-success">{{ $profil->akreditasi }}</span></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Alamat</td>
                            <td>{{ $profil->alamat }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Telepon</td>
                            <td>{{ $profil->telepon }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Email</td>
                            <td>{{ $profil->email }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Kepala Sekolah</td>
                            <td>{{ $profil->nama_kepsek }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
@endpush
