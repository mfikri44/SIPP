<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibu', function (Blueprint $table) {
            $table->bigIncrements('id_ibu');
            $table->string('nik_ibu');
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->integer('umur_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->string('desa_ibu');
            $table->string('kecamatan_ibu');
            $table->string('kabupaten_ibu');
            $table->string('provinsi_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->date('tanggal_kawin');
            $table->string('kebangsaan_ibu');
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
        Schema::dropIfExists('ibu');
    }
}
