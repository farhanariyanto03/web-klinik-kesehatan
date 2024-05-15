<?php

namespace App\Http\Controllers;
use App\Models\DataPasien;
use Illuminate\Http\Request;

class DataPasienController extends Controller
{
    public function index()
    {
        return view('dokter.dataPasien.index', [
            'judul' => 'Data Pasien',
            'data' => dataPasien::all()
        ]);
    }
}
