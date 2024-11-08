<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daftar = \App\Models\Daftar::with('Pasien')->latest()->paginate(6);
        return view('daftar.index', compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['listPasien'] = \App\Models\Pasien::orderBy('nama', 'asc') -> get();
        $data['listPoli'] = \App\Models\Poli::orderBy('nama', 'asc') -> get();
        return view('daftar.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
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
        flash('Berhasil, Data Pendaftaran Pasien Tersimpan!')->success();
        return redirect('/daftar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftar $daftar)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftar $daftar)
    {
        //
    }
}
