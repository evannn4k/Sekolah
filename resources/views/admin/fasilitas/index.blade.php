@extends("layout.admin-layout")

@section("main")
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Fasilitas</h3>
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
                        <h3 class="card-title">Tabel fasilitas</h3>
                        <div class="card-tools">
                            <div class="me-2">
                                <a href="{{ route("admin.fasilitas.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Gambar</th>
                                    <th>Nama Fasilitas</th>
                                    <th>Deskripsi</th>
                                    <th>Ditambahkan</th>
                                    <th>Diedit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($fasilitases as $fasilitas)
                                <tr class="align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset("storage/images/fasilitas/".$fasilitas->gambar) }}" alt="" height="120px"></td>
                                    <td>{{ $fasilitas->nama_fasilitas }}</td>
                                    <td>{{ $fasilitas->deskripsi }}</td>
                                    <td>{{ $fasilitas->created_at->diffForHumans() }}</td>
                                    <td>{{ $fasilitas->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route("admin.fasilitas.edit", $fasilitas->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                            <form action="{{ route("admin.fasilitas.delete", $fasilitas->id) }}" method="POST">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection