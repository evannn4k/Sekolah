@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/guru-staff.css') }}">
@endpush

@section('main')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Fasilitas</h1>
            <p class="text-white-50 lead" data-aos="fade-up">Informasi tentang Guru dan Staff</p>
        </div>
    </div>

    <section class="py-5">
        <div class="container">

            <!-- staff Grid -->
            <div class="row g-4">

                @forelse ($guruStaffs as $guruStaff)
                    <div class="col-lg-3 col-md-6 staff-item" data-aos="fade-up">
                        <div class="staff-card">
                            <div class="staff-image">
                                <img src="{{ asset("storage/images/guru-staff/$guruStaff->foto") }}" alt="staff">
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold mb-3">
                                    <div class="text-decoration-none text-dark">{{ $guruStaff->nama }}</div>
                                </h5>
                                <div class="text-muted">Jabatan : {{ $guruStaff->jabatan }}</div>
                                <div class="text-muted">NIP : {{ $guruStaff->nip }}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5" data-aos="fade-up">Guru dan Staff belum ditambahkan</div>
                @endforelse

            </div>

            <!-- Pagination -->
            <nav class="mt-5" data-aos="fade-up">
                <ul class="pagination justify-content-center">

                    <li class="page-item {{ $guruStaffs->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $guruStaffs->previousPageUrl() }}">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>

                    @for ($i = 1; $i <= $guruStaffs->lastPage(); $i++)
                        <li class="page-item {{ $guruStaffs->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $guruStaffs->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $guruStaffs->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $guruStaffs->nextPageUrl() }}">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </section>
@endsection

@push('script')
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Filter functionality
        document.getElementById('filterKategori').addEventListener('change', filterstaff);
        document.getElementById('searchInput').addEventListener('keyup', filterstaff);

        function filterstaff() {
            const kategori = document.getElementById('filterKategori').value.toLowerCase();
            const search = document.getElementById('searchInput').value.toLowerCase();
            const items = document.querySelectorAll('.staff-item');

            items.forelse(item => {
                const itemKategori = item.getAttribute('data-kategori');
                const itemTitle = item.querySelector('h5').textContent.toLowerCase();

                const matchKategori = kategori === '' || itemKategori === kategori;
                const matchSearch = search === '' || itemTitle.includes(search);

                if (matchKategori && matchSearch) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
@endpush
