<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeterangan extends Model
{
    use HasFactory;
    protected $table = 'keterangan';
    protected $primaryKey = "id_keterangan";

    protected $fillable = [
        'pemohon_id',
        'berlaku_mulai',
        'berlaku_sampai',
        'keperluan',
        'keterangan_lain',
        'status',
        'user_id',
        'file_pengantar_rt',
        'file_kk',
        'file_ktp',
    ];

    static function add_surat_ket($id_pemohon, $berlaku_mulai, $berlaku_sampai, $keperluan, $keterangan_lain, $status, $user_id, $file_pengantar, $file_kk, $file_ktp){
        SuratKeterangan::create([

            'pemohon_id'        => $id_pemohon,
            'berlaku_mulai'     => $berlaku_mulai,
            'berlaku_sampai'    => $berlaku_sampai,
            'keperluan'         => $keperluan,
            'keterangan_lain'   => $keterangan_lain,
            'status'            => $status,
            'user_id'           => $user_id,
            'file_pengantar_rt' => $file_pengantar,
            'file_kk'           => $file_kk,
            'file_ktp'          => $file_ktp,
        ]);
    }

    static function edit_surat_ket($id_pemohon, $berlaku_mulai, $berlaku_sampai, $keperluan, $keterangan_lain, $status, $user_id, $file_pengantar, $file_kk, $file_ktp){
        SuratKeterangan::find($id_pemohon)->update([
            'berlaku_mulai'     => $berlaku_mulai,
            'berlaku_sampai'    => $berlaku_sampai,
            'keperluan'         => $keperluan,
            'keterangan_lain'   => $keterangan_lain,
            'status'            => $status,
            'user_id'           => $user_id,
            'file_pengantar_rt' => $file_pengantar,
            'file_kk'           => $file_kk,
            'file_ktp'          => $file_ktp,
        ]);
    }
}
