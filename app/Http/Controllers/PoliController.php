<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poli $poli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poli $poli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poli = \App\Models\Poli::findOrFail($id);

        if ($poli->daftar->count() > 0) {
            flash('Gagal, Tidak Dapat Menghapus ' . $poli->nama . ' Karena Poli Masih Aktif')->error();
            return redirect('/daftar');
        }

        $poli->delete();
        flash('Berhasil, ' . $poli->nama . ' Dinonaktifkan Dan Telah Dihapus!')->warning();
        return redirect('/daftar');
    }
}
