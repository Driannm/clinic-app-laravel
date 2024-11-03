<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Dokter.create');
    }

    public function edit($id) 
    {
        return "Halo, saya berada dihalaman edit dengan nilai $id";
    }

    public function show($id) 
    {
        return "Halo, saya berada dihalaman show dengan nilai $id";
    }
}
