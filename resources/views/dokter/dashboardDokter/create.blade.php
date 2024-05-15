@extends('dokter.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Data Pasien</h5>
            <!-- Account -->
            <div class="card-body">
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <form id="formAccountSettings" method="POST" action="{{ route('dashboardDokter.kirm', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">No Antrian</label>
                            <input class="form-control" type="text" id="no_antrian" name="no_antrian" value="{{ $data->no_antrian }}" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">NO RM</label>
                            <input class="form-control" type="text" name="NO_RM" value="{{ $data->NO_RM }}" readonly />
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nama Pasien</label>
                            <input class="form-control" type="text" name="nama_pasien" value="{{ $data->nama_pasien }}" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Jenis Kelamin</label>
                            <input class="form-control" type="text" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">tggl_lahir</label>
                            <input class="form-control" type="text" name="tggl_lahir" value="{{ $data->tggl_lahir }}" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Alamat</label>
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="text" name="alamat" value="{{ $data->alamat }}" readonly />
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">No HP</label>
                            <input class="form-control" type="text" name="no_hp" value="{{ $data->no_hp }}" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Nama Dokter</label>
                            <input class="form-control" type="text" name="dokter" value="{{ $data->nama_lengkap }}" readonly />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Diagnosa</label>
                            <textarea class="form-control" id="diagnosa" name="diagnosa"></textarea>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Code</label>
                            <input class="form-control" type="text" name="code" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Resep Obat</label>
                            <input class="form-control" type="text" name="resep_obat" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <input type="hidden" class="form-control" id="no_hp" name="status" value="SELESAI"/>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            <a href="{{ route('dashboardDokter.index') }}" class="btn btn-outline-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
