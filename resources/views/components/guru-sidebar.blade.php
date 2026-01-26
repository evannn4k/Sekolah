<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('guru.dashboard') }}" class="brand-link">
            {{-- <img src="" alt="guruLTE Logo" class="brand-image opacity-75 shadow" /> --}}
            <span class="brand-text fw-light">Dashboard guru</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="{{ route('guru.dashboard') }}"
                        class="nav-link {{ request()->routeIs('guru.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-house"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header fs-6">Pengaturan Dasar</li>
                <li class="nav-item">
                    <a href="{{ route('guru.guru-staff.index') }}"
                        class="nav-link {{ request()->routeIs('guru.guru-staff.index') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-person-chalkboard"></i>
                        <p>Guru dan Staff</p>
                    </a>
                </li>
                <li class="nav-header fs-6">Konten</li>
                 <li class="nav-item">
                     <a href="{{ route('guru.berita.index') }}" class="nav-link {{ request()->routeIs('guru.berita.index') ? 'active' : '' }}">
                         <i class="nav-icon fa-solid fa-newspaper"></i>
                         <p>Berita</p>
                     </a>
                 </li>
            </ul>
        </nav>
    </div>
</aside>
