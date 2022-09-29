<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayah', function (Blueprint $table) {
            $table->bigIncrements('id_ayah');
            $table->string('nik_ayah');
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->integer('umur_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            $table->string('desa_ayah');
            $table->string('kecamatan_ayah');
            $table->string('kabupaten_ayah');
            $table->string('provinsi_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('kebangsaan_ayah');
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
        Schema::dropIfExists('ayah');
    }
}
