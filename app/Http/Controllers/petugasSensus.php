<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class petugasSensus extends Controller
{
    function index(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        $data_pemeriksaan = Pemeriksaan::select('pemeriksaans.*', 'data_pasiens.nama_pasien', 'data_pasiens.jenis_kelamin', 'data_pasiens.tggl_lahir',
            'data_pasiens.alamat', 'data_pasiens.no_hp', 'logins.nama_lengkap')
            ->join('data_pasiens', 'pemeriksaans.NO_RM', '=', 'data_pasiens.NO_RM')
            ->join('logins', 'pemeriksaans.id_dokter', '=', 'logins.id')
            ->where('pemeriksaans.status', '=', 'SELESAI')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('pemeriksaans.tggl_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })
            ->get();

        return view('sensus.index', [
            'data_pemeriksaan' => $data_pemeriksaan
        ]);
    }

    function cetakLaporan()
    {
        $data_pemeriksaan = Pemeriksaan::select('pemeriksaans.*', 'data_pasiens.nama_pasien', 'data_pasiens.jenis_kelamin', 'data_pasiens.tggl_lahir',
        'data_pasiens.alamat', 'data_pasiens.no_hp', 'logins.nama_lengkap')
            ->join('data_pasiens', 'pemeriksaans.NO_RM', '=', 'data_pasiens.NO_RM')
            ->join('logins', 'pemeriksaans.id_dokter', '=', 'logins.id')
            ->where('pemeriksaans.status', '=', 'SELESAI')
            ->get();

        return view('sensus.cetakLaporan', [
            'data_pemeriksaan' => $data_pemeriksaan
        ]);
    }

    function filter(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');

        $data_pemeriksaan = Pemeriksaan::select('pemeriksaans.*', 'data_pasiens.nama_pasien', 'data_pasiens.jenis_kelamin', 'data_pasiens.tggl_lahir',
            'data_pasiens.alamat', 'data_pasiens.no_hp', 'logins.nama_lengkap')
            ->join('data_pasiens', 'pemeriksaans.NO_RM', '=', 'data_pasiens.NO_RM')
            ->join('logins', 'pemeriksaans.id_dokter', '=', 'logins.id')
            ->where('pemeriksaans.status', '=', 'SELESAI')
            ->when($tgl_awal && $tgl_akhir, function ($query) use ($tgl_awal, $tgl_akhir) {
                $query->whereBetween('pemeriksaans.tanggal_pemeriksaan', [$tgl_awal, $tgl_akhir]);
            })
            ->get();

        return view('sensus.index', [
            'data_pemeriksaan' => $data_pemeriksaan
        ]);
    }
}
