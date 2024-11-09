<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory;
    use SearchableTrait;
    protected $guarded = [];

    protected $searchable = [
        'columns' => [
            'nama' => 10,
            'no_dokter' => 5,
            // Tambahkan kolom lain sesuai kebutuhan
        ],
    ];
}
