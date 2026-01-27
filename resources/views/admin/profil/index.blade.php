@extends('layout.admin-layout')

@section('main')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Profil Sekolah</h3>
                <p>Terakhir diubah : {{ $profil->updated_at }}</p>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary-card-outline mb-4">
                    <div class="card-header">
                        <div class="card-title">Data profil sekolah</div>
                    </div>
                    <form action="{{ route('admin.profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                                    <input type="text"
                                        class="form-control @error('nama_sekolah') is-invalid @enderror"
                                        id="nama_sekolah" name="nama_sekolah" value="{{ $profil->nama_sekolah }}" />
                                    @error('nama_sekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror"
                                        style="resize: none">{{ $profil->alamat }}</textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="number" class="form-control @error('telepon') is-invalid @enderror"
                                        id="telepon" name="telepon" value="{{ $profil->telepon }}" />
                                    @error('telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $profil->email }}" />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="npsn" class="form-label">NPSN</label>
                                    <input type="number" class="form-control @error('npsn') is-invalid @enderror"
                                        id="npsn" name="npsn" value="{{ $profil->npsn }}" />
                                    @error('npsn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="akreditasi" class="form-label">Akreditasi</label>
                                    <input type="text" class="form-control @error('akreditasi') is-invalid @enderror"
                                        id="akreditasi" name="akreditasi" value="{{ $profil->akreditasi }}" />
                                    @error('akreditasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="sejarah" class="form-label">Sejarah</label>
                                    <textarea name="sejarah" id="sejarah" rows="6" class="form-control @error('sejarah') is-invalid @enderror"
                                        style="resize: none">{{ $profil->sejarah }}</textarea>
                                    @error('sejarah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="visi" class="form-label">Visi</label>
                                    <textarea name="visi" id="visi" rows="4" class="form-control @error('visi') is-invalid @enderror"
                                        style="resize: none">{{ $profil->visi }}</textarea>
                                    @error('visi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="misi" class="form-label">Misi</label>
                                    <textarea name="misi" id="misi" rows="6" class="form-control @error('misi') is-invalid @enderror"
                                    style="resize: none">{{ $profil->misi }}</textarea>
                                    <div class="form-text">Diberi enter untuk setiap misi</div>
                                    @error('misi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="sambutan_kepsek" class="form-label">Sambutan Kepala Sekolah</label>
                                    <textarea name="sambutan_kepsek" id="sambutan_kepsek" rows="6"
                                        class="form-control @error('sambutan_kepsek') is-invalid @enderror" style="resize: none">{{ $profil->sambutan_kepsek }}</textarea>
                                    @error('sambutan_kepsek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="nama_kepsek" class="form-label">Nama Kepala Sekolah</label>
                                    <input type="text"
                                        class="form-control @error('nama_kepsek') is-invalid @enderror"
                                        id="nama_kepsek" name="nama_kepsek" value="{{ $profil->nama_kepsek }}" />
                                    @error('nama_kepsek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="foto_kepsek" class="form-label">Ganti Foto Kepala Sekolah</label>
                                    <div class="input-group">
                                        <input type="file"
                                            class="form-control @error('foto_kepsek') is-invalid @enderror"
                                            name="foto_kepsek" id="foto_kepsek" />
                                        <label class="input-group-text" for="foto_kepsek">Upload</label>
                                    </div>
                                    @error('foto_kepsek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Foto Kepala Sekolah Saat ini</label>
                                    <div>
                                        <img src="{{ asset("storage/images/profil/$profil->foto_kepsek") }}"
                                            alt="" style="max-height:200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection