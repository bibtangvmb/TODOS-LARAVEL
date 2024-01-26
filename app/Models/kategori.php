<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori Extends Model
{
    use HasFactory;

    protected $table = 'kategoris';

    protected $primarykey = 'kode_kategori';

    protected $fillable = [
        'kode_kategori',
        'nama',
        'ket',
    ];

}