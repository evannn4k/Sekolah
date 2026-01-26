@extends("layout.admin-layout")

@section("main")
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Berita</h3>
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
                        <h3 class="card-title">Tabel berita</h3>
                        <div class="card-tools">
                            <div class="me-2">
                                <a href="{{ route("admin.berita.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
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
                                    <th>Slug</th>
                                    {{-- <th>Konten</th> --}}
                                    {{-- <th>Tags</th> --}}
                                    {{-- <th>Penulis</th> --}}
                                    {{-- <th>Tgl Publish</th> --}}
                                    <th>Views</th>
                                    <th>Ditambahkan</th>
                                    <th>Diedit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($beritas as $berita)
                                <tr class="align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset("storage/images/berita/".$berita->gambar) }}" alt="" style="max-height: 120px;"></td>
                                    <td>{{ $berita->judul }}</td>
                                    <td>{{ $berita->slug }}</td>
                                    {{-- <td>{{ Str::limit($berita->konten, 100) }}</td> --}}
                                    {{-- <td>{{ $berita->tags }}</td> --}}
                                    {{-- <td>{{ $berita->penulis }}</td> --}}
                                    {{-- <td>{{ $berita->tanggal_publish }}</td> --}}
                                    <td>{{ $berita->views }}</td>
                                    <td>{{ $berita->created_at->diffForHumans() }}</td>
                                    <td>{{ $berita->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route("admin.berita.detail", $berita) }}" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="{{ route("admin.berita.edit", $berita) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                            <form action="{{ route("admin.berita.delete", $berita) }}" method="POST">
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
                            {{ $beritas->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection