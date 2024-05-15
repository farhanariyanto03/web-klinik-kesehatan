@extends('petugas.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('dataPasien.create') }}" class="btn btn-primary col-2"> + Pasien</a>
            </div>
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
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $pasien->NO_RM }}</strong>
                                    </td>
                                    <td><?= $pasien['nama_pasien'] ?></td>
                                    <td><?= $pasien['jenis_kelamin'] ?></td>
                                    <td><?= $pasien['tggl_lahir'] ?></td>
                                    <td><?= $pasien['alamat'] ?></td>
                                    <td><?= $pasien['no_hp'] ?></td>
                                    <td>
                                        <a href="{{ route('dataPasien.edit', $pasien->NO_RM) }}"
                                            class="btn btn-icon btn-outline-warning">
                                            <i class='bx bxs-pencil'></i>
                                        </a>
                                        <form action="{{ route('dataPasien.destroy', $pasien->NO_RM) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button id="confirmDelete" type="submit"
                                                class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-icon btn-outline-secondary"
                                            data-bs-toggle="modal" data-bs-target="#modalLong{{ $pasien->NO_RM }}">
                                            <i class="bx bx-info-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                                <div class="col-lg-4 col-md-3">
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalLong{{ $pasien->NO_RM }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <p><b>No RM :</b> {{ $pasien->NO_RM }}</p>
                                                        <p><b>NIK :</b> {{ $pasien->NIK }}</p>
                                                        <p><b>Nama Pasien :</b> {{ $pasien->nama_pasien }}</p>
                                                        <p><b>tggl_lahir :</b> {{ $pasien->tggl_lahir }}</p>
                                                        <p><b>Jenis Kelamin :</b> {{ $pasien->jenis_kelamin }}</p>
                                                        <p><b>Status :</b> {{ $pasien->status }}</p>
                                                        <p><b>Pendidikan Terakhir :</b> {{ $pasien->pendidikan_terakhir }}
                                                        </p>
                                                        <p><b>Alamat :</b> {{ $pasien->alamat }}</p>
                                                        <p><b>No Hp :</b> {{ $pasien->no_hp }}</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
