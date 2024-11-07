@extends('app', ['title' => 'Tambah Pasien'])
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Custom file input -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header fw-bold text-dark">Edit Data Pasien : {{ strtoupper($pasien->nama) }}</div>
                <div class="card-body">
                    <form action="/pasien/{{ $pasien->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group mt-1 mb-3">
                            <label for="foto">Foto Pasien (jpg, jpeg, png)</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                            <span class="text-danger">{{ $errors->first('foto') }}</span>
                        
                            @if ($pasien->foto)
                                <img src="{{ url('/') }}/uploads/{{ $pasien->foto }}" alt="Foto Pasien" class="img-thumbnail mt-2" style="width: 100px">
                            @else
                                <p class="mt-2">Tidak ada foto pasien</p>
                            @endif
                        </div>
                        
                        <div class="form-group mt-1 mb-3">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') ?? $pasien->nama }}">
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
        
                        <div class="form-group mt-1 mb-3">
                            <label for="no_pasien">Nomor Pasien</label>
                            <input type="text" class="form-control @error('no_pasien') is-invalid @enderror" id="no_pasien"
                                name="no_pasien" value="{{ old('no_pasien') ?? $pasien->no_pasien }}">
                            <span class="text-danger">{{ $errors->first('no_pasien') }}</span>
                        </div>
        
                        <div class="form-group mt-1 mb-3">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur"
                                name="umur" value="{{ old('umur') ?? $pasien->umur }}">
                            <span class="text-danger">{{ $errors->first('no_pasien') }}</span>
                        </div>
        
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
        
                        <div class="form-group mt-1 mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" value="{{ old('alamat') }}">
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
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