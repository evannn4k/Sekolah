@extends('layout.admin-layout')

@section('main')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">User</h3>
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
                        <div class="card-title">Edit user</div>
                    </div>
                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row g-3">

                                <div class="col-md-12">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" value="{{ $user->username }}"/>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="nama_lengkap" class="form-label">Nama lengkap</label>
                                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                        id="nama_lengkap" name="nama_lengkap" value="{{ $user->nama_lengkap }}"/>
                                    @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $user->email }}" />
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="password" class="form-label">Ganti Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" />
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="d-flex flex-column">
                                        <label for="role" class="form-label">Role</label>
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="role" id="admin" value="admin" checked>
                                            <label class="btn btn-outline-primary" for="admin">Admin</label>

                                            <input type="radio" class="btn-check" name="role" id="guru" value="guru">
                                            <label class="btn btn-outline-primary" for="guru">Guru</label>
                                        </div>
                                    </div>
                                    @error('role')
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
                                <a href="{{ route('admin.user.index') }}" class="btn btn-danger">Kembali</a>
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