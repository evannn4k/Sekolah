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
                        <img src="{{ asset("storage/images/profil/$profil->foto_kepsek") }}" alt=""
                            class="w-100 img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section class="py-5" id="tentang-sekolah">
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
                        {!! nl2br($profil->tentang_sekolah) !!}
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
                    <div class="lh-lg py-4 text-center" data-aos="fade-up">
                        {!! nl2br($profil->sejarah) !!}
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
