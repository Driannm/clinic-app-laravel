<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Daftar Pasien';
        $data['pasien'] = \App\Models\Pasien::latest() -> paginate(9);
        return view ('pasien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Tambah Pasien';
        return view ('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien',
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'alamat' => 'nullable',
            'foto' => 'required|mimes:jpg,jpeg,png|max:5000',
        ]);

        
        $filePath = public_path('uploads');
        $pasien = new \App\Models\Pasien();
        $pasien -> fill($requestData);

        
        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $file_name = time() . $file->getClientOriginalName();
 
            $file->move($filePath, $file_name);
            $pasien->foto = $file_name;
        }

        $pasien -> save();
        flash('Berhasil, Data pasien telah tersimpan!')->success();
        return back();
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
        $data['pasien'] = \App\Models\Pasien::findOrFail($id);
        return view('pasien.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien' . $id,
            'nama' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'foto' => 'nullable|mimes:jpg,jpeg,png|max:5000',
            'alamat' => 'nullable',
        ]);

        $pasien = \App\Models\Pasien::findOrFail($id);
        $pasien -> fill($requestData);

        if ($request->hasfile('foto')) {
            $filePath = public_path('uploads');
            $file = $request->file('foto');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            // delete old photo
            if (!is_null($pasien->foto)) {
                $oldImage = public_path('uploads/' . $pasien->foto);
                if (Pasien::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $pasien->foto = $file_name;
        }
        $pasien -> save();
        flash('Berhasil, Data pasien telah terupdate!')->success();
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \App\Models\Pasien::findOrFail($id);
        flash('Data sudah berhasil dihapus!') -> success();
        return back();
    }
}
