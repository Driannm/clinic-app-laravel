@extends('Auth.auth_app', ['title' => 'Login'])
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card px-sm-6 px-0">
                    <div class="card-body">

                        {{-- Logo --}}
                        <div class="app-brand justify-content-center">
                            <a href="login" class="app-brand-link gap-2">
                                <img src="../assets/img/favicon/favicon.ico" width="50" alt="">
                                <span class="app-brand-text demo text-heading fw-bold">Berkah Jaya</span>
                            </a>
                        </div>
                        {{-- Logo --}}

                        <!-- Description -->
                        <h4 class="mb-1">Selamat Datang di,
                            Klinik Berkah Jaya!👋</h4>
                        <p class="mb-6">Silahkan masuk menggunakan akun anda untuk mulai menggunakan fasilitas kami</p>
                        {{-- Description --}}

                        <form class="mb-6" id="formAuthentication" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="text" class="form-control" 
                                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                        placeholder="Masukan Email Anda.." autofocus />

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">Kata Sandi</label>
                                <div class="input-group input-group-merge">
                                    <input id="password" type="password" class="form-control" 
                                        @error('password') is-invalid @enderror" name="password" required
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        autocomplete="current-password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="mb-8">
                                <div class="d-flex justify-content-between align-items-center mt-8">
                                    <div class="form-check mb-0 ms-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Ingat Saya') }}
                                        </label>
                                    </div>
                            
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                            {{ __('Lupa Kata Sandi?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                            </div>

                            <p class="text-center">
                                <span>Belum memiliki akun?</span>
                                <a href="/register">
                                    <span>Buat akun anda disini</span>
                                </a>
                            </p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
