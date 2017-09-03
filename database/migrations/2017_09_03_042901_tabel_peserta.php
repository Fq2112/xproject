<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function(Blueprint $table){
            $table->increments('id');
            $table->string('password');
            $table->string('tempat_lahir');
            $table->string('instansi');
            $table->string('asal');
            $table->string('alamat_tinggal');
            $table->string('no_telp');
            $table->string('nama');
            $table->string('email', 50)->unique();
            $table->date('tgl_lahir');
            $table->string('remember_token', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta');
    }
}
