<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = [
        'Nama_Pembeli',
        'Email',
        'No_Hp',
        'Alamat',
    ];
}