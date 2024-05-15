<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function index()
    {
        return view('login.index');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => "Email harus diisi",
            'email.email' => "Format email tidak valid",
            'password.required' => "Password harus diisi",
        ]);

        $cekLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($cekLogin)) {
            if (Auth::user()->role == 'dokter') {
                return redirect()->route('dashboardDokter.index');
            } else if (Auth::user()->role == 'petugas') {
                return redirect()->route('dashboardPetugas.index');
            } else if (Auth::user()->role == 'petugas_sensus') {
                return redirect()->route('sensus.index');
            } else {
                return redirect('/')->withErrors('Email dan password yang anda masukkan tidak sesuai')->withInput();
            }
        } else {
            return redirect('/')->withErrors('Email dan password yang anda masukkan tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
