@extends('Auth.auth_app', ['title' => 'Register'])

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

                        <!-- Description -->
                        <h4 class="mb-1">Kemudahan Dimulai dari sini🚀</h4>
                        <p class="mb-6">Daftar untuk memulai menggunakan fasilitas kami</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Nama -->
                            <div class="mb-6">
                                <label for="username" class="form-label">Nama Anda</label>
                                <input id="name" type="text" class="form-control"
                                    @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus placeholder="Masukan Nama Anda" />

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control"
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" placeholder="Masukan Email Anda" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Kata Sandi -->
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Kata Sandi</label>

                                <div class="input-group input-group-merge">
                                    <input id="password" type="password" class="form-control"
                                        @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="new-password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />

                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Konfirmasi Kata Sandi -->
                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Konfirmasi Kata Sandi</label>

                                <div class="input-group input-group-merge">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <!-- S&K -->
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

                        <!-- Login -->
                        <p class="text-center mt-8">
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
