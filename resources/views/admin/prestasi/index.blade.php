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
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Tabel prestasi</h3>
                            <div class="card-tools">
                                <div class="me-2">
                                    <a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i> Tambah</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead class="table-success">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Gambar</th>
                                        <th>Prestasi</th>
                                        <th>Tingkat</th>
                                        <th>Juara</th>
                                        <th>Nama</th>
                                        <th>Tahun</th>
                                        <th>Ditambahkan</th>
                                        <th>Diedit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @forelse ($prestasis as $prestasi)
                                        <tr class="align-middle">
                                            <td>{{ $no++ }}</td>
                                            <td><img src="{{ asset('storage/images/prestasi/' . $prestasi->gambar) }}"
                                                    alt="" style="max-height: 120px;"></td>
                                            <td>{{ $prestasi->nama_prestasi }}</td>
                                            <td>{{ $prestasi->tingkat }}</td>
                                            <td>{{ $prestasi->juara }}</td>
                                            <td>{{ $prestasi->nama_siswa }}</td>
                                            <td>{{ $prestasi->tahun }}</td>
                                            <td>{{ $prestasi->created_at->diffForHumans() }}</td>
                                            <td>{{ $prestasi->updated_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="d-flex gap-1">
                                                    <a href="{{ route('admin.prestasi.edit', $prestasi->id) }}"
                                                        class="btn btn-success btn-sm"><i
                                                            class="fa fa-pencil-square"></i></a>
                                                    <form action="{{ route('admin.prestasi.delete', $prestasi->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="12">Data tidak ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="p-3">
                                {{ $prestasis->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
