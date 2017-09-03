<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelProjectPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lomba_peserta', function(Blueprint $table){
            $table->integer('id_peserta')->unsigned();
            $table->string('url_youtube')->nullable();
            $table->string('url_project')->nullable();
            $table->string('url_proposal')->nullable();
            $table->string('username');
            $table->string('token');
            $table->boolean('terkonfirmasi')->default(false);
            $table->integer('jenis_lomba')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lomba_peserta');
    }
}
