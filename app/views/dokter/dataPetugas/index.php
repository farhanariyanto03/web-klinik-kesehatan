<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="p-3">
            <a href="dataPetugas/tambahPetugas" class="btn btn-primary col-2"> + Petugas</a>
        </div>
        <div class="col-md-6e p-1">
            <div class="card-body bg-white p-2" style="border-radius: 18px;">
                <table class="table table-hover large" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
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
                        foreach ($data['petugas'] as $petugas) :
                        ?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong><?= $i ?></strong>
                                </td>
                                <td><?= $petugas['nama_lengkap'] ?></td>
                                <td><?= $petugas['jenis_kelamin'] ?></td>
                                <td><?= $petugas['email'] ?></td>
                                <td><?= $petugas['password'] ?></td>
                                <td><?= $petugas['alamat'] ?></td>
                                <td><?= $petugas['no_hp'] ?></td>
                                <td>
                                    <a href="http://localhost/klinik_kesehatan/public/dataPetugas/editPetugas/<?= $petugas['id_login']; ?>" 
                                    class="btn btn-icon btn-outline-warning"><i class="bx bx-pencil"></i></a>
                                    <a href="http://localhost/klinik_kesehatan/public/dataPetugas/hapusPetugas/<?= $petugas['id_login']; ?>" 
                                    class="btn btn-icon btn-outline-danger"><i class="bx bx-trash-alt"></i></a>
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