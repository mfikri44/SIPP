<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anak', function (Blueprint $table) {
            $table->bigIncrements('id_anak');
            $table->string('nama_anak');
            $table->string('jenis_kelamin_anak');
            $table->string('tempat_lahir_anak');
            $table->string('kota_anak');
            $table->date('tanggal_lahir_anak');
            $table->time('waktu_lahir_anak');
            $table->string('jenis_kelahiran_anak');
            $table->string('anak_ke');
            $table->string('penolong_kelahiran');
            $table->string('berat_anak');
            $table->string('tinggi_anak');
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
        Schema::dropIfExists('anak');
    }
}
