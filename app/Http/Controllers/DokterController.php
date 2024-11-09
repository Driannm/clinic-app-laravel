<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    
    public function index(Request $request)
    {
        $query = $request->input('query');
        $dokter = $query ?
            Dokter::where('nama', 'like', "%{$query}%")
            ->orWhere('no_dokter', 'like', "%{$query}%")
            ->paginate(6) :
            Dokter::latest()->paginate(6); // Menggunakan data terbaru jika tidak ada query
            
        $data['dokter'] = \App\Models\Dokter::latest() -> paginate(6);
        return view('dokter.index', [
            'dokter' => $dokter,
            'title' => 'Daftar Pasien',
        ]);
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
        $dokter = \App\Models\Dokter::findOrFail($id);

        if (!is_null($dokter->foto)) {
            $oldImage = public_path('uploads/' . $dokter->foto);
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }

        $dokter->delete();
        flash('Berhasil, Data ' . $dokter->nama . ' Telah Dihapus!')->warning();
        return redirect('/dokter');
    }
}
