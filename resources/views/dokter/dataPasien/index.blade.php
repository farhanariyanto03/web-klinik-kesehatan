@extends('dokter.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>No RM</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Tangal Lahir</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($data as $pasien)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong><?= $pasien['NO_RM'] ?></strong>
                                    </td>
                                    <td><?= $pasien['nama_pasien'] ?></td>
                                    <td><?= $pasien['jenis_kelamin'] ?></td>
                                    <td><?= $pasien['tggl_lahir'] ?></td>
                                    <td><?= $pasien['alamat'] ?></td>
                                    <td><?= $pasien['no_hp'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong">
                                            <i class="bx bx-info-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('dokter.dataPasien.modal')
@endsection
