@extends('app', ['title' => 'Pendaftaran Pasien'])
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold">DATA PENDAFTARAN PASIEN</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12 d-flex justify-content-between">
                        {{-- Button --}}
                        <a href="/daftar/create" class="btn btn-primary btn-sm">Tambah Data</a>

                        {{-- Search Bar --}}
                        <div class="d-flex align-items-center">
                            <i class="bx bx-search bx-md"></i>
                            <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                placeholder="Search..." aria-label="Search..." />
                        </div>
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
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Daftar</th>
                                <th>Poli</th>
                                <th>Keluhan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($daftar as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->pasien->nama }}</td>
                                    <td>{{ ucfirst($item->pasien->jenis_kelamin) }}</td>
                                    <td>{{ $item->tanggal_daftar }}</td>
                                    <td>{{ $item->poli->nama }}</td>
                                    <td>{{ $item->keluhan }}</td>
                                    <td>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Tidak Ada Data Pendaftaran Pasien</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-3">
                        {{ $daftar->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection