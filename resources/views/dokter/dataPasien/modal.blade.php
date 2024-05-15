<!-- Modal -->

@foreach ($data as $pasien)
<div class="col-lg-4 col-md-3">
    <!-- Modal -->
    <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <p><b>No RM :</b> {{ $pasien->NO_RM }}</p>
                        <p><b>NIK :</b> {{ $pasien->NIK }}</p>
                        <p><b>Nama Pasien :</b> {{ $pasien->nama_pasien }}</p>
                        <p><b>tggl_lahir :</b> {{ $pasien->tggl_lahir }}</p>
                        <p><b>Jenis Kelamin :</b> {{ $pasien->jenis_kelamin }}</p>
                        <p><b>Status :</b> {{ $pasien->status }}</p>
                        <p><b>Pendidikan Terakhir :</b> {{ $pasien->pendidikan_terakhir }}</p>
                        <p><b>Alamat :</b> {{ $pasien->alamat }}</p>
                        <p><b>No Hp :</b> {{ $pasien->no_hp }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
