<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanDaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $models = \App\Models\Daftar::query();
        if ($request->filled('tanggal_mulai')) {
            $models->whereDate('tanggal_daftar', '>=', $request->tanggal_mulai);
        }
        if ($request->filled('tanggal_akhir')) {
            $models->whereDate('tanggal_daftar', '<=', $request->tanggal_akhir);
        }
        if ($request->filled('nama')) {
            $models->where('nama', $request->poli);
        }
        $data['models'] = $models->latest()->get();
        return view('laporan.daftar_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['listPoli'] = [
            'poli-umum' => 'Poli Umum',
            'poli-gigi' => 'Poli Gigi',
            'poli-mata' => 'Poli Mata',
            'poli-anak' => 'Poli Anak',
            'poli-saraf' => 'Poli Saraf',
            'poli-kulit' => 'Poli Kulit',
            'poli-bedah' => 'Poli Bedah',
            'poli-jantung' => 'Poli Jantung',
        ];
        return view('laporan.daftar_create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
