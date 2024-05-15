@extends('petugas.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Pemeriksaan</h5>
            <!-- Account -->
            <div class="card-body">
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <form id="formAccountSettings" method="POST" action="{{ route('pemeriksaan.store') }}">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">No Antrian</label>
                            <input class="form-control" type="text" id="no_antrian" name="no_antrian" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">NO RM</label>
                            <select class="form-select" id="NO_RM" aria-label="Default select example" name="NO_RM"
                                onchange="getNamaPasien(this.value)">
                                <option selected disabled><--- Pilih NO RM ---></option>
                                @foreach ($data_pasien as $pasien)
                                    <option value="{{ $pasien->NO_RM }}">{{ $pasien->NO_RM }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nama Pasien</label>
                            <input class="form-control" type="text" id="nama_pasien" name="" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Jenis Kelamin</label>
                            <input class="form-control" type="text" id="jenis_kelamin" name="" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">tggl_lahir</label>
                            <input class="form-control" type="text" id="tggl_lahir" name="" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Alamat</label>
                            <div class="input-group input-group-merge">
                                <input type="text" id="alamat" name="" class="form-control" readonly />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="no_hp" name="" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">ID Dokter</label>
                            <select class="form-select" id="nama_dokter" aria-label="Default select example" name="id_dokter">
                                <option selected disabled><--- Pilih Id Dokter ---></option>
                                @foreach ($data_dokter as $dokter)
                                    <option value="{{ $dokter->id }}">{{ $dokter->nama_lengkap }}</option> <!-- Gunakan ID dokter, bukan nama_lengkap -->
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="hidden" class="form-control" id="no_hp" name="status" value="ANTRI"/>
                        </div>
                        {{-- <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="no_hpDokter" name="no_hp" readonly />
                        </div> --}}
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a href="{{ route('dataDokter.index') }}" class="btn btn-outline-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getNamaPasien() {
            var selectedNO_RM = $('#NO_RM').val();
            $.ajax({
                url: "{{ route('getNamaPasien') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    NO_RM: selectedNO_RM
                },
                success: function(response) {
                    $('#nama_pasien').val(response.nama_pasien);
                    $('#jenis_kelamin').val(response.jenis_kelamin);
                    $('#tggl_lahir').val(response.tggl_lahir);
                    $('#alamat').val(response.alamat);
                    $('#no_hp').val(response.no_hp);
                }
            });
        }
    </script>
    {{-- <script>
        function getNo_hp(selectedNama_dokter) {
            $.ajax({
                url: "{{ route('getNo_hp') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    nama_dokter: selectedNama_dokter
                },
                success: function(response) {
                    $('#no_hpDokter').val(response.no_hp);
                }
            });
        }
    </script> --}}
@endsection
