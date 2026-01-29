@extends("layout.admin-layout")

@section("main")
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Pesan</h3>
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
                        <h3 class="card-title">Tabel pesan</h3>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead class="table-success">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Subject</th>
                                    <th>Pesan</th>
                                    <th>Dikirim</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($pesans as $pesan)
                                <tr class="align-middle">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pesan->nama_lengkap }}</td>
                                    <td>{{ $pesan->email }}</td>
                                    <td>{{ $pesan->telepon }}</td>
                                    <td>{{ $pesan->subject }}</td>
                                    <td>{{ $pesan->pesan }}</td>
                                    <td>{{ $pesan->created_at->diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="12">Data tidak ada</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="p-3">
                            {{ $pesans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection