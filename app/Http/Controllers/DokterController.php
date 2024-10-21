<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index() 
    {
        return "Halo, saya berada dihalaman dokter index";
    }

    public function create() 
    {
        return "Halo, saya berada dihalaman tambah data dokter";
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
