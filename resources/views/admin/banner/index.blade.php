@extends('layout.admin-layout')

@section('main')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Banner</h3>
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
                            <h3 class="card-title">Tabel Banner</h3>
                            <div class="card-tools">
                                <div class="me-2">
                                    <a href="{{ route('admin.banner.create') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Urutan</th>
                                        <th>Status</th>
                                        <th>Ditambahkan</th>
                                        <th>Diedit</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($banners as $banner)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{ asset("storage/images/banner/$banner->gambar") }}" alt="" height="120px"></td>
                                        <td>{{ $banner->judul }}</td>
                                        <td>{{ $banner->deskripsi }}</td>
                                        <td>{{ $banner->urutan }}</td>
                                        <td>{{ $banner->status }}</td>
                                        <td>{{ $banner->created_at->diffForHumans() }}</td>
                                        <td>{{ $banner->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <a href="{{ route("admin.banner.edit", $banner->id) }}" class="btn btn-success btn-sm"><i class="fa-solid fa-pencil-square"></i></a>
                                                <form action="{{ route("admin.banner.delete", $banner->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="9">Data tidak ada</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
