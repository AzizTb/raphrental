<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_sekarang');
            $table->string('nama_lengkap');
            $table->string('alamat_sewa');
            $table->date('tgl_mulai_sewa');
            $table->date('tgl_selesai_sewa');
            $table->string('nama_mobil');
            $table->string('nama_driver');
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
        Schema::dropIfExists('sewas');
    }
}
