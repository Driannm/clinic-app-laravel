<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory;
    use SearchableTrait;
    protected $guarded = [];
    
    public function daftar(): HasMany
    {
        return $this->hasMany(Daftar::class);
    }

    protected $searchable = [
        'columns' => [
            'nama' => 10,
            'no_pasien' => 5,
            // Tambahkan kolom lain sesuai kebutuhan
        ],
    ];
}
