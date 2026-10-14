<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use Hasfactory;

    protected $table = 'pesanans';
    protected $fillable = ['id','menu_id','nama_pelanggan', 'nomor_meja', 'jumlah', 'total_harga', 'status'];
}