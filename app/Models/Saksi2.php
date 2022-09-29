<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saksi2 extends Model
{
    use HasFactory;    
    protected $table = 'saksi2';
    protected $primaryKey = "id_saksi2";
    protected $fillable = [
        'nik_saksi2',
        'nama_saksi2',
        'tempat_lahir_saksi2',
        'tanggal_lahir_saksi2',
        'umur_saksi2',
        'pekerjaan_saksi2',
        'alamat_saksi2',
        'desa_saksi2',
        'kecamatan_saksi2',
        'kabupaten_saksi2',
        'provinsi_saksi2',
    ];

    public static $rules = [
        'nik_saksi2'           => 'required',
        'nama_saksi2'          => 'required',
        'tempat_lahir_saksi2'  => 'required',
        'tanggal_lahir_saksi2' => 'required',
        'umur_saksi2'          => 'required',
        'pekerjaan_saksi2'     => 'required',
        'alamat_saksi2'        => 'required',
        'desa_saksi2'          => 'required',
        'kecamatan_saksi2'     => 'required',
        'kabupaten_saksi2'     => 'required',
        'provinsi_saksi2'      => 'required',
    ];

}
