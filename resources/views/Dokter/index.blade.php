@extends('app', ['title' => 'Daftar Dokter'])
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Daftar Dokter</h5>

      <!-- Search Bar -->
      <div class="navbar-nav align-items-center">
          <div class="nav-item d-flex align-items-center">
              <i class="bx bx-search bx-md"></i>
              <input
                  type="text"
                  class="form-control border-0 shadow-none ps-1 ps-sm-2"
                  placeholder="Search..."
                  aria-label="Search..."/>
          </div>
      </div>
    </div>

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
                  <div id="imagePreview" style="@if ($item->foto != '') background-image:url('{{ url('/') }}/uploads/{{ $item->foto }}')
                  @else background-image: url('{{ url('/storage/avatar.png') }}') @endif;">
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
                <a href="/pasien/{{ $item -> id }}/edit" class="btn btn-sm btn-info mt-1">Edit</a>
                <a href="/pasien/detail/{{ $item -> id }}" class="btn btn-sm btn-primary mt-1">Detail</a>
                <form action="/dokter/{{ $item -> id }}" method="post" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-danger mt-1" onclick="return confirm('Yakin ingin hapus data?')"> Hapus </button>
                </form>
              </td>
          </tr>
          @empty
          <tr>
              <td colspan="8">
                <p>Tidak ada Data Dokter! <a href="/dokter/create" style="font-style: italic;">Tambah disini..</a></p>
              </td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection	

<style>
  .showPhoto {
      width: 80%;
      height: 45px;
      display: flex;
      justify-content: flex-start; /* Foto akan ke kiri */
      align-items: center;
  }

  .showPhoto > div {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
  }
</style>