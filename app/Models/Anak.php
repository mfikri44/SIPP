<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $table = 'anak';
    protected $primaryKey = "id_anak";
    protected $fillable = [
        'nama_anak',
        'jenis_kelamin_anak',
        'tempat_lahir_anak',
        'kota_anak',
        'tanggal_lahir_anak',
        'waktu_lahir_anak',
        'jenis_kelahiran_anak',
        'anak_ke',
        'penolong_kelahiran',
        'berat_anak',
        'tinggi_anak',
    ];

    public static $rules = [
        'nama_anak'             => 'required',
        'jenis_kelamin_anak'    => 'required',
        'tempat_lahir_anak'     => 'required',
        'kota_anak'             => 'required',
        'tanggal_lahir_anak'    => 'required',
        'waktu_lahir_anak'      => 'required',
        'jenis_kelahiran_anak'  => 'required',
        'anak_ke'               => 'required',
        'penolong_kelahiran'    => 'required',
        'berat_anak'            => 'required',
        'tinggi_anak'           => 'required',
    ]; 
}
