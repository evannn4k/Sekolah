@extends('layout.guru-layout')

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
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Tambah berita baru</div>
                        </div>
                        <form action="{{ route('guru.berita.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="konten" class="form-label">Konten</label>
                                        <textarea name="konten" id="konten" class="form-control @error('konten') is-invalid @enderror" rows="10"
                                            style="resize: none;"></textarea>
                                        @error('konten')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tanggal_publish" class="form-label">Tanggal publish</label>
                                        <input type="date"
                                            class="form-control @error('tanggal_publish') is-invalid @enderror"
                                            id="tanggal_publish" name="tanggal_publish" />
                                        @error('tanggal_publish')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="tags" class="form-label">Tags</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            id="tags" name="tags" />
                                        @error('tags')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="penulis" class="form-label">Penulis</label>
                                        <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                            id="penulis" name="penulis" />
                                        @error('penulis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                                name="gambar" id="gambar" />
                                            <label class="input-group-text" for="gambar">Upload</label>
                                        </div>
                                        @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('guru.berita.index') }}" class="btn btn-danger">Kembali</a>
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
