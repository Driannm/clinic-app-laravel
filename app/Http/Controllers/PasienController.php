<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('query');
        $pasien = $query ?
            Pasien::where('nama', 'like', "%{$query}%")
            ->orWhere('no_pasien', 'like', "%{$query}%")
            ->paginate(6) :
            Pasien::latest()->paginate(6); // Menggunakan data terbaru jika tidak ada query
            $data['pasien'] = \App\Models\Pasien::latest()->paginate(6);
        return view('pasien.index', [
            'pasien' => $pasien,
            'title' => 'Daftar Pasien',
        ]);
    }
    public function create()
    {
        $data['title'] = 'Tambah Pasien';
        return view('pasien.create');
    }

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
        $pasien->fill($requestData);


        if ($request->hasfile('foto')) {
            $file = $request->file('foto');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $pasien->foto = $file_name;
        }

        $pasien->save();
        flash('Berhasil, Data ' . $pasien->nama . ' Telah Tersimpan!')->success();
        return redirect('/pasien');
    }

    public function show(string $id)
    {
        $data['pasien'] = \App\Models\Pasien::findOrFail($id);
        return view('pasien.edit', $data);
    }

    public function edit(string $id) {}

    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien,' . $id,
            'nama' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'foto' => 'nullable|mimes:jpg,jpeg,png|max:5000',
            'alamat' => 'nullable',
        ]);

        $pasien = \App\Models\Pasien::findOrFail($id);
        $pasien->fill($requestData);

        // Jika ada file foto yang diupload
        if ($request->hasfile('foto')) {
            $filePath = public_path('uploads');
            $file = $request->file('foto');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);

            // Hapus foto lama jika ada
            if (!is_null($pasien->foto)) {
                $oldImage = public_path('uploads/' . $pasien->foto);
                if (file_exists($oldImage)) {
                    unlink($oldImage);
                }
            }

            $pasien->foto = $file_name;
        }

        $pasien->save();

        flash('Berhasil, Data ' . $pasien->nama . ' Telah Diupdate!')->info();
        return redirect()->route('pasien.index');
    }

    public function destroy(string $id)
    {
        $pasien = \App\Models\Pasien::findOrFail($id);

        if ($pasien->daftar->count() > 0) {
            flash('Gagal, Data ' . $pasien->nama . ' Tidak Dapat Dihapus, Karena Sudah Ada Data Pendaftaran')->error();
            return redirect('/pasien');
        }

        if (!is_null($pasien->foto)) {
            $oldImage = public_path('uploads/' . $pasien->foto);
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
        }

        $pasien->delete();
        flash('Berhasil, Data ' . $pasien->nama . ' Telah Dihapus!')->warning();
        return redirect('/pasien');
    }

    //     public function search(Request $request)
    //     {
    //         $query = $request->input('query');
    //         $posts = Pasien::search($query)->get();

    //         return view('posts.index', compact('posts'));
    //     }
}
