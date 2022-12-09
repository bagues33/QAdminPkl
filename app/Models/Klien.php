<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klien extends Model
{
    use HasFactory;

    protected $fillable = [
        //'id_klien'
        'id_klien',
        'nama',
        'no_telpon',
        'alamat',
        'email',
        'photo',
        'website',
        'deskripsi',
        'id_user',
    ];

    protected $primaryKey = 'id_klien';
}
