<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemohonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohon', function (Blueprint $table) {
            $table->bigIncrements('id_pemohon');
            $table->string('nama_pemohon');
            $table->string('jenis_kelamin_pemohon');
            $table->string('tempat_lahir_pemohon');
            $table->date('tanggal_lahir_pemohon');
            $table->string('agama_pemohon');
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
        Schema::dropIfExists('pemohon');
    }
}
