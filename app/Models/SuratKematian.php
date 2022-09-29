<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SuratKematian extends Model
{
    use HasFactory;
    protected $table = 'kematian';
    protected $primaryKey = "id_kematian";

    protected $fillable = [
        'nama_kk',
        'no_kk',
        'tanggal_kematian',
        'jam_kematian',
        'sebab_kematian',
        'tempat_kematian',
        'menerangkan_kematian',
        'jenazah_id',
        'ibu_id',
        'ayah_id',
        'saksi1_id',
        'saksi2_id',
        'status',
        'user_id',
        'file_pengantar_rt',
        'file_kk',
        'file_ktp_ayah',
        'file_ktp_ibu',
        'file_ktp_saksi1',
        'file_ktp_saksi2',

    ];

 
    
    static function add_surat_kematian($nama_kk, $no_kk, $tanggal_kematian, $jam_kematian, $sebab_kematian, $tempat_kematian, $menerangkan_kematian, $id_jenazah, $id_ibu, $id_ayah, $id_saksi1,  $id_saksi2,  $status, $user_id, $file_pengantar, $file_kk, $file_ktp_ayah, $file_ktp_ibu, $file_ktp_saksi1, $file_ktp_saksi2){
        SuratKematian::create([
            'nama_kk'   => $nama_kk,
            'no_kk'     => $no_kk,
            'tanggal_kematian'      => $tanggal_kematian,
            'jam_kematian'          => $jam_kematian,
            'sebab_kematian'        => $sebab_kematian,
            'tempat_kematian'       => $tempat_kematian,
            'menerangkan_kematian'  => $menerangkan_kematian,
            'jenazah_id'   => $id_jenazah,
            'ibu_id'    => $id_ibu,
            'ayah_id'   => $id_ayah,
            'saksi1_id' => $id_saksi1,
            'saksi2_id' => $id_saksi2,
            'status'    => $status,
            'user_id'   => $user_id,
            'file_pengantar_rt'     => $file_pengantar,
            'file_kk'               => $file_kk,
            'file_ktp_ayah'         => $file_ktp_ayah,
            'file_ktp_ibu'          => $file_ktp_ibu,
            'file_ktp_saksi1'       => $file_ktp_saksi1,
            'file_ktp_saksi2'       => $file_ktp_saksi2,
        ]);
    }
}
