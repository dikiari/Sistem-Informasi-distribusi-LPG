<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distribution extends Model
{
    use HasFactory;
    protected $table = 'distributions';

    protected $fillable = [
        'waktu_pengiriman',
        'alamat_pengiriman',
        'jumlah_pengiriman',
        'jumlah_kendaraan_pengirim',
        'plat_nopol',
        'nama_driver',
        'status_pengiriman',
    ];
}
