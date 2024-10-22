@extends('mylayout', ['title' => 'Daftar Pasien'])
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Data Pasiens</h5>
      <!-- Pindahin Search Bar ke sini -->
      <div class="navbar-nav align-items-center">
          <div class="nav-item d-flex align-items-center">
              <i class="bx bx-search bx-md"></i>
              <input
                  type="text"
                  class="form-control border-0 shadow-none ps-1 ps-sm-2"
                  placeholder="Search..."
                  aria-label="Search..." />
          </div>
      </div>
    </div>

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
                  <div id="imagePreview" style="@if ($item->foto != '') background-image:url('{{ url('/') }}/uploads/{{ $item->foto }}')
                  @else background-image: url('{{ url('/storage/avatar.png') }}') @endif;">
                  </div>
              </div>
              </td>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->umur }}</td>
              {{-- <td>{{ $item->jenis_kelamin }}</td> --}}
              <td>{{ ucfirst($item->jenis_kelamin) }}</td>
              <td>{{ $item->created_at }}</td>
              <td><b>Coming Soon!</b></td>
          </tr>
          @empty
          <tr>
              <td colspan="8">Tidak Ada Data Pasien</td>
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
      width: 50%;
      height: 35px;
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