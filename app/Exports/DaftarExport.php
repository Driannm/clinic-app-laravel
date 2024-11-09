<?php

namespace App\Exports;

use App\Models\Daftar;
use Maatwebsite\Excel\Concerns\FromCollection;

class DaftarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Daftar::all();
    }
}
