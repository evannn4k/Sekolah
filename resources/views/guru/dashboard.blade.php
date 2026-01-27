@extends('layout.guru-layout')

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

                <div class="col-6">
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <h3>{{ $totalGuruStaff }}</h3>
                            <p>Guru dan Staff</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-person-chalkboard"></i>
                        <a href="{{ route('guru.guru-staff.index') }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="small-box text-bg-success ">
                        <div class="inner">
                            <h3>{{ $totalBerita }}</h3>
                            <p>Berita</p>
                        </div>
                        <i class="small-box-icon fa-solid fa-newspaper"></i>
                        <a href="{{ route('guru.berita.index') }}"
                            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                            More info <i class="bi bi-link-45deg"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
