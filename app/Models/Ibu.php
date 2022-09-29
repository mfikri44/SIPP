<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;

    protected $table = 'ibu';
    protected $primaryKey = "id_ibu";
    protected $fillable = [
        'nik_ibu',
        'nama_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'umur_ibu',
        'pekerjaan_ibu',
        'alamat_ibu',
        'desa_ibu',
        'kecamatan_ibu',
        'kabupaten_ibu',
        'provinsi_ibu',
        'tanggal_kawin',
        'kewarganegaraan_ibu',
        'kebangsaan_ibu',
    ];

    public static $rules = [
        'nik_ibu'           => 'required',
        'nama_ibu'          => 'required',
        'tempat_lahir_ibu' => 'required',
        'tanggal_lahir_ibu' => 'required',
        'umur_ibu'          => 'required',
        'pekerjaan_ibu'     => 'required',
        'alamat_ibu'        => 'required',
        'desa_ibu'          => 'required',
        'kecamatan_ibu'     => 'required',
        'kabupaten_ibu'     => 'required',
        'provinsi_ibu'      => 'required',
        'tanggal_kawin'     => 'required',
        'kewarganegaraan_ibu'=> 'required',
        'kebangsaan_ibu'   => 'required',
    ]; 
}
