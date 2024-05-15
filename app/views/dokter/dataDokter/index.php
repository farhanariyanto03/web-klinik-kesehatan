<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="p-3">
            <a href="dataDokter/tambahDokter" class="btn btn-primary col-2"> + Dokter</a>
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
                        <?php $i = 1;
                        foreach ($data['dokter'] as $dokter) :
                        ?>
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
                                    <a href="http://localhost/klinik_kesehatan/public/dataDokter/editDokter/<?= $dokter['id_login']; ?>" class="btn btn-icon btn-outline-warning"><i class="bx bx-pencil"></i></a>
                                    <a href="http://localhost/klinik_kesehatan/public/dataDokter/hapusDokter/<?= $dokter['id_login']; ?>" class="btn btn-icon btn-outline-danger"><i class="bx bx-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>