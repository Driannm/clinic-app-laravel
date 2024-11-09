<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanPasienController;
use App\Http\Controllers\LaporanDaftarController;


Route::middleware([Authenticate::class]) -> group(function () {
    Route::resource('pasien', PasienController::class);
    Route::resource('daftar', DaftarController::class);
    Route::resource('laporan-pasien', LaporanPasienController::class);
    Route::resource('laporan-daftar', LaporanDaftarController::class);
});

Route::post('/daftar/create', [DaftarController::class, 'store'])->name('daftar.store');
Route::get('/download-data-pasien', [PasienController::class, 'downloadData'])->name('downloadDataPasien');
Route::get('/download-data-daftar', [DaftarController::class, 'downloadDataDaftar'])->name('downloadDataDaftar');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
