<?php

use App\Http\Controllers\dataDokter;
use App\Http\Controllers\dataPasien;
use App\Http\Controllers\dataPetugas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardDokter;
use App\Http\Controllers\dashboardPetugas;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dataDokterController;
use App\Http\Controllers\DataPasienController;
use App\Http\Controllers\pemeriksaan;
use App\Http\Controllers\petugasSensus;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login']);
});

Route::prefix('dokter')->group(
    function () {
        Route::get('/', function () {
            return view('dokter.layout');
        });
        Route::get('/logout', [loginController::class, 'logout'])->name('logout');
        Route::get('/', [dashboardDokter::class, 'index'])->name('dashboardDokter.index');
        Route::get('/dataPasien/{id}', [dashboardDokter::class, 'tampilanTambah'])->name('dashboardDokter.create');
        Route::put('/dataPasien/{id}/kirm', [dashboardDokter::class, 'diagnosa'])->name('dashboardDokter.kirm');
        Route::resource('dataDokter', dataDokter::class);
        Route::resource('dataPetugas', dataPetugas::class);
        Route::get('/dataPasien', [DataPasienController::class, 'index'])->name('dataPasienDokter.index');
        Route::get('/home', function () {
            return redirect('/login');
        });
    }
);

Route::prefix('petugas')->middleware('auth')->group(
    function () {
        Route::get('/', function () {
            return view('petugas.layout');
        });
        Route::get('/logout', [loginController::class, 'logout'])->name('logout');
        Route::get('/', [dashboardPetugas::class, 'index'])->name('dashboardPetugas.index');
        Route::resource('dataPasien', dataPasien::class);
        Route::get('/pemeriksaan', [pemeriksaan::class, 'index'])->name('pemeriksaan.index');
        Route::get('/pemeriksaan/create', [pemeriksaan::class, 'create'])->name('pemeriksaan.create');
        Route::post('/pemeriksaan/store', [pemeriksaan::class, 'store'])->name('pemeriksaan.store');
        Route::post('/getNamaPasien', [pemeriksaan::class, 'getNamaPasien'])->name('getNamaPasien');
        Route::get('/pemeriksaan/cetakAntrian{nomorAntrian}', [pemeriksaan::class, 'cetakAntrian'])->name('pemeriksaan.cetakAntrian');
        // Route::post('/getAllDokter', [pemeriksaan::class, 'getNo_hp'])->name('getNo_hp');
        Route::get('/home', function () {
            return redirect('/login');
        });
    }
);

Route::middleware('auth')->group(function () {
    Route::get('/petugasSensus', [petugasSensus::class, 'index'])->name('sensus.index');
    Route::get('/petugasSensus/cetakLaporan', [petugasSensus::class, 'cetakLaporan'])->name('sensus.cetakLaporan');
    Route::get('/petugasSensus/filter', [petugasSensus::class, 'filter'])->name('sensus.filter');
});
