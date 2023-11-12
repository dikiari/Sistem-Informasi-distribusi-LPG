<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;
    protected $table = 'vendors';

    protected $fillable = [
        'nama_vendor',
        'alamat_vendor',
        'nomor_kontak_vendor',
        'order_suply_per_bulan',
    ];
}
