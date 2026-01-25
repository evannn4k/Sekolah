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
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Tambah banner baru</div>
                        </div>
                        <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row g-3">

                                    <div class="col-md-12">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            id="judul" name="judul" />
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="6"
                                            style="resize: none;"></textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                                id="gambar" name="gambar" />
                                            <label for="gambar" class="input-group-text">Upload</label>
                                        </div>
                                        @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="urutan" class="form-label">Urutan</label>
                                        <input type="number" class="form-control @error('urutan') is-invalid @enderror"
                                            id="urutan" name="urutan" />
                                        @error('urutan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex flex-column">
                                            <label for="status" class="form-label">Status</label>
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="status" id="aktif" value="aktif" checked>
                                                <label class="btn btn-outline-primary" for="aktif">Aktif</label>

                                                <input type="radio" class="btn-check" name="status" id="nonaktif" value="nonaktif">
                                                <label class="btn btn-outline-primary" for="nonaktif">Nonaktif</label>
                                            </div>
                                        </div>
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.banner.index') }}" class="btn btn-danger">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection