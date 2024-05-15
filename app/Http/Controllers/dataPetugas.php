<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;

class dataPetugas extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPetugas = Login::where('role', 'petugas')->get();

        return view('dokter.dataPetugas.index', [
            'judul' => 'Data Petugas',
            'data' => $dataPetugas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokter.dataPetugas.create', [
            'judul' => 'Tambah Petugas'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:30',
            'jenis_kelamin' => 'required|max:20',
            'email' => 'required|max:50',
            'password' => 'required|max:8',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:13',
            'role' => 'required|max:20',
        ]);

        // $validatedData['role'] = 'dokter';

        Login::create($validatedData);

        $user = new User();
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->role = 'petugas';

        $user->save();

        return redirect()->route('dataPetugas.index')->with('success', 'Data berhasil ditambahkan');
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
        $data = Login::where('id', $id)->first();
        return view('dokter.dataPetugas.update', [
            'judul' => 'Edit Petugas'
        ])->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:30',
            'jenis_kelamin' => 'required|max:20',
            'email' => 'required|max:50',
            'password' => 'required|max:8',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:13',
            'role' => 'required|max:20',
        ]);

        Login::findOrFail($id)->update($validatedData);

        return redirect()->route('dataPetugas.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Login::where('id', $id)->delete();
        return redirect()->route('dataPetugas.index')->with('success', 'Data berhasil dihapus');
    }
}
