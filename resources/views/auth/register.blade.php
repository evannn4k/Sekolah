@extends('layout.default')

@section('content')
<div class="container">
    <div class="vh-100 row align-items-center">
        <div class="col-md-6 offset-md-3">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Register</h3>
                    </div>
                </div>
                <form action="{{ route("register") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username *</label>
                            <input type="text" class="form-control @error("username") is-invalid @enderror" id="username" name="username" />
                            @error("username")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
                            <input type="text" class="form-control @error("nama_lengkap") is-invalid @enderror" id="nama_lengkap" name="nama_lengkap" />
                            @error("nama_lengkap")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address *</label>
                            <input type="email" class="form-control @error("email") is-invalid @enderror" id="email" name="email"
                            aria-describedby="emailHelp" />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with anyone else.
                            </div>
                            @error("email")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" class="form-control @error("password") is-invalid @enderror" id="password" name="password" />
                            <div id="emailHelp" class="form-text">
                                Minimum 8 characters
                            </div>
                            @error("password")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control @error("password_confirmation") is-invalid @enderror" id="password_confirmation" name="password_confirmation" />
                            @error("password_confirmation")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Foto Profile</label>
                            <input type="file" class="form-control @error("gambar") is-invalid @enderror" id="gambar" name="gambar" />
                            @error("gambar")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror    
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-column gap-2">
                            <button type="submit" class="w-100 btn btn-primary">Submit</button>
                            <div class="text-center">Sudah memiliki akun? silahkan <a href="{{ route("login") }}">masuk</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection