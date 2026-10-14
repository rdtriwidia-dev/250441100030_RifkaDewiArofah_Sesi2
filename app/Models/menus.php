<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use Hasfactory;

    protected $table = 'menus';
    protected $fillable = ['id','nama_menu','jenis', 'harga' ];
}