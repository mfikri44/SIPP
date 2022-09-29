<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    use HasFactory;

    protected $table = 'ayah';
    protected $primaryKey = "id_ayah";
    protected $fillable = [
        'nik_ayah',
        'nama_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'umur_ayah',
        'pekerjaan_ayah',
        'alamat_ayah',
        'desa_ayah',
        'kecamatan_ayah',
        'kabupaten_ayah',
        'provinsi_ayah',
        'kewarganegaraan_ayah',
        'kebangsaan_ayah',
    ];

    public static $rules = [
        'nik_ayah'           => 'required',
        'nama_ayah'          => 'required',
        'tempat_lahir_ayah' => 'required',
        'tanggal_lahir_ayah' => 'required',
        'umur_ayah'          => 'required',
        'pekerjaan_ayah'     => 'required',
        'alamat_ayah'        => 'required',
        'desa_ayah'          => 'required',
        'kecamatan_ayah'     => 'required',
        'kabupaten_ayah'     => 'required',
        'provinsi_ayah'      => 'required',
        'kewarganegaraan_ayah'=> 'required',
        'kebangsaan_ayah'   => 'required',
    ]; 
}
