@extends('auth.app_auth')

@section('title', 'Register')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card px-sm-6 px-0">
          <div class="card-body">
             <!-- Logo -->
             <div class="app-brand justify-content-center">
                <a href="login" class="app-brand-link gap-2">
                    <img src="../assets/img/favicon/favicon.ico" width="50" alt="">
                  <span class="app-brand-text demo text-heading fw-bold">Berkah Jaya</span>
                </a>
              </div>
              <!-- /Logo -->
            <h4 class="mb-1">Kemudahan Dimulai dari sini🚀</h4>
            <p class="mb-6">Daftar untuk memulai menggunakan fasilitas kami</p>

            <form id="formAuthentication" class="mb-6" action="index.html">
              <div class="mb-6">
                <label for="username" class="form-label">Nama Pengguna</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  placeholder="Masukan Nama Pengguna"
                  autofocus />
              </div>
              <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email Anda" />
              </div>
              <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Kata Sandi</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="my-8">
                <div class="form-check mb-0 ms-2">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                  <label class="form-check-label" for="terms-conditions">
                    Saya setuju
                    <a href="javascript:void(0);">kebijakan privasi & ketentuan</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">Daftar</button>
            </form>

            <p class="text-center">
              <span>Sudah memiliki akun?</span>
              <a href="/login">
                <span>Log In disini</span>
              </a>
            </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
@endsection