<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaksi2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saksi2', function (Blueprint $table) {
            $table->bigIncrements('id_saksi2');
            $table->string('nik_saksi2');
            $table->string('nama_saksi2');
            $table->string('tempat_lahir_saksi1');
            $table->date('tanggal_lahir_saksi1');
            $table->integer('umur_saksi2');
            $table->string('pekerjaan_saksi2');
            $table->string('alamat_saksi2');
            $table->string('desa_saksi2');
            $table->string('kecamatan_saksi2');
            $table->string('kabupaten_saksi2');
            $table->string('provinsi_saksi2');
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
        Schema::dropIfExists('saksi2');
    }
}
