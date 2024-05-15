@extends('dokter.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="p-3">
                <a href="{{ route('dataDokter.create') }}" class="btn btn-primary col-2"> + Dokter</a>
            </div>
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Jenis Kelamin</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $i = 1; ?>
                            @foreach ($data as $dokter)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong><?= $i ?></strong>
                                    </td>
                                    <td><?= $dokter['nama_lengkap'] ?></td>
                                    <td><?= $dokter['jenis_kelamin'] ?></td>
                                    <td><?= $dokter['email'] ?></td>
                                    <td><?= $dokter['password'] ?></td>
                                    <td><?= $dokter['alamat'] ?></td>
                                    <td><?= $dokter['no_hp'] ?></td>
                                    <td>
                                        <a href="{{ route('dataDokter.edit', $dokter->id) }}"
                                            class="btn btn-icon btn-outline-warning">
                                            <i class='bx bxs-pencil'></i>
                                        </a>
                                        <form action="{{ route('dataDokter.destroy', $dokter->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button id="confirmDelete" type="submit"
                                                class="btn btn-icon btn-outline-danger" data-confirm-delete="true">
                                                <i class="bx bx-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
