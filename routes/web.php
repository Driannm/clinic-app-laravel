<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', function () {
    return view('Auth/login');
});

Route::get('register', function () {
    return view('Auth/register');
});

Route::get('forgot', function () {
    return view('Auth/forgot_password');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('dashboard', function () {
    return view('dashboard');
});


Route::resource('pasien', PasienController::class);

Route::get('profil', [ProfileController::class, 'index']);
Route::get('profil/create', [ProfileController::class, 'create'])->name('profil.create');
Route::get('profil/{nama}/{id}/edit', [ProfileController::class, 'edit']);

Route::get('dokter', [DokterController::class, 'index']);
Route::get('dokter/{id}', [DokterController::class, 'show']);
Route::get('dokter/create', [DokterController::class, 'create']);
Route::get('dokter/{id}/edit', [DokterController::class, 'edit']);