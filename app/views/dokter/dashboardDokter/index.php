<div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Selamat Datang! 🎉</h5>
                        <p class="mb-4">
                            Di puskesmas keliling, Semoga cepet sembuh dan mati ya tuhan memberkatimu
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="http://localhost/klinik_kesehatan/public/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="http://localhost/klinik_kesehatan/public/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Dokter</span>
                        <h3 class="card-title mb-2"><?= $data['total_dokter']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="http://localhost/klinik_kesehatan/public/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Petugas</span>
                        <h3 class="card-title mb-2"><?= $data['total_petugas']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="http://localhost/klinik_kesehatan/public/assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Pasien</span>
                        <h3 class="card-title mb-2"><?= $data['total_pasien']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
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
                                    <a href="#" class="btn btn-outline-danger">Selesai</a>
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
</div>