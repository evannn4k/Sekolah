@extends('layout.admin-layout')

@section('main')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Guru dan Staff</h3>
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
                        <div class="card-title">Tambah guru atau staff baru</div>
                    </div>
                    <form action="{{ route('admin.guru-staff.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" />
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="nip" class="form-label">NIP</label>
                                    <input type="number" class="form-control @error('nip') is-invalid @enderror"
                                        id="nip" name="nip" />
                                    @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="jabatan" class="form-label">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                        id="jabatan" name="jabatan" />
                                    @error('jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="urutan" class="form-label">Urutan</label>
                                    <input type="number" class="form-control @error('urutan') is-invalid @enderror"
                                        id="urutan" name="urutan" />
                                    @error('urutan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="foto" class="form-label">Foto</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            name="foto" id="foto" />
                                        <label class="input-group-text" for="foto">Upload</label>
                                    </div>
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex gap-2">
                                <a href="{{ route('admin.guru-staff.index') }}" class="btn btn-danger">Kembali</a>
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