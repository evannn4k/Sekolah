@extends('layout.admin-layout')

@section('main')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Galeri</h3>
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
                        <div class="card-title">Tambah galeri baru</div>
                    </div>
                    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <textarea name="deskripsi" id="deskripsi" rows="6" class="form-control @error('deskripsi') is-invalid @enderror" style="resize: none;"></textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="kategori" class="form-label">Kategori</label>
                                    <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                        id="kategori" name="kategori" />
                                    @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                        id="tanggal" name="tanggal" />
                                    @error('tanggal')
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
                                <a href="{{ route('admin.galeri.index') }}" class="btn btn-danger">Kembali</a>
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