@extends('app', ['title' => 'Pendaftaran Pasien'])
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold">PENDAFTARAN PASIEN</h5>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('success') }}
                        <button type="button" id="session-close-btn" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                @include('flash::message')

                <form action="/daftar/create" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
                        <input type="date" name="tanggal_daftar" class="form-control"
                            value="{{ old('tanggal_daftar') ?? date('Y-m-d') }}">
                        <span class="text-danger">{{ $errors->first('tanggal_daftar') }}</span>
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="pasien_id" class="form-label">Nama Pasien</label>
                        <select name="pasien_id" class="form-control select2">
                            <option value="">-- Pilih Pasien --</option>
                            @foreach ($listPasien as $item)
                                <option value="{{ $item->id }}" @selected(old('pasien_id') == $item->id)>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('pasien_id') }}</span>
                    </div>
                    
                    {{-- Poli --}}
                    <div class="form-group mt-3">
                        <label for="poli_id" class="form-label">Poli</label>
                        <select name="poli_id" class="form-control select2">
                            <option value="">-- Pilih Poli --</option>
                            @foreach ($listPoli as $item)
                                <option value="{{ $item->id }}" @selected(old('poli_id') == $item->id)>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('poli') }}</span>
                    </div>

                    {{-- Keluhan --}}
                    <div class="form-group mt-3 mb-3">
                        <label for="keluhan" class="form-label">Keluhan</label>
                        <textarea name="keluhan" rows="2" class="form-control">{{ old('keluhan') }}</textarea>
                        <span class="text-danger">{{ $errors->first('keluhan') }}</span>
                    </div>

                    {{-- Dokter --}}
                    <div class="form-group mt-3 mb-3">
                        <label for="dokter_id" class="form-label">Dokter</label>
                        <select name="dokter_id" class="form-control select2">
                            <option value="">-- Pilih Dokter --</option>
                            @foreach ($listDokter as $item)
                                <option value="{{ $item->id }}" @selected(old('dokter_id') == $item->id)>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('poli') }}</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Pilih salah satu",
                allowClear: true
            });
        });
    </script>
@endsection
