@extends('layout.default')

@section('content')
<div class="container">
    <div class="vh-100 row align-items-center">
        <div class="col-md-4 offset-md-4">
            <div class="card card-primary card-outline mb-4">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Login</h3>
                    </div>
                </div>
                <form action="{{ route("verify") }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" />
                            <div id="emailHelp" class="form-text">
                                We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex flex-column gap-2">
                            <button type="submit" class="w-100 btn btn-primary">Submit</button>
                            <div class="text-center">Belum memiliki akun? silahkan <a href="{{ route("formRegister") }}">daftar</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
