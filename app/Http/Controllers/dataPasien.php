<?php

namespace App\Http\Controllers;

use App\Models\DataPasien as ModelsDataPasien;
use Illuminate\Http\Request;

class dataPasien extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('petugas.dataPasien.index', [
            'judul' => 'Data Pasien',
            'data' => ModelsDataPasien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.dataPasien.create', [
            'judul' => 'Data Pasien'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // dd(ModelsDataPasien::create($request->all()));
        $lastPatient = ModelsDataPasien::orderBy('created_at', 'desc')->first();
        $lastId = $lastPatient ? intval(substr($lastPatient->NO_RM, 2)) : 0;
        $nextId = str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'nama_pasien' => 'required|max:30',
            'tggl_lahir' => 'required',
            'jenis_kelamin' => 'required|max:15',
            'agama' => 'required|max:10',
            'status' => 'required|max:20',
            'pendidikan_terakhir' => 'required|max:20',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:13',
        ]);
        $validatedData['NO_RM'] = 'RM' . $nextId; // Menggunakan RM + nomor urut
        ModelsDataPasien::create($validatedData);
        return redirect()->route('dataPasien.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsDataPasien::where('NO_RM', $id)->first();
        return view('petugas.dataPasien.update', [
            'judul' => 'Edit Pasien',
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|max:16',
            'nama_pasien' => 'required|max:30',
            'tggl_lahir' => 'required',
            'jenis_kelamin' => 'required|max:15',
            'agama' => 'required|max:10',
            'status' => 'required|max:20',
            'pendidikan_terakhir' => 'required|max:20',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:13',
        ]);

        $dataPasien = ModelsDataPasien::where('NO_RM', $id)->firstOrFail();
        $dataPasien->update($validatedData);

        return redirect()->route('dataPasien.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelsDataPasien::where('NO_RM', $id)->delete();
        return redirect()->route('dataPasien.index')->with('success', 'Data berhasil dihapus');
    }
}
