<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class dashboardDokter extends Controller
{
    public function index()
    {
        $jumlahDokter = Login::where('role', 'dokter')->count();
        $jumPasienBelumSelesai = Pemeriksaan::where('status', 'ANTRI')->count();
        $jumPasienSudahSelesai = Pemeriksaan::where('status', 'SELESAI')->count();
        $data_pemeriksaan = Pemeriksaan::select(
            'pemeriksaans.*',
            'data_pasiens.nama_pasien',
            'data_pasiens.jenis_kelamin',
            'data_pasiens.tggl_lahir',
            'data_pasiens.tggl_lahir',
            'data_pasiens.alamat',
            'data_pasiens.no_hp',
            'logins.nama_lengkap'
        )
            ->join('data_pasiens', 'pemeriksaans.NO_RM', '=', 'data_pasiens.NO_RM')
            ->join('logins', 'pemeriksaans.id_dokter', '=', 'logins.id')
            ->where('pemeriksaans.status', '=', 'ANTRI')
            ->get();

        return view('dokter.dashboardDokter.index', [
            'active' => 'dashboardDokter',
            'judul' => 'Dashboard Dokter',
            'jumlahDokter' => $jumlahDokter,
            'jumlahPasienSelesai' => $jumPasienSudahSelesai,
            'jumlahPasienBelumSelesai' => $jumPasienBelumSelesai,
            'data_pemeriksaan' => $data_pemeriksaan,
        ]);
    }

    public function tampilanTambah(string $id)
    {
        $data = Pemeriksaan::select(
            'pemeriksaans.*',
            'data_pasiens.nama_pasien',
            'data_pasiens.jenis_kelamin',
            'data_pasiens.tggl_lahir',
            'data_pasiens.tggl_lahir',
            'data_pasiens.alamat',
            'data_pasiens.no_hp',
            'logins.nama_lengkap'
        )
            ->join('data_pasiens', 'pemeriksaans.NO_RM', '=', 'data_pasiens.NO_RM')
            ->join('logins', 'pemeriksaans.id_dokter', '=', 'logins.id')
            ->where('pemeriksaans.id', $id)
            ->first();

        return view('dokter.dashboardDokter.create', [
            'judul' => 'Data Pasien',
            'data' => $data,
        ]);
    }

    public function diagnosa(Request $request, string $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'diagnosa' => 'required',
            'code' => 'required',
            'resep_obat' => 'required',
            'status' => 'required|max:30'
        ]);

        Pemeriksaan::findOrFail($id)->update($validatedData);
        return redirect()->route('dashboardDokter.index')->with('success', 'Data berhasil diupdate');
    }
}
