<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <h5 class="card-header">Edit Petugas</h5>
        <!-- Account -->
        <div class="card-body">
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form action="http://localhost/klinik_kesehatan/public/dataPetugas/editPetugas/<?= $data['petugas']['id_login'] ?>" id="formAccountSettings" method="POST">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Nama Petugas</label>
                        <input class="form-control" type="text" id="firstName" name="nama_lengkap" value="<?= $data['petugas']['nama_lengkap'] ?>" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Jenis Kelamin</label>
                        <select id="country" class="select2 form-select" name="jenis_kelamin">
                            <option value=""><-- Pilih Jenis Kelamin --></option>
                            <option value="Laki - Laki" <?= ($data['petugas']['jenis_kelamin'] == 'Laki - Laki') ? 'selected' : '' ?>>Laki - Laki</option>
                            <option value="Perempuan" <?= ($data['petugas']['jenis_kelamin'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" id="email" name="email" value="<?= $data['petugas']['email'] ?>" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="organization" class="form-label">Password</label>
                        <input type="text" class="form-control" id="organization" name="password" value="<?= $data['petugas']['password'] ?>" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Alamat</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="phoneNumber" name="alamat" class="form-control" value="<?= $data['petugas']['alamat'] ?>" />
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="address" name="no_hp" value="<?= $data['petugas']['no_hp'] ?>" />
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a href="http://localhost/klinik_kesehatan/public/dataPetugas" class="btn btn-outline-danger">Kembali</a>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>
</div>