<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanPasienController;
use App\Http\Controllers\LaporanDaftarController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware([Authenticate::class]) -> group(function () {
    // Route::resource('pasien', PasienController::class);
    Route::resource('daftar', DaftarController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('laporan-pasien', LaporanPasienController::class);
    Route::resource('laporan-daftar', LaporanDaftarController::class);
    Route::get('/jadwal', [DokterController::class, 'jadwal'])->name('dokter.jadwal');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});

Route::middleware(['auth']) -> group(function () {
    Route::resource('pasien', PasienController::class)->except('destroy');
});

Route::middleware(['auth', 'auth.admin']) -> group(function () {
    Route::resource('pasien', PasienController::class)->only('destroy');
});

Route::post('/daftar/create', [DaftarController::class, 'store'])->name('daftar.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/download-data-pasien', [PasienController::class, 'downloadData'])->name('downloadDataPasien');
Route::get('/download-data-daftar', [DaftarController::class, 'downloadDataDaftar'])->name('downloadDataDaftar');



