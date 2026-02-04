@extends('layout.admin-layout')

@section('main')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ $totalUser }}</h3>
                            <p>Pengguna</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-user"></i>
                        <a href="{{ route('admin.user.index') }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{ $totalGuruStaff }}</h3>
                            <p>Guru dan Staff</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-person-chalkboard"></i>
                        <a href="{{ route('admin.guru-staff.index') }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ $totalBerita }}</h3>
                            <p>Berita</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-newspaper"></i>
                        <a href="{{ route('admin.berita.index') }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <h3>{{ $totalGaleri }}</h3>
                            <p>Galeri</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-images"></i>
                        </svg>
                        <a href="{{ route('admin.galeri.index') }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-warning">
                        <div class="inner">
                            <h3>{{ $totalBanner }}</h3>
                            <p>Banner</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-flag"></i>
                        <a href="{{ route("admin.banner.index") }}"
                        class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                        More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>{{ $totalPrestasi }}</h3>
                            <p>Prestasi</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-trophy"></i>
                        <a href="{{ route("admin.prestasi.index") }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-info">
                        <div class="inner">
                            <h3>{{ $totalFasilitas }}</h3>
                            <p>Fasilitas</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-screwdriver-wrench"></i>
                        <a href="{{ route("admin.fasilitas.index") }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection