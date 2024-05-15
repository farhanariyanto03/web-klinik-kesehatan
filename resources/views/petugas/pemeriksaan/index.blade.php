@extends('petugas.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('pemeriksaan.create') }}" class="btn btn-primary col-2"> + Pemeriksaan</a>
            </div>
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>No Antrian</th>
                                <th>No RM</th>
                                <th>Nama Pasien</th>
                                <th>Dokter</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($data_pemeriksaan as $pemeriksaan)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong><?= $pemeriksaan['no_antrian'] ?></strong>
                                    </td>
                                    <td><?= $pemeriksaan['NO_RM'] ?></td>
                                    <td><?= $pemeriksaan['nama_pasien'] ?></td>
                                    <td><?= $pemeriksaan['nama_lengkap'] ?></td>
                                    <td><?= $pemeriksaan['tggl_pemeriksaan'] ?></td>
                                    <td><?= $pemeriksaan['status'] ?></td>
                                    <td>
                                        <a href="{{ route('pemeriksaan.cetakAntrian', $pemeriksaan->id) }}"
                                            class="btn btn-icon btn-outline-warning">
                                            <i class='bx bx-printer'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
