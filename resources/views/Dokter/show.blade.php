@extends('app', ['title' => 'Detail Data Dokter'])
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold">DATA DOKTER | {{ strtoupper($dokter->nama) }}</h5>
                    </div>

                    <div class="card-body">
                        <table width="100%">
                            <tbody>
                                <tr>
                                    <th width="15%">No Dokter</th>
                                    <td> : {{ $dokter->no_dokter }}</td>
                                    {{-- <td rowspan="3" style="text-align: right; vertical-align: middle;">
                                        <div class="showPhoto" style="display: inline-block; margin-left: auto; margin-right: 0;">
                                            <div id="imagePreview"
                                                style="
                                                    width: 100px;
                                                    height: 100px;
                                                    border-radius: 50%;
                                                    background-size: cover;
                                                    background-position: center;
                                                    margin: 0 auto;
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: center;
                                                    background-image: 
                                                        @if ($dokter->foto != '') 
                                                            url('{{ url('/') }}/uploads/{{ $dokter->foto }}');
                                                        @elseif (trim(strtolower($dokter->jenis_kelamin)) == 'perempuan')
                                                            url('{{ url('/storage/avatar-doctor-2.jpg') }}');
                                                        @else
                                                            url('{{ url('/storage/avatar-doctor-1.jpg') }}');
                                                        @endif;
                                                ">
                                            </div>
                                        </div>
                                    </td> --}}
                                </tr>
                                <tr>
                                    <th>Nama Dokter</th>
                                    <td> : {{ $dokter->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td> : {{ ucfirst($dokter->jenis_kelamin) }}</td>
                                </tr>
                                <tr>
                                    <th>Jadwal Praktek</th>
                                    <td> : {{ $dokter->jadwal_praktek }}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        
                        <hr>
                        <h4>Riwayat Tindakan Terakhir</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Tanggal Tindakan</th>
                                    <th>Nama Pasien</th>
                                    <th>Diagnosis</th>
                                    <th>Tindakan</th>
                                    <th>Obat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>2002</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                {{-- @foreach ($daftar->pasien->daftar as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tanggal_daftar }}</td>
                                        <td>{{ $item->keluhan }}</td>
                                        <td>{{ $item->diagnosis }}</td>
                                        <td>{{ $item->tindakan }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                        <hr>
                        <h4>Data Pendaftaran</h4>
                        {{-- <table width="100%">
                            <tbody>
                                <tr>
                                    <th width="15%">No Pendaftaran</th>
                                    <td> : {{ $daftar->id }}</td>
                                </tr>
                                    <th>Tanggal Daftar</th>
                                    <td> : {{ $daftar->tanggal_daftar }}</td>
                                </tr>
                                <tr>
                                    <th>Poli</th>
                                    <td> : {{ $daftar->poli->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Keluhan</th>
                                    <td> : {{ $daftar->keluhan }}</td>
                                </tr>
                                <tr>
                                    <th>Status Pendaftaran</th>
                                    <td> : {{ $daftar->status }}</td>
                                </tr>
                            </tbody>
                        </table> --}}
                        <hr>
                        <h4>Hasil Diagnosis</h4>
                        <form action="/daftar/{{ $dokter->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="diagnosis">Diagnosis</label>
                                {{-- <textarea name="diagnosis" class="form-control" rows="3">{{ $daftar->diagnosis }}</textarea> --}}
                                {{-- <span class="text-danger">{{ $errors->first('diagnosis') }}</span> --}}
                            </div>
                            <div class="form-group mt-3">
                                <label for="tindakan">Tindakan</label>
                                {{-- <textarea name="tindakan" class="form-control" rows="3">{{ $daftar->tindakan }}</textarea> --}}
                                {{-- <span class="text-danger">{{ $errors->first('tindakan') }}</span> --}}
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .showPhoto {
    width: 100px; 
    height: 100px;
    border-radius: 50%;
    overflow: hidden; 
    display: inline-block;
}

#imagePreview {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}
</style>