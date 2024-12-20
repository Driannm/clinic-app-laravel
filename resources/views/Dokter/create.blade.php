@extends('app', ['title' => 'Tambah Dokter'])
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Custom file input -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Tambah Data Dokter</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <form action="/pasien" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            {{-- Unggah Foto --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="nama" class="form-label">Foto Dokter (jpg, jpeg, png)</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto"
                                    name="foto" value="{{ old('foto') }}">
                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                            </div>

                            {{-- No Dokter --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="no_dokter" class="form-label">No Dokter</label>
                                <input type="number" class="form-control @error('no_dokter') is-invalid @enderror" placeholder="No Dokter" id="no_dokter" name="no_dokter" value="{{ old('no_dokter') }}">
                                <span class="text-danger">{{ $errors->first('no_dokter') }}</span>
                            </div>

                            {{-- Nama Pasien --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="nama" class="form-label">Nama Dokter</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Dokter" id="nama" name="nama" value="{{ old('nama') }}">
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            </div>
                            
                            {{-- Umur Pasien --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="number" class="form-control @error('umur') is-invalid @enderror" placeholder="Umur Dokter" id="umur" name="umur" value="{{ old('umur') }}">
                                <span class="text-danger">{{ $errors->first('umur') }}</span>
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-Laki"
                                        {{ old('jenis_kelamin') === 'Laki-Laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan"
                                        {{ old('jenis_kelamin') === 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                            </div>

                            {{-- Kategori Dokter --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="kategori" class="form-label">Spesialisasi</label>
                                <input type="text" class="form-control @error('kategori') is-invalid @enderror" placeholder="Spesialisasi Dokter" id="kategori" name="kategori" value="{{ old('kategori') }}">
                                <span class="text-danger">{{ $errors->first('kategori') }}</span>
                            </div>

                            {{-- Keahlian Dokter --}}
                            <div class="form-group mt-1 mb-4">
                                <label for="keahlian" class="form-label">Keahlian</label>
                                <input type="text" class="form-control @error('keahlian') is-invalid @enderror" placeholder="Keahlian Dokter" id="keahlian" name="keahlian" value="{{ old('keahlian') }}">
                                <span class="text-danger">{{ $errors->first('keahlian') }}</span>
                            </div>

                            <button type="submit" class="btn btn-success mt-1 mb-2">Simpan</button>
                            <a href="/dokter" class="btn btn-outline-dark ms-2 mt-1 mb-2">Kembali</a>

                            @if (session()->has('pesan'))
                                <div class="alert alert-info content-wrapper mt-1 mb-2" role="alert">
                                    {{ session('pesan') }}
                                </div>
                            @endif
                            @include('flash::message')
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection