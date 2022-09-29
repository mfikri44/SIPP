<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class SuratKelahiran extends Model
{
    use HasFactory;

    protected $table = 'kelahiran';
    protected $primaryKey = "id_kelahiran";

    protected $fillable = [
        'nama_kk',
        'no_kk',
        'anak_id',
        'ibu_id',
        'ayah_id',
        'saksi1_id',
        'saksi2_id',
        'status',
        'user_id',
        'file_pengantar_rt',
        'file_kk',
        'file_surat_lahir',
        'file_buku_nikah',
        'file_ktp_ayah',
        'file_ktp_ibu',
        'file_ktp_saksi1',
        'file_ktp_saksi2',

    ];

    static function add_surat_kelahiran($nama_kk, $no_kk, $id_anak, $id_ibu, $id_ayah, $id_saksi1,  $id_saksi2,  $status, $user_id, $file_pengantar, $file_kk, $file_surat_lahir, $file_buku_nikah, $file_ktp_ayah, $file_ktp_ibu, $file_ktp_saksi1, $file_ktp_saksi2){
        SuratKelahiran::create([
            'nama_kk'   => $nama_kk,
            'no_kk'     => $no_kk,
            'anak_id'   => $id_anak,
            'ibu_id'    => $id_ibu,
            'ayah_id'   => $id_ayah,
            'saksi1_id' => $id_saksi1,
            'saksi2_id' => $id_saksi2,
            'status'    => $status,
            'user_id'   => $user_id,
            'file_pengantar_rt'     => $file_pengantar,
            'file_kk'               => $file_kk,
            'file_surat_lahir'      => $file_surat_lahir,
            'file_buku_nikah'       => $file_buku_nikah,
            'file_ktp_ayah'         => $file_ktp_ayah,
            'file_ktp_ibu'          => $file_ktp_ibu,
            'file_ktp_saksi1'       => $file_ktp_saksi1,
            'file_ktp_saksi2'       => $file_ktp_saksi2,
        ]);
    }

    static function edit_surat_kelahiran($nama_kk, $no_kk, $id_anak, $id_ibu, $id_ayah, $id_saksi1,  $id_saksi2,  $status, $user_id, $file_pengantar, $file_kk, $file_surat_lahir, $file_buku_nikah, $file_ktp_ayah, $file_ktp_ibu, $file_ktp_saksi1, $file_ktp_saksi2){
        SuratKelahiran::update([
            'nama_kk'   => $nama_kk,
            'no_kk'     => $no_kk,
            'anak_id'   => $id_anak,
            'ibu_id'    => $id_ibu,
            'ayah_id'   => $id_ayah,
            'saksi1_id' => $id_saksi1,
            'saksi2_id' => $id_saksi2,
            'status'    => $status,
            'user_id'   => $user_id,
            'file_pengantar_rt'     => $file_pengantar,
            'file_kk'               => $file_kk,
            'file_surat_lahir'      => $file_surat_lahir,
            'file_buku_nikah'       => $file_buku_nikah,
            'file_ktp_ayah'         => $file_ktp_ayah,
            'file_ktp_ibu'          => $file_ktp_ibu,
            'file_ktp_saksi1'       => $file_ktp_saksi1,
            'file_ktp_saksi2'       => $file_ktp_saksi2,
        ]);

    }
}
