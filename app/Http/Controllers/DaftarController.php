<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use App\Exports\DaftarExport;
use Maatwebsite\Excel\Facades\Excel;

class DaftarController extends Controller
{
    public function index()
    {
        $daftar = \App\Models\Daftar::with('Pasien')->latest()->paginate(6);
        return view('daftar.index', compact('daftar'));
    }

    public function create()
    {
        $data['listPasien'] = \App\Models\Pasien::orderBy('nama', 'asc') -> get();
        $data['listPoli'] = \App\Models\Poli::orderBy('nama', 'asc') -> get();
        return view('daftar.create', $data);
    }

    public function store(Request $request)
    {
        $requestData = $request->validate([
            'tanggal_daftar' => 'required',
            'pasien_id' => 'required',
            'poli_id' => 'required',
            'keluhan' => 'required',
        ]);

        $daftar = new \App\Models\Daftar();
        $daftar -> fill($requestData);
        $daftar -> save();
        flash('Berhasil, Data Pendaftaran Pasien Disimpan!')->success();
        return redirect('/daftar');
    }

    public function show($id)
    {
        $data['daftar'] = \App\Models\Daftar::findOrFail($id);
        return view('daftar.show', $data);
    }

    public function edit(Daftar $daftar)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'tindakan'=> 'required',
            'diagnosis'=> 'required',
        ]);

        $daftar = \App\Models\Daftar::findOrFail($id);
        $daftar -> fill($requestData);
        $daftar -> save();
        flash('Berhasil, Data Pendaftaran Pasien Diupdate!')->info();
        return redirect('/daftar');
    }

    public function destroy(Daftar $daftar)
    {
        $daftar->delete();
        flash('Berhasil, Data Pendaftaran Pasien Dihapus!')->warning();
        return back();
    }
    
    public function downloadDataDaftar()
    {
        return Excel::download(new DaftarExport, 'data_daftar.xlsx');
    }
}
