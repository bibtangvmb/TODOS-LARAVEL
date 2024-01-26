<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori Extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primarykey = 'kode_makanan';

    protected $fillable = [
        'kode_makanan',
        'nama',
        'ket',
        'kategori',
        'harga',
        'ket',
    ];

}