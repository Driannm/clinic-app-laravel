<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index() 
    {
        $data['title'] = 'Daftar Dokter';
        $data['dokter'] = \App\Models\Dokter::latest() -> paginate(10);
        return view('Dokter.index', $data);
    }

    public function create() 
    {
        $data['title'] = 'Tambah Dokter';
        return view('Dokter.create', $data);
    }

    public function edit($id) 
    {
        return "Halo, saya berada dihalaman edit dengan nilai $id";
    }

    public function store(Request $request)
    {
        $requestData = $request->validate([
            'no_dokter' => 'required|unique:dokters,no_dokter',
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'kategori' => 'required',
            'keahlian' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:5000',
        ]);

        
        $filePath = public_path('uploads');
        $dokter = new \App\Models\Dokter();
        $dokter -> fill($requestData);

        
        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $file_name = time() . $file->getClientOriginalName();
 
            $file->move($filePath, $file_name);
            $dokter->foto = $file_name;
        }

        $dokter -> save();
        flash('Berhasil, Data dokter telah tersimpan!')->success();
        return back();
    }

    public function show($id) 
    {
        return "Halo, saya berada dihalaman show dengan nilai $id";
    }

    public function destroy(string $id)
    {
        \App\Models\Dokter::findOrFail($id);
        flash('Data sudah berhasil dihapus!') -> success();
        return back();
    }
}
