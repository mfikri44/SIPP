<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;    
    protected $table = 'pemohon';
    protected $primaryKey = "id_pemohon";
    protected $fillable = [
        'nama_pemohon',
        'jenis_kelamin_pemohon',
        'tempat_lahir_pemohon',
        'tanggal_lahir_pemohon',
        'agama_pemohon'
    ];

    public static $rules = [
        'nama_pemohon'           => 'required',
        'jenis_kelamin_pemohon'          => 'required',
        'tempat_lahir_pemohon'          => 'required',
        'tanggal_lahir_pemohon'        => 'required',
        'agama_pemohon'          => 'required'
    ]; 
}
