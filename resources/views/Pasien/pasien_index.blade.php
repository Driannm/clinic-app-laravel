@extends('mylayout', ['title' => 'Data Pasien'])
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
      <h5 class="card-header">Data Pasiens</h5>
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
                    @if ($item->foto)
                        <img src="{{ asset('Storage/' . $item->foto) }}" width="100px">
                    @endif
                </td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->umur }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
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