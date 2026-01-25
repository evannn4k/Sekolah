@extends('layout.admin-layout')

@section('main')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Prestasi</h3>
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
                        <div class="card-title">Edit prestasi</div>
                    </div>
                    <form action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <label for="nama_prestasi" class="form-label">Nama Prestasi</label>
                                    <input type="text" class="form-control @error('nama_prestasi') is-invalid @enderror"
                                        id="nama_prestasi" name="nama_prestasi" value="{{ $prestasi->nama_prestasi }}"/>
                                    @error('nama_prestasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="tingkat" class="form-label">Tingkat Kejuaraan</label>
                                    <select name="tingkat" id="tingkat" class="form-select @error('tingkat') is-invalid @enderror">
                                        <option disabled>Pilih tingkat kejuaraan</option>
                                        <option value="Sekolah" {{ ($prestasi->tingkat == "Sekolah") ? "selected" : "" }}>Sekolah</option>
                                        <option value="Kecamatan" {{ ($prestasi->tingkat == "Kecamatan") ? "selected" : "" }}>Kecamatan</option>
                                        <option value="Kabupaten" {{ ($prestasi->tingkat == "Kabupaten") ? "selected" : "" }}>Kabupaten</option>
                                        <option value="Provinsi" {{ ($prestasi->tingkat == "Provinsi") ? "selected" : "" }}>Provinsi</option>
                                        <option value="Nasional" {{ ($prestasi->tingkat == "Nasional") ? "selected" : "" }}>Nasional</option>
                                    </select>
                                    @error('tingkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="juara" class="form-label">Juara</label>
                                    <input type="text" class="form-control @error('juara') is-invalid @enderror"
                                        id="juara" name="juara" value="{{ $prestasi->juara }}"/>
                                    @error('juara')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                    <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror"
                                        id="nama_siswa" name="nama_siswa" value="{{ $prestasi->nama_siswa }}"/>
                                    @error('nama_siswa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="tahun" class="form-label">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-select @error('tahun') is-invalid @enderror">
                                        <option disabled>Pilih Tahun</option>
                                        @for ($year = date('Y'); $year >= 1950; $year--)
                                        <option value="{{ $year }}" {{ ($prestasi->tahun == $year) ? "selected" : "" }}>{{ $year }}</option>
                                        @endfor
                                    </select>

                                    @error('tahun')
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
                                <a href="{{ route('admin.prestasi.index') }}" class="btn btn-danger">Kembali</a>
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