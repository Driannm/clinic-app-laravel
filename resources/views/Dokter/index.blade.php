@extends('app', ['title' => 'Daftar Dokter'])
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold">DAFTAR DOKTER</h5>
                <!-- Search Bar -->
                <div class="d-flex align-items-center ms-3">
                    <form method="GET" action="{{ route('dokter.index') }}" class="d-flex">
                        <input type="text" name="query" class="form-control  shadow-none ps-1 ps-sm-2"
                            placeholder="Search..." aria-label="Search..." value="{{ request('query') }}" />
                    </form>
                </div>
            </div>

            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-12 d-flex justify-content-between">
                        {{-- Button --}}
                        <a href="/pasien/create" class="btn btn-primary btn-sm">Tambah Pasien</a>
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{ session('success') }}
                        <button type="button" id="session-close-btn" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                @include('flash::message')

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Dokter</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Spesialisasi</th>
                                <th>Keahlian</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0" id="table-body">
                            @forelse ($dokter as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->no_dokter }}</td>
                                    <td>
                                        <div class="showPhoto">
                                            <div id="imagePreview"
                                                style="@if ($item->foto != '')
                                                          background-image: url('{{ url('/') }}/uploads/{{ $item->foto }}');
                                                      @elseif (trim(strtolower($item->jenis_kelamin)) == 'perempuan')
                                                          background-image: url('{{ url('/storage/avatar-doctor-2.jpg') }}');
                                                      @else
                                                          background-image: url('{{ url('/storage/avatar-doctor-1.jpg') }}');
                                                      @endif;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->umur }}</td>
                                    {{-- <td>{{ $item->jenis_kelamin }}</td> --}}
                                    <td>{{ ucfirst($item->jenis_kelamin) }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->keahlian }}</td>
                                    <td>
                                        <a href="/pasien/detail/{{ $item->id }}"
                                            class="btn btn-sm btn-primary mt-1">Detail</a>
                                        <form action="/dokter/{{ $item->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger mt-1"
                                                onclick="return confirm('Yakin ingin hapus data?')"> Hapus </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">
                                        <p>Tidak ada Data Dokter! <a href="/dokter/create"
                                                style="font-style: italic;">Tambah
                                                disini..</a></p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-3">
                        {{ $dokter->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .showPhoto {
    width: 50px; 
    height: 50px;
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
