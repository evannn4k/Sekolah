@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/fasilitas.css') }}">
@endpush

@section('main')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Fasilitas</h1>
            <p class="text-white-50 lead" data-aos="fade-up">Informasi tentang fasilitas yang ada di
                {{ $profil->nama_sekolah }}</p>
        </div>
    </div>

    <section class="py-5">
        <div class="container">

            <!-- staff Grid -->
            <div class="row g-4" id="staffContainer">

                @forelse ($fasilitases as $fasilitas)
                    <div class="col-md-10 offset-md-1 border-bottom pb-4" data-aos="fade-up">
                        <div class="row g-4">
                            <div class="col-md-4 d-flex">
                                <img src="{{ asset("storage/images/fasilitas/$fasilitas->gambar") }}" alt=""
                                    class="img-fluid rounded-4 shadow">
                            </div>
                            <div class="col-md-8">
                                <h5>{{ $fasilitas->nama_fasilitas }}</h5>
                                <div>{{ $fasilitas->deskripsi }}</div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="text-center py-5" data-aos="fade-up">Fasilitas belum ditambahkan</div>
                @endforelse

            </div>

            <!-- Pagination -->
            <nav class="mt-5" data-aos="fade-up">
                <ul class="pagination justify-content-center">

                    <li class="page-item {{ $fasilitases->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $fasilitases->previousPageUrl() }}">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>

                    @for ($i = 1; $i <= $fasilitases->lastPage(); $i++)
                        <li class="page-item {{ $fasilitases->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $fasilitases->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $fasilitases->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $fasilitases->nextPageUrl() }}">
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
