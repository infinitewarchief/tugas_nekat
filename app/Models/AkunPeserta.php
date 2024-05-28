<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AkunPeserta extends Model
{
    protected $table = 'akun_peserta'; // Nama tabel yang sesuai

    protected $fillable = [ // Kolom-kolom yang dapat diisi secara massal
        'nama_lengkap',
        'username',
        'password',
    ];
}