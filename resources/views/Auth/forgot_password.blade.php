@extends('auth.app_auth')

@section('title', 'Forgot')

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Forgot Password -->
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
            <h4 class="mb-1">Lupa Kata Sandi? 🔒</h4>
            <p class="mb-6">Masukan Email Anda dan kami akan mengirim intruksi untuk mengubah kata sandi anda</p>
            <form id="formAuthentication" class="mb-6" action="index.html">
              <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Masukan Email Anda"
                  autofocus />
              </div>
              <button class="btn btn-primary d-grid w-100">Kirim Link Reset</button>
            </form>
            <div class="text-center">
              <a href="/login" class="d-flex justify-content-center">
                <i class="bx bx-chevron-left scaleX-n1-rtl me-1"></i>
                Kembali Masuk
              </a>
            </div>
          </div>
        </div>
        <!-- /Forgot Password -->
      </div>
    </div>
  </div>
@endsection