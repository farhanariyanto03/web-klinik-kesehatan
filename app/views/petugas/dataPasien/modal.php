    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="modalScrollable<?= $pasien['id_pasien'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <p><B>Nama: </B><?= $d['nama_lengkap'] ?></p>
                        <p><b>Kamar: </b><?= $d['id_kamar'] ?></p>
                        <p><b>No Hp: </b><?= $d['no_hp'] ?></p>
                        <p><B>Alamat: </B><?= $d['alamat'] ?></p>
                        <p><b>Email: </b><?= $d['email'] ?></p>
                        <p><b>Email: </b><?= $d['jenis_kelamin'] ?></p>
                        <p><b>Tanggal Lahir: </b><?= $d['tggl_lahir'] ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>