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
                            <th>No HP</th>
                            <th>Nama Dokter</th>
                            <th>Tanggal Periksa</th>
                            <th>Diagnosa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php $i = 1;
                        foreach ($data['pemeriksaan'] as $pemeriksaan) :
                        ?>
                            <td><?= $pemeriksaan['No_RM'] ?></td>
                            <td><?= $pemeriksaan['NIK'] ?></td>
                            <td><?= $pemeriksaan['nama_pasien'] ?></td>
                            <td><?= $pemeriksaan['no_hp'] ?></td>
                            <td><?= $pemeriksaan['nama_lengkap'] ?></td>
                            <td><?= $pemeriksaan['tggl_periksa'] ?></td>
                            <td><?= $pemeriksaan['diagnosa'] ?></td>
                            <td>
                                <a href="#" class="btn btn-outline-success">Masuk</a>
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