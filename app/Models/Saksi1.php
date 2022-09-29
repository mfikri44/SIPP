<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saksi1 extends Model
{
    use HasFactory;
    protected $table = 'saksi1';
    protected $primaryKey = "id_saksi1";
    protected $fillable = [
        'nik_saksi1',
        'nama_saksi1',
        'tempat_lahir_saksi1',
        'tanggal_lahir_saksi1',
        'umur_saksi1',
        'pekerjaan_saksi1',
        'alamat_saksi1',
        'desa_saksi1',
        'kecamatan_saksi1',
        'kabupaten_saksi1',
        'provinsi_saksi1',
    ];

    public static $rules = [
        'nik_saksi1'           => 'required',
        'nama_saksi1'          => 'required',
        'tempat_lahir_saksi1'  => 'required',
        'tanggal_lahir_saksi1' => 'required',
        'umur_saksi1'          => 'required',
        'pekerjaan_saksi1'     => 'required',
        'alamat_saksi1'        => 'required',
        'desa_saksi1'          => 'required',
        'kecamatan_saksi1'     => 'required',
        'kabupaten_saksi1'     => 'required',
        'provinsi_saksi1'      => 'required',
    ]; 

    // static function add_saksi1($nik_saksi1, $nama_saksi1, $umur_saksi1, $alamat_saksi1, $desa_saksi1, $kecamatan_saksi1, $kabupaten_saksi1, $provinsi_saksi1){
    //     Saksi1::create([
    //         'nik_saksi1'        => $nik_saksi1,
    //         'nama_saksi1'       => $nama_saksi1,
    //         'umur_saksi1'       => $umur_saksi1,
    //         'alamat_saksi1'     => $alamat_saksi1,
    //         'desa_saksi1'       => $desa_saksi1,
    //         'kecamatan_saksi1'  => $kecamatan_saksi1,
    //         'kabupaten_saksi1'  => $kabupaten_saksi1,
    //         'provinsi_saksi1'   => $provinsi_saksi1,
    //     ]);

    // }
}
