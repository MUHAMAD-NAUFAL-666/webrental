<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $table = 'laptop';

    protected $fillable = [
        'nama',
        'merek',
        'kategori',
        'os',
        'ram',
        'storage',
        'harga_sewa',
        'status',
        'gambar',
        'layar',
        'prosesor',
        'baterai'
    ];
}
