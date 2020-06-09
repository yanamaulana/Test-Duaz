<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    protected $table = 'konsumen';
    protected $fillabel = ['konsumen', 'jenis_kendaraan', 'no_polisi', 'tanggal_lahir', 'jenis_kelamin', 'no_hp'];
}
