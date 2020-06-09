<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiparkirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksiparkir', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kendaraan', 5);
            $table->string('no_polisi', 11);
            $table->date('tgl_transaksi');
            $table->Time('waktu_masuk');
            $table->Time('waktu_keluar');
            $table->float('biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksiparkir');
    }
}
