<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class dashboardPetugas extends Controller
{
    public function index() {
        $jumlahDokter = Login::where('role', 'dokter')->count();
        $jumPasienBelumSelesai = Pemeriksaan::where('status', 'ANTRI')->count();
        $jumPasienSudahSelesai = Pemeriksaan::where('status', 'SELESAI')->count();

        return view('petugas.dashboardPetugas.index', [
            'judul' => 'Dashboard Petugas',
            'jumlahDokter' => $jumlahDokter,
            'jumlahPasienSelesai' => $jumPasienSudahSelesai,
            'jumlahPasienBelumSelesai' => $jumPasienBelumSelesai,
        ]);
    }
}
