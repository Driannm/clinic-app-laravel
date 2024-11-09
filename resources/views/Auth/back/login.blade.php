@extends('auth.app_auth')

@section('title', 'Login')

@section('content')
    <div class="app-brand justify-content-center">
        <a href="login" class="app-brand-link gap-2">
            <img src="../assets/img/favicon/favicon.ico" width="50" alt="">
            <span class="app-brand-text demo text-heading fw-bold">Berkah Jaya</span>
        </a>
    </div>
    <!-- /Logo -->
    <h4 class="mb-1">Selamat Datang di,
        Klinik Berkah Jaya!👋</h4>
    <p class="mb-6">Silahkan masuk menggunakan akun anda untuk mulai menggunakan fasilitas kami</p>

    <form id="formAuthentication" class="mb-6" action="index.html">
        <div class="mb-6">
            <label for="email" class="form-label">Email atau Nama Pengguna</label>
            <input type="text" class="form-control" id="email" name="email-username"
                placeholder="Masukan Email atau Nama Pengguna<" autofocus />
        </div>
        <div class="mb-6 form-password-toggle">
            <label class="form-label" for="password">Kata Sandi</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-8">
            <div class="d-flex justify-content-between mt-8">
                <div class="form-check mb-0 ms-2">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Ingat Saya </label>
                </div>
                <a href="/forgot">
                    <span>Lupa Kata Sandi?</span>
                </a>
            </div>
        </div>
        <div class="mb-6">
            <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
        </div>
    </form>

    <p class="text-center">
        <span>Belum memiliki akun?</span>
        <a href="/register">
            <span>Buat akun anda disini</span>
        </a>
    </p>
@endsection
