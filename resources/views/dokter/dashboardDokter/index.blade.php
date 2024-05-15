@extends('dokter.layout')

@section('conten')
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
                        <img src="{{ asset('admin') }}/img/illustrations/man-with-laptop-light.png" height="140"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
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
                                <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah Dokter</span>
                        <h3 class="card-title mb-2">{{ $jumlahDokter }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah pasien selesai diperiksa</span>
                        <h3 class="card-title mb-2">{{ $jumlahPasienSelesai }}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('admin') }}/img/icons/unicons/chart-success.png" alt="chart success"
                                    class="rounded" />
                            </div>
                        </div>
                        <span class="fw-semibold d-block mb-1">Jumlah pasien Belum diperiksa</span>
                        <h3 class="card-title mb-2">{{ $jumlahPasienBelumSelesai }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="col-md-6e p-1">
                <div class="card-body bg-white p-2" style="border-radius: 18px;">
                    <table class="table table-hover large" id="myTable">
                        <thead>
                            <tr>
                                <th>No Antrian</th>
                                <th>No RM</th>
                                <th>Nama Pasien</th>
                                <th>Dokter</th>
                                <th>Tanggal Pemeriksaan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($data_pemeriksaan as $pemeriksaan)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong><?= $pemeriksaan['no_antrian'] ?></strong>
                                    </td>
                                    <td><?= $pemeriksaan['NO_RM'] ?></td>
                                    <td><?= $pemeriksaan['nama_pasien'] ?></td>
                                    <td><?= $pemeriksaan['nama_lengkap'] ?></td>
                                    <td><?= $pemeriksaan['tggl_pemeriksaan'] ?></td>
                                    <td><?= $pemeriksaan['status'] ?></td>
                                    <td>
                                        <a href="{{ route('dashboardDokter.create', $pemeriksaan->id) }}" class="btn btn-icon btn-outline-warning">
                                            <i class='bx bxs-pencil'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@include('dokter.dashboardDokter.modal')
@endsection
