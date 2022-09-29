<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan', function (Blueprint $table) {
            $table->bigIncrements('id_keterangan');
            $table->bigInteger('pemohon_id');

            $table->date('berlaku_mulai');
            $table->date('berlaku_sampai');
            $table->string('keperluan');
            $table->string('keterangan_lain');
            
            $table->integer('status');
            $table->bigInteger('user_id');
            
            $table->string('file_pengantar_rt');
            $table->string('file_kk');
            $table->string('file_ktp');
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
        Schema::dropIfExists('keterangan');
    }
}
