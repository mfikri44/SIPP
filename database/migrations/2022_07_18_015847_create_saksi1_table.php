<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaksi1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saksi1', function (Blueprint $table) {
            $table->bigIncrements('id_saksi1');
            $table->string('nik_saksi1');
            $table->string('nama_saksi1');
            $table->string('tempat_lahir_saksi1');
            $table->date('tanggal_lahir_saksi1');
            $table->integer('umur_saksi1');
            $table->string('pekerjaan_saksi1');
            $table->string('alamat_saksi1');
            $table->string('desa_saksi1');
            $table->string('kecamatan_saksi1');
            $table->string('kabupaten_saksi1');
            $table->string('provinsi_saksi1');
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
        Schema::dropIfExists('saksi1');
    }
}
