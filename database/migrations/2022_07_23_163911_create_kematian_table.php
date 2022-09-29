<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->bigIncrements('id_kematian');
            $table->string('nama_kk');
            $table->string('no_kk');

            $table->date('tanggal_kematian');
            $table->time('jam_kematian');
            $table->string('sebab_kematian');
            $table->string('tempat_kematian');
            $table->string('menerangkan_kematian');
            
            $table->bigInteger('jenazah_id');
            $table->bigInteger('ibu_id');
            $table->bigInteger('ayah_id');
            $table->bigInteger('saksi1_id');
            $table->bigInteger('saksi2_id');
            $table->integer('status');
            $table->bigInteger('user_id');

            $table->string('file_pengantar_rt');
            $table->string('file_kk');
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
        Schema::dropIfExists('kematian');
    }
}
