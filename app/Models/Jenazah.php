<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenazah extends Model
{
    use HasFactory;
    protected $table = 'jenazah';
    protected $primaryKey = "id_jenazah";
    protected $fillable = [
        'nik_jenazah',
        'nama_jenazah',
        'jenis_kelamin_jenazah',
        'tempat_lahir_jenazah',
        'tanggal_lahir_jenazah',
        'umur_jenazah',
        'agama_jenazah',
        'alamat_jenazah',
        'desa_jenazah',
        'kecamatan_jenazah',
        'kabupaten_jenazah',
        'provinsi_jenazah',
    ];

    public static $rules = [
        'nik_jenazah'           => 'required',
        'nama_jenazah'          => 'required',
        'tempat_lahir_jenazah'  => 'required',
        'tanggal_lahir_jenazah' => 'required',
        'umur_jenazah'          => 'required',
        'agama_jenazah'         => 'required',
        'alamat_jenazah'        => 'required',
        'desa_jenazah'          => 'required',
        'kecamatan_jenazah'     => 'required',
        'kabupaten_jenazah'     => 'required',
        'provinsi_jenazah'      => 'required',
    ]; 
}
