@extends('layout.guest-layout')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/guest/prestasi.css') }}">
@endpush

@section('main')
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title" data-aos="fade-down">Prestasi</h1>
            <p class="text-white-50 lead" data-aos="fade-up">Seluruh penghargaan yang dimiliki
                {{ $profil->nama_sekolah }}</p>
        </div>
    </div>

    <section class="py-5">
        <div class="container">

            <!-- staff Grid -->
            <div class="row g-4">

                @forelse ($prestasis as $prestasi)
                    <div class="col-md-10 offset-md-1 border-bottom pb-4" data-aos="fade-up">
                        <div class="row g-4">
                            <div class="col-md-4 d-flex">
                                <img src="{{ asset("storage/images/prestasi/$prestasi->gambar") }}" alt=""
                                    class="img-fluid rounded-4 shadow">
                            </div>
                            <div class="col-md-8">
                                <div class="fs-6">KEJUARAAN</div>
                                <h2> {{ $prestasi->nama_prestasi }}</h2>
                                <table class="table table-borderless">
                                    <tr>
                                        <td>Nama Siswa </td>
                                        <td width="5%"> : </td>
                                        <td>{{ $prestasi->nama_siswa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Juara </td>
                                        <td width="5%"> : </td>
                                        <td>{{ $prestasi->juara }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tingkat </td>
                                        <td width="5%"> : </td>
                                        <td>{{ $prestasi->tingkat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun </td>
                                        <td width="5%"> : </td>
                                        <td>{{ $prestasi->tahun }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5" data-aos="fade-up">Prestasi belum ditambahkan</div>
                @endforelse

            </div>

            <!-- Pagination -->
            <nav class="mt-5" data-aos="fade-up">
                <ul class="pagination justify-content-center">

                    <li class="page-item {{ $prestasis->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $prestasis->previousPageUrl() }}">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>

                    @for ($i = 1; $i <= $prestasis->lastPage(); $i++)
                        <li class="page-item {{ $prestasis->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $prestasis->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li class="page-item {{ $prestasis->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $prestasis->nextPageUrl() }}">
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
