@extends("layout.admin-layout")

@section("main")
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">User</h3>
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
                        <h3 class="card-title">Tabel user</h3>
                        <div class="card-tools">
                            <div class="me-2">
                                <a href="{{ route("admin.user.create") }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead class="table-success">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Gambar</th>
                                    <th>Username</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Ditambahkan</th>
                                    <th>Diedit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($users as $user)
                                <tr class="align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ ($user->gambar) ? asset("storage/images/user/".$user->gambar) : asset("assets/img/default-pp.jpg") }}" alt="" style="max-height: 40px;"></td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->nama_lengkap }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><span class="badge {{ ($user->role == "admin") ? "text-bg-primary" : "text-bg-success" }}">{{ $user->role }}</span></td>
                                    <td>{{ $user->created_at->diffForHumans() }}</td>
                                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <a href="{{ route("admin.user.edit", $user->id) }}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square"></i></a>
                                            <form action="{{ route("admin.user.delete", $user->id) }}" method="POST">
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
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection