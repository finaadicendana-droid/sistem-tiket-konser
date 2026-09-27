<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konser extends Model
{
    protected $table = 'konsers';

    protected $fillable = [
        'Nama_Konser',
        'Artis',
        'Lokasi',
        'Tanggal',
    ];
}