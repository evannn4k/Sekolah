@extends("layout.admin-layout")

@section("main")
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Guru Staff</h3>
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
                        <h3 class="card-title">Tabel guru dan staff</h3>
                        <div class="card-tools">
                            <div class="me-2">
                                <a href="{{ route("admin.guru-staff.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead class="table-success">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>Urutan</th>
                                    <th>Ditambahkan</th>
                                    <th>Diedit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($guruStaffs as $guruStaff)
                                <tr class="align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ asset("storage/images/guru-staff/".$guruStaff->foto) }}" alt="" style="max-height: 120px;"></td>
                                    <td>{{ $guruStaff->nama }}</td>
                                    <td>{{ $guruStaff->nip }}</td>
                                    <td>{{ $guruStaff->jabatan }}</td>
                                    <td>{{ $guruStaff->urutan }}</td>
                                    <td>{{ $guruStaff->created_at->diffForHumans() }}</td>
                                    <td>{{ $guruStaff->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route("admin.guru-staff.edit", $guruStaff->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                            <form action="{{ route("admin.guru-staff.delete", $guruStaff->id) }}" method="POST">
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
                            {{ $guruStaffs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection