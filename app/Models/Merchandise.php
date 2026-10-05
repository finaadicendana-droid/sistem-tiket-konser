<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $table = 'merchandises';

    protected $fillable = [
        'Nama_Merchandise',
        'Kategori',
        'Harga',
        'Stok',
    ];
}