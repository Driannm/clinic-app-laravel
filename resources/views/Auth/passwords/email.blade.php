@extends('Auth.auth_app', ['title' => 'Reset Password'])
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card px-sm-6 px-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
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
                        <h4 class="mb-1 text-center fw-semibold">Lupa Kata Sandi?</h4>
                        <p class="mb-6 text-center">Jangan khawatir, Kami akan mengirimkan instruksi pengaturan ulang kepada Anda</p>
                        {{-- Description --}}

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="text" class="form-control" 
                                        @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                        placeholder="Masukan Email Anda.." autocomplete="email" autofocus />

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        
                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit">Kirim Tautan Reset Kata Sandi</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
