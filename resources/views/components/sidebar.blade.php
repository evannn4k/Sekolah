 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
     <div class="sidebar-brand">
         <a href="./index.html" class="brand-link">
             {{-- <img src="" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" /> --}}
             <span class="brand-text fw-light">AdminLTE 4</span>
         </a>
     </div>
     <div class="sidebar-wrapper">
         <nav class="mt-2">
             <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                 aria-label="Main navigation" data-accordion="false" id="navigation">
                 <li class="nav-item">
                     <a href="{{ route('admin.dashboard') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-house"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.user.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-user"></i>
                         <p>User</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.guru-staff.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-person-chalkboard"></i>
                         <p>Guru dan Staff</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.berita.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-newspaper"></i>
                         <p>Berita</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.profil.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-school"></i>
                         <p>Profil Sekolah</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.banner.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-flag"></i>
                         <p>Banner Web</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.galeri.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-images"></i>
                         <p>Galeri</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.prestasi.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-trophy"></i>
                         <p>Prestasi</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.fasilitas.index') }}" class="nav-link">
                         <i class="nav-icon fa-solid fa-screwdriver-wrench"></i>
                         <p>Fasilitas</p>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>