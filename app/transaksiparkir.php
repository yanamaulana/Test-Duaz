<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksiparkir extends Model
{
    protected $table = 'transaksiparkir';
    protected $fillabel = ['id', 'jenis_kendaraan', 'no_polisi', 'tgl_transaksi', 'waktu_masuk', 'waktu_keluar', 'biaya'];
}
