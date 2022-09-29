<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\SuratKeterangan;
use App\Models\Pemohon;
use PDF;
use Psy\Readline\Transient;

class SuratKeteranganController extends Controller
{ 
    ///menampilkan semua data
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request,$user_id)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('user_id', $user_id)
                        ->paginate(50);
        return view('admin.surat-keterangan.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function detail(Request $request, $id_keterangan)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('id_keterangan',$id_keterangan)
                        ->get();
        return view('admin.surat-keterangan.detail', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }   
    
    public function file(Request $request, $id_keterangan)
    {

        $pagination = 2;
        $data               = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                            ->select('keterangan.*', 'pemohon.*')
                            ->where('id_keterangan',$id_keterangan)
                            ->get();

        $pdf = PDF::loadView('admin.surat-keterangan.file', compact('data'));
    
        return $pdf->download('file.pdf');
    }
    public function create()
    {
        return view('admin.surat-keterangan.add.create'); 
    }

    public function insert(Request $data)
    {
        $dt_pemohon = Pemohon::create([
            'nama_pemohon'              => $data['nama_pemohon'],
            'jenis_kelamin_pemohon'     => $data['jenis_kelamin_pemohon'],
            'tempat_lahir_pemohon'      => $data['tempat_lahir_pemohon'],
            'tanggal_lahir_pemohon'     => $data['tanggal_lahir_pemohon'],
            'agama_pemohon'             => $data['agama_pemohon']
        ]);


        $status     = $data['status'];
        $user_id    = $data['user_id'];

        $id_pemohon = $dt_pemohon['id_pemohon'];
        $berlaku_mulai = $data['berlaku_mulai'];
        $berlaku_sampai = $data['berlaku_sampai'];
        $keperluan = $data['keperluan'];
        $keterangan_lain = $data['keterangan_lain'];
        
        $file_pengantar  = $data['file_pengantar_rt'];
        $file_kk  = $data['file_kk'];
        $file_ktp  = $data['file_ktp'];


        $data['file_pengantar_rt'] = "";
        if ($data->hasFile('file_pengantar_rt')){
            $file_pengantar = Str::random("3") . "-" . $data->file_pengantar_rt->getClientOriginalName();
            $data->file('file_pengantar_rt')->move("file/pengantar_rt/",$file_pengantar);
            $requests['file_pengantar_rt']="file/pengantar_rt/" . $file_pengantar;
        }

        $data['file_kk'] = "";
        if ($data->hasFile('file_kk')){
            $file_kk = Str::random("3") . "-" . $data->file_kk->getClientOriginalName();
            $data->file('file_kk')->move("file/kk/",$file_kk);
            $requests['file_kk']="file/kk/" . $file_kk;
        }
                
        $data['file_ktp'] = "";
        if ($data->hasFile('file_ktp')){
            $file_ktp = Str::random("3") . "-" . $data->file_ktp->getClientOriginalName();
            $data->file('file_ktp')->move("file/ktp/",$file_ktp);
            $requests['file_ktp']="file/ktp/" . $file_ktp;
        }

        $cat = SuratKeterangan::add_surat_ket($id_pemohon, $berlaku_mulai, $berlaku_sampai, $keperluan, $keterangan_lain, $status, $user_id, $file_pengantar, $file_kk, $file_ktp);
       
        if($cat){
            return redirect('surat-keterangan/' . $user_id)->with('status', 'Berhasil menambah data!');
        }

        return redirect('surat-keterangan/'. $user_id)->with('status', 'Gagal Menambah data!');
        
    }

    public function edit($id)
    {
        $this->middleware('auth');
        $data = SuratKeterangan::
                        join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('keterangan.id_keterangan',$id)
                        ->get();
        return view('admin.surat-keterangan.edit', compact('data'));
    }

    public function update(Request $data,$id_keterangan)
    {
        $datass = SuratKeterangan::findorFail($id_keterangan);
        if ($datass == null){
            return redirect('surat-keterangan')->with('status', 'Data tidak Ditemukan !');
        }
        
        $user_id    = $data['user_id'];
        $id_pemohon    = $data['pemohon_id'];

        $dt_keterangan = SuratKeterangan::find($id_keterangan)->update([
            'berlaku_mulai'     => $data['berlaku_mulai'],
            'berlaku_sampai'    => $data['berlaku_sampai'],
            'keperluan'         => $data['keperluan'],
            'keterangan_lain'   => $data['keterangan_lain'],
            'status'            => $data['status'],
            'user_id'           => $data['user_id'],
            
        ]);

        $dt_pemohon = Pemohon::find($id_pemohon)->update([
            'nama_pemohon'              => $data['nama_pemohon'],
            'jenis_kelamin_pemohon'     => $data['jenis_kelamin_pemohon'],
            'tempat_lahir_pemohon'      => $data['tempat_lahir_pemohon'],
            'tanggal_lahir_pemohon'     => $data['tanggal_lahir_pemohon'],
            'agama_pemohon'             => $data['agama_pemohon']
        ]);
        
        if($dt_keterangan){
            return redirect('surat-keterangan/' . $user_id)->with('status', 'surat kelahiran Berhasil diedit !');
        }else{
            return redirect('surat-keterangan/'  . $user_id)->with('status', 'Gagal edit data surat kelahiran!');
        }

        return redirect('surat-keterangan/'  . $user_id)->with('status', 'Gagal edit data surat kelahiran!');
        
    }

    public function delete($id)
    {
    $data = SuratKeterangan::find($id);
    if ($data == null) {
        return redirect('surat-keterangan')->with('status', 'Data tidak ditemukan !');
    }
    
    $delete = $data->delete();
    if ($delete) {
        return redirect('surat-keterangan')->with('status', 'Berhasil hapus surat kelahiran !');
    }
    return redirect('surat-keterangan')->with('status', 'Gagal hapus surat kelahiran !');
    }
}