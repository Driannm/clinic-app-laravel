@extends('app', ['title' => 'Edit Dokter'])
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Custom file input -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold">EDIT DATA DOKTER : {{ ($dokter->nama) }}</h5>
                </div>
                <div class="card-body">
                    <form action="/dokter/{{ $dokter->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group mt-1 mb-3">
                            <label for="foto" class="form-label">Foto Dokter (jpg, jpeg, png)</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                        
                            @if ($dokter->foto)
                                <img src="{{ url('/') }}/uploads/{{ $dokter->foto }}" alt="Foto Pasien" class="img-thumbnail mt-2" style="width: 100px">
                            @else
                                <p class="mt-2 form-label text-danger">Tidak Ada Foto Dokter</p>
                            @endif
                        </div>
                        
                        <div class="form-group mt-1 mb-3">
                            <label for="nama" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') ?? $dokter->nama }}">
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
        
                        <div class="form-group mt-1 mb-3">
                            <label for="no_dokter"  class="form-label">Nomor Dokter</label>
                            <input type="text" class="form-control @error('no_dokter') is-invalid @enderror" id="no_dokter"
                                name="no_dokter" value="{{ old('no_dokter') ?? $dokter->no_dokter }}">
                            <span class="text-danger">{{ $errors->first('no_dokter') }}</span>
                        </div>
        
                        <div class="form-group mt-1 mb-3">
                            <label for="umur" class="form-label">Umur</label>
                            <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur"
                                name="umur" value="{{ old('umur') ?? $dokter->umur }}">
                            <span class="text-danger">{{ $errors->first('umur') }}</span>
                        </div>
        
                        <div class="form-group mt-1 mb-4">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-Laki"
                                    {{ old('jenis_kelamin') ?? $dokter->jenis_kelamin === 'Laki-Laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline mt-1">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan"
                                    {{ old('jenis_kelamin') ?? $dokter->jenis_kelamin === 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        </div>
                        
                        <div class="form-group mt-1 mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" value="{{ old('alamat') ?? $dokter->alamat }}">
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        </div>
                        
                        <div class="form-group mt-1 mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="kategori"
                                name="kategori" value="{{ old('kategori') ?? $dokter->kategori }}" disabled>
                        </div>
                        
                        <div class="form-group mt-1 mb-3">
                            <label for="keahlian" class="form-label">Spesialis</label>
                            <input type="text" class="form-control" id="keahlian"
                                name="keahlian" value="{{ old('keahlian') ?? $dokter->keahlian }}" disabled>
                        </div>
                        
                        <div class="form-group mt-1 mb-3">
                            <label for="jadwal_praktek" class="form-label">Jadwal Praktek</label>
                            <input type="text" class="form-control @error('jadwal_praktek') is-invalid @enderror" id="jadwal_praktek"
                                name="jadwal_praktek" value="{{ old('jadwal_praktek') ?? $dokter->jadwal_praktek }}">
                            <span class="text-danger">{{ $errors->first('jadwal_praktek') }}</span>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>    
                </form>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection