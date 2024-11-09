@extends('app', ['title' => 'Daftar Pasien'])
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0 fw-semibold">DATA PASIEN</h5>

                {{-- Search Bar --}}
                <div class="d-flex align-items-center ms-3">
                    <form method="GET" action="{{ route('pasien.index') }}" class="d-flex align-items-center">
                        <i class="bx bx-search bx-md"></i>
                        <input type="text" name="query" class="form-control border-0 shadow-none ps-1 ps-sm-2"
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
                                <th>No Pasien</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Input</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($pasien as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->no_pasien }}</td>
                                    <td>
                                        <div class="showPhoto">
                                            <div id="imagePreview"
                                                style="@if ($item->foto != '') background-image:url('{{ url('/') }}/uploads/{{ $item->foto }}')
                  @else background-image: url('{{ url('/storage/avatar.png') }}') @endif;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->umur }}</td>
                                    <td>{{ ucfirst($item->jenis_kelamin) }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="/pasien/{{ $item->id }}" class="btn btn-sm btn-info mt-1">Edit</a>
                                        <form action="/pasien/{{ $item->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger mt-1"
                                                onclick="return confirm('Yakin ingin hapus data?')"> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Tidak Ada Data Pasien</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-3">
                        {{ $pasien->links('pagination::bootstrap-4', ['class' => 'pagination-sm']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .showPhoto {
        width: 80%;
        height: 45px;
        display: flex;
        justify-content: flex-start;
        /* Foto akan ke kiri */
        align-items: center;
    }

    .showPhoto>div {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
