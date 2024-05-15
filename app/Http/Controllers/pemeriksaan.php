<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\DataPasien;
use App\Models\Pemeriksaan as ModelsPemeriksaan;
use Illuminate\Http\Request;

class pemeriksaan extends Controller
{
    public function index()
    {
        $data_pemeriksaan = ModelsPemeriksaan::select('pemeriksaans.*', 'data_pasiens.nama_pasien', 'logins.nama_lengkap')
            ->join('data_pasiens', 'pemeriksaans.NO_RM', '=', 'data_pasiens.NO_RM')
            ->join('logins', 'pemeriksaans.id_dokter', '=', 'logins.id')
            ->where('pemeriksaans.status', '=', 'ANTRI')
            ->get();

        return view('petugas.pemeriksaan.index', [
            'judul' => 'Pemeriksaan',
            'data_pemeriksaan' => $data_pemeriksaan
        ]);
    }

    public function create()
    {
        $data_pasien = DataPasien::all();
        $data_dokter = Login::where('role', 'dokter')->get();
        return view('petugas.pemeriksaan.create', [
            'judul' => 'Pemeriksaan',
            'data_pasien' => $data_pasien,
            'data_dokter' => $data_dokter
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'no_antrian' => 'required|max:5',
            'NO_RM' => 'required|max:6',
            'id_dokter' => 'required|max:20',
            'tggl_pemeriksaan' => 'date',
            'status' => 'required|string|max:30',
        ]);

        $validatedData['tggl_pemeriksaan'] = date('Y-m-d H:i:s');
        // $validatedData['status'] = 'ANTRI';
        ModelsPemeriksaan::create($validatedData);

        return redirect()->route('pemeriksaan.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function getNamaPasien(Request $request)
    {
        $NO_RM = $request->NO_RM;
        $data_pasien = DataPasien::where('NO_RM', $NO_RM)->first();
        return response()->json([
            'nama_pasien' => $data_pasien->nama_pasien,
            'jenis_kelamin' => $data_pasien->jenis_kelamin,
            'tggl_lahir' => $data_pasien->tggl_lahir,
            'no_hp' => $data_pasien->no_hp,
            'alamat' => $data_pasien->alamat,
        ]);
    }

    // public function getNo_hp(Request $request)
    // {
    //     $nama_dokter = $request->nama_dokter;
    //     $data_dokter = Login::where('nama_lengkap', $nama_dokter)->first();
    //     return response()->json([
    //         'no_hp' => $data_dokter->no_hp,
    //     ]);
    // }

    public function cetakAntrian($id)
    {
        $pemeriksaan = ModelsPemeriksaan::find($id);
        return view('petugas.pemeriksaan.cetakAntrian', [
            'pemeriksaan' => $pemeriksaan,
        ]);
    }
}
