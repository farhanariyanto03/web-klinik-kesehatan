<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="col-md-6e p-1">
            <div class="card-body bg-white p-2" style="border-radius: 18px;">
                <table class="table table-hover large" id="myTable">
                    <thead>
                        <tr>
                            <th>No_RM</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>tggl_lahir</th>
                            <th>Jenis Kelamain</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1;
                        foreach ($data['pasien'] as $pasien) :
                        ?>
                            <td><?= $pasien['No_RM'] ?></td>
                            <td><?= $pasien['NIK'] ?></td>
                            <td><?= $pasien['nama_pasien'] ?></td>
                            <td><?= $pasien['tggl_lahir'] ?></td>
                            <td><?= $pasien['jenis_kelamin'] ?></td>
                            <td><?= $pasien['agama'] ?></td>
                            <td><?= $pasien['status'] ?></td>
                            <td><?= $pasien['pendidikan_terakhir'] ?></td>
                            <td><?= $pasien['alamat'] ?></td>
                            <td><?= $pasien['no_hp'] ?></td>
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