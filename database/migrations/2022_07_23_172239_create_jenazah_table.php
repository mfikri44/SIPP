<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenazahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenazah', function (Blueprint $table) {
            $table->bigIncrements('id_jenazah');
            $table->string('nik_jenazah');
            $table->string('nama_jenazah');
            $table->string('tempat_lahir_jenazah');
            $table->date('tanggal_lahir_jenazah');
            $table->integer('umur_jenazah');
            $table->string('agama_jenazah');
            $table->string('alamat_jenazah');
            $table->string('desa_jenazah');
            $table->string('kecamatan_jenazah');
            $table->string('kabupaten_jenazah');
            $table->string('provinsi_jenazah');
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
        Schema::dropIfExists('jenazah');
    }
}
