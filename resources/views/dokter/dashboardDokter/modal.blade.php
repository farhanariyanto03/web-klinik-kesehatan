{{-- <!-- Modal -->
@foreach ($data_pemeriksaan as $pemeriksaan)
    <div class="col-lg-4 col-md-3">
        <div class="modal fade" id="modalLong{{ $pemeriksaan->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <p><b>No Antrian :</b> {{ $pemeriksaan->no_antrian }}</p>
                            <p><b>No RM :</b> {{ $pemeriksaan->NO_RM }}</p>
                            <p><b>Nama Pasien :</b> {{ $pemeriksaan->nama_pasien }}</p>
                            <p><b>Jenis Kelamin :</b> {{ $pemeriksaan->jenis_kelamin }}</p>
                            <p><b>Tanggal Lahir :</b> {{ $pemeriksaan->tggl_lahir }}</p>
                            <p><b>Alamat:</b> {{ $pemeriksaan->alamat }}</p>
                            <p><b>no_hp:</b> {{ $pemeriksaan->no_hp }}</p>
                            <p><b>Tanggal Pemeriksaan :</b> {{ $pemeriksaan->tggl_pemeriksaan }}</p>
                            <div class="col mb-3">
                                <label for="nameBackdrop" class="form-label">Diagnosa</label>
                                <textarea class="form-control" id="diagnosa" name="diagnosa"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-phone">Code</label>
                                <input type="text" class="form-control" id="code" name="code">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}
