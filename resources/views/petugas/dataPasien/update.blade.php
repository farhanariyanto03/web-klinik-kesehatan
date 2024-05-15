@extends('dokter.layout')

@section('conten')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Edit Petugas</h5>
            <!-- Account -->
            <div class="card-body">
                <hr class="my-0" />
            <form id="formAccountSettings" method="POST" action="{{ route('dataPasien.update', $data->NO_RM) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">NIK</label>
                        <input class="form-control" type="text" id="firstName" name="NIK" value="{{ $data->NIK }}" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Nama Pasien</label>
                        <input class="form-control" type="text" id="firstName" name="nama_pasien" value="{{ $data->nama_pasien }}" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="date" id="firstName" name="tggl_lahir" value="{{ $data->tggl_lahir }}" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Jenis Kelamin</label>
                        <select id="country" class="select2 form-select" name="jenis_kelamin">
                            <option value=""><-- Pilih Jenis Kelamin --></option>
                            <option value="Laki - Laki" {{ $data->jenis_kelamin == "Laki - Laki" ? 'selected' : ''}}>Laki - Laki</option>
                            <option value="Perempuan" {{ $data->jenis_kelamin == "Perempuan" ? 'selected' : ''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Agama</label>
                        <select id="country" class="select2 form-select" name="agama">
                            <option value=""><-- Pilih Agama --></option>
                            <option value="Islam" {{ $data->agama == "Islam" ? 'selected' : ''}}>Islam</option>
                            <option value="Kristen" {{ $data->agama == "Kristen" ? 'selected' : ''}}>Kristen</option>
                            <option value="Khatolik" {{ $data->agama == "Khatolik" ? 'selected' : ''}}>Khatolik</option>
                            <option value="Hindu" {{ $data->agama == "Hindu" ? 'selected' : ''}}>Hindu</option>
                            <option value="Budha" {{ $data->agama == "Budha" ? 'selected' : ''}}>Budha</option>
                            <option value="Konghucu" {{ $data->agama == "Konghucu" ? 'selected' : ''}}>Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="country">Status</label>
                        <select id="country" class="select2 form-select" name="status">
                            <option value=""><-- Pilih Status --></option>
                            <option value="Belum Nikah" {{ $data->status == "Belum Nikah" ? 'selected' : ''}}>Belum Nikah</option>
                            <option value="Sudah Nikah" {{ $data->status == "Sudah Nikah" ? 'selected' : ''}}>Sudah Nikah</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">Pendidikan Terakhir</label>
                        <input class="form-control" type="text" id="firstName" name="pendidikan_terakhir" value="{{ $data->pendidikan_terakhir }}" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phoneNumber">Alamat</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="phoneNumber" name="alamat" value="{{ $data->alamat }}" class="form-control"/>
                        </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="address" name="no_hp" value="{{ $data->no_hp }}" />
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a href="{{ route('dataPasien.index') }}" class="btn btn-outline-danger">Kembali</a>
                </div>
            </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection
