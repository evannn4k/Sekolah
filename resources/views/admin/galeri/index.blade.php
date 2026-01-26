@extends("layout.admin-layout")

@section("main")
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Galeri</h3>
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
                        <h3 class="card-title">Tabel galeri</h3>
                        <div class="card-tools">
                            <div class="me-2">
                                <a href="{{ route("admin.galeri.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                         <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Tanggal</th>
                                    <th>Ditambahkan</th>
                                    <th>Diedit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($galeris as $galeri)
                                <tr class="align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset("storage/images/galeri/".$galeri->gambar) }}" alt="" style="max-height: 120px;"></td>
                                    <td>{{ $galeri->judul }}</td>
                                    <td>{{ $galeri->deskripsi }}</td>
                                    <td>{{ $galeri->kategori }}</td>
                                    <td>{{ $galeri->tanggal }}</td>
                                    <td>{{ $galeri->created_at->diffForHumans() }}</td>
                                    <td>{{ $galeri->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route("admin.galeri.edit", $galeri->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                            <form action="{{ route("admin.galeri.delete", $galeri->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
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
                            {{ $galeris->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection