<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsumen', function (Blueprint $table) {
            $table->id();
            $table->string('konsumen', 191);
            $table->string('jenis_kendaraan', 5);
            $table->string('no_polisi', 11);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 1);
            $table->string('no_hp', 13);
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
        Schema::dropIfExists('konsumen');
    }
}
