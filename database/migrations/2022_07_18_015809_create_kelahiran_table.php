<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->bigIncrements('id_kelahiran');
            $table->string('nama_kk');
            $table->string('no_kk');
            $table->bigInteger('anak_id');
            $table->bigInteger('ibu_id');
            $table->bigInteger('ayah_id');
            $table->bigInteger('saksi1_id');
            $table->bigInteger('saksi2_id');
            $table->integer('status');
            $table->bigInteger('user_id');
            $table->string('file_pengantar_rt');
            $table->string('file_kk');
            $table->string('file_surat_lahir');
            $table->string('file_buku_nikah');
            $table->string('file_ktp_ayah');
            $table->string('file_ktp_ibu');
            $table->string('file_ktp_saksi1');
            $table->string('file_ktp_saksi2');
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
        Schema::dropIfExists('kelahiran');
    }
}
