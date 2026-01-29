<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>a<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="
                    @if(Auth::guard("guru")->user()->gambar)
                    {{ asset('storage/images/user/' . Auth::guard("guru")->user()->gambar) }}
                    @else
                    {{ asset('assets/img/default-pp.jpg') }}
                    @endif
                    " class="user-image rounded-circle shadow"
                    alt="" />
                    <span class="d-none d-md-inline">{{ Auth::guard('guru')->user()->username }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-secondary">
                        <img src="
                        @if(Auth::guard("guru")->user()->gambar)
                        {{ asset('storage/images/user/' . Auth::guard("guru")->user()->gambar) }}
                        @else
                        {{ asset('assets/img/default-pp.jpg') }}
                        @endif
                        " class="user-image rounded-circle shadow"
                        alt="" />
                        <p>
                            {{ Auth::guard('guru')->user()->username }}
                            <small>{{ Auth::guard('guru')->user()->email }}</small>
                        </p>
                    </li>
                    {{-- <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center"><a href="#">Followers</a></div>
                            <div class="col-4 text-center"><a href="#">Sales</a></div>
                            <div class="col-4 text-center"><a href="#">Friends</a></div>
                        </div>
                    </li> --}}
                    <li class="user-footer">
                        <a href="{{ route("logout") }}" class="btn btn-danger btn-flat float-end">Sign out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>