<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Dokter extends Model
{
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'nama' => 10, // Angka ini adalah "relevansi" untuk kolom ini
            'keahlian' => 5,
            'kategori' => 2,
            // Kamu bisa tambahin kolom lain kalau mau
        ]
    ];

    use HasFactory;
    protected $guarded = [];
}
