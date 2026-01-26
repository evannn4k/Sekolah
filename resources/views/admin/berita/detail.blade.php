@extends('layout.admin-layout')

@section('main')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Berita</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Tabel berita</h3>
                            <div class="card-tools">
                                <div class="me-2">
                                    <a href="{{ route('admin.berita.index') }}" class="btn btn-danger"><i
                                            class="fa-solid fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="p-3">
                                <div class="row g-4">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('storage/images/berita/' . $berita->gambar) }}" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="lh-base mb-4">{{ $berita->judul }}</h3>
                                        <table class="table ">
                                            <tr>
                                                <td><i class="fa-solid fa-eye text-info"></i> Views</td>
                                                <td width="10px">:</td>
                                                <td>{{ $berita->views }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-solid fa-hashtag text-primary"></i> Tags</td>
                                                <td width="10px">:</td>
                                                <td>{{ $berita->tags }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-solid fa-pen text-danger"></i> Penulis</td>
                                                <td width="10px">:</td>
                                                <td>{{ $berita->penulis }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa-solid fa-calendar-days text-success"></i> Tanggal Publish</td>
                                                <td width="10px">:</td>
                                                <td>{{ $berita->tanggal_publish }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-12">
                                        <h4>Isi berita</h4>
                                        <p class="fs-6">
                                            {{ $berita->konten }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
