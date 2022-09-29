<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\SuratKelahiran;
use App\Models\Anak;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\Saksi1;
use App\Models\Saksi2;
use PDF;
use Psy\Readline\Transient;

class SuratKelahiranController extends Controller
{
    //menampilkan semua data
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request, $user_id)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data = SuratKelahiran::join('anak', 'anak.id_anak', '=', 'kelahiran.anak_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kelahiran.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kelahiran.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kelahiran.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kelahiran.saksi2_id')
                        ->select('kelahiran.*', 'anak.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('user_id', $user_id)
                        ->paginate(50);
        return view('admin.surat-kelahiran.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function file(Request $request, $id_kelahiran)
    {

        $data               = SuratKelahiran::join('anak', 'anak.id_anak', '=', 'kelahiran.anak_id')
                            ->leftjoin('ayah','ayah.id_ayah','=', 'kelahiran.ayah_id')
                            ->leftjoin('ibu','ibu.id_ibu','=', 'kelahiran.ibu_id')
                            ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kelahiran.saksi1_id')
                            ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kelahiran.saksi2_id')
                            ->select('kelahiran.*', 'anak.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                            ->where('id_kelahiran',$id_kelahiran)
                            ->get();

        $pdf = PDF::loadView('admin.surat-kelahiran.file', compact('data'));
    
        return $pdf->download('file-surat-kelahiran.pdf');
    }

    public function detail(Request $request, $id_kelahiran)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data = SuratKelahiran::join('anak', 'anak.id_anak', '=', 'kelahiran.anak_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kelahiran.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kelahiran.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kelahiran.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kelahiran.saksi2_id')
                        ->select('kelahiran.*', 'anak.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('id_kelahiran',$id_kelahiran)
                        ->get();
        return view('admin.surat-kelahiran.detail', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        return view('admin.surat-kelahiran.add.create'); 
    }

    public function insert(Request $data)
    {
        $dt_anak = Anak::create([
            'nama_anak'             => $data['nama_anak'],
            'jenis_kelamin_anak'    => $data['jenis_kelamin_anak'],
            'tempat_lahir_anak'     => $data['tempat_lahir_anak'],
            'kota_anak'             => $data['kota_anak'],
            'tanggal_lahir_anak'    => $data['tanggal_lahir_anak'],
            'waktu_lahir_anak'      => $data['waktu_lahir_anak'],
            'jenis_kelahiran_anak'  => $data['jenis_kelahiran_anak'],
            'anak_ke'               => $data['anak_ke'],
            'penolong_kelahiran'    => $data['penolong_kelahiran'],
            'berat_anak'            => $data['berat_anak'],
            'tinggi_anak'           => $data['tinggi_anak'],
        ]);

        $dt_ayah = Ayah::create([
            'nik_ayah'                  => $data['nik_ayah'],
            'nama_ayah'                 => $data['nama_ayah'],
            'tempat_lahir_ayah'         => $data['tempat_lahir_ayah'],
            'tanggal_lahir_ayah'        => $data['tanggal_lahir_ayah'],
            'umur_ayah'                 => $data['umur_ayah'],
            'pekerjaan_ayah'            => $data['pekerjaan_ayah'],
            'alamat_ayah'               => $data['alamat_ayah'],
            'desa_ayah'                 => $data['desa_ayah'],
            'kecamatan_ayah'            => $data['kecamatan_ayah'],
            'kabupaten_ayah'            => $data['kabupaten_ayah'],
            'provinsi_ayah'             => $data['provinsi_ayah'],
            'kewarganegaraan_ayah'      => $data['kewarganegaraan_ayah'],
            'kebangsaan_ayah'           => $data['kebangsaan_ayah'],
        ]);

        $dt_ibu = Ibu::create([
            'nik_ibu'                  => $data['nik_ibu'],
            'nama_ibu'                 => $data['nama_ibu'],
            'tempat_lahir_ibu'         => $data['tempat_lahir_ibu'],
            'tanggal_lahir_ibu'        => $data['tanggal_lahir_ibu'],
            'umur_ibu'                 => $data['umur_ibu'],
            'pekerjaan_ibu'            => $data['pekerjaan_ibu'],
            'alamat_ibu'               => $data['alamat_ibu'],
            'desa_ibu'                 => $data['desa_ibu'],
            'kecamatan_ibu'            => $data['kecamatan_ibu'],
            'kabupaten_ibu'           => $data['kabupaten_ibu'],
            'provinsi_ibu'             => $data['provinsi_ibu'],
            'kewarganegaraan_ibu'      => $data['kewarganegaraan_ibu'],
            'tanggal_kawin'            => $data['tanggal_kawin'],
            'kebangsaan_ibu'           => $data['kebangsaan_ibu'],
        ]);

        $dt_saksi1 = Saksi1::create([
            'nik_saksi1'                  => $data['nik_saksi1'],
            'nama_saksi1'                 => $data['nama_saksi1'],
            'tempat_lahir_saksi1'        => $data['tempat_lahir_saksi1'],
            'tanggal_lahir_saksi1'        => $data['tanggal_lahir_saksi1'],
            'umur_saksi1'                 => $data['umur_saksi1'],
            'pekerjaan_saksi1'            => $data['pekerjaan_saksi1'],
            'alamat_saksi1'               => $data['alamat_saksi1'],
            'desa_saksi1'                 => $data['desa_saksi1'],
            'kecamatan_saksi1'            => $data['kecamatan_saksi1'],
            'kabupaten_saksi1'            => $data['kabupaten_saksi1'],
            'provinsi_saksi1'             => $data['provinsi_saksi1'],
            'kewarganegaraan_saksi1'      => $data['kewarganegaraan_saksi1'],
            
        ]);

        $dt_saksi2 = Saksi2::create([
            'nik_saksi2'                  => $data['nik_saksi2'],
            'nama_saksi2'                 => $data['nama_saksi2'],
            'tempat_lahir_saksi2'        => $data['tempat_lahir_saksi2'],
            'tanggal_lahir_saksi2'        => $data['tanggal_lahir_saksi2'],
            'umur_saksi2'                 => $data['umur_saksi2'],
            'pekerjaan_saksi2'            => $data['pekerjaan_saksi2'],
            'alamat_saksi2'               => $data['alamat_saksi2'],
            'desa_saksi2'                 => $data['desa_saksi2'],
            'kecamatan_saksi2'            => $data['kecamatan_saksi2'],
            'kabupaten_saksi2'            => $data['kabupaten_saksi2'],
            'provinsi_saksi2'             => $data['provinsi_saksi2'],
            'kewarganegaraan_saksi2'      => $data['kewarganegaraan_saksi2'],
           
        ]);

        $nama_kk    = $data['nama_kk'];
        $no_kk      = $data['no_kk'];
        $status     = $data['status'];
        $user_id    = $data['user_id'];
        $id_anak    = $dt_anak['id_anak'];
        $id_ayah    = $dt_ayah['id_ayah'];
        $id_ibu     = $dt_ibu['id_ibu'];
        $id_saksi1  = $dt_saksi1['id_saksi1'];
        $id_saksi2  = $dt_saksi2['id_saksi2'];
        $file_pengantar  = $data['file_pengantar_rt'];
        $file_kk  = $data['file_kk'];
        $file_surat_lahir  = $data['file_surat_lahir'];
        $file_buku_nikah  = $data['file_buku_nikah'];
        $file_ktp_ayah  = $data['file_ktp_ayah'];
        $file_ktp_ibu  = $data['file_ktp_ibu'];
        $file_ktp_saksi1  = $data['file_ktp_saksi1'];
        $file_ktp_saksi2  = $data['file_ktp_saksi2'];

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
        
        $data['file_surat_lahir'] = "";
        if ($data->hasFile('file_surat_lahir')){
            $file_surat_lahir = Str::random("3") . "-" . $data->file_surat_lahir->getClientOriginalName();
            $data->file('file_surat_lahir')->move("file/surat_lahir/",$file_surat_lahir);
            $requests['file_surat_lahir']="file/surat_lahir/" . $file_surat_lahir;
        }
                
        $data['file_buku_nikah'] = "";
        if ($data->hasFile('file_buku_nikah')){
            $file_buku_nikah = Str::random("3") . "-" . $data->file_buku_nikah->getClientOriginalName();
            $data->file('file_buku_nikah')->move("file/buku_nikah/",$file_buku_nikah);
            $requests['file_buku_nikah']="file/buku_nikah/" . $file_buku_nikah;
        }
                
        $data['file_ktp_ayah'] = "";
        if ($data->hasFile('file_ktp_ayah')){
            $file_ktp_ayah = Str::random("3") . "-" . $data->file_ktp_ayah->getClientOriginalName();
            $data->file('file_ktp_ayah')->move("file/ktp_ayah/",$file_ktp_ayah);
            $requests['file_ktp_ayah']="file/ktp_ayah/" . $file_ktp_ayah;
        }
                
        $data['file_ktp_ibu'] = "";
        if ($data->hasFile('file_ktp_ibu')){
            $file_ktp_ibu = Str::random("3") . "-" . $data->file_ktp_ibu->getClientOriginalName();
            $data->file('file_ktp_ibu')->move("file/ktp_ibu/",$file_ktp_ibu);
            $requests['file_ktp_ibu']="file/ktp_ibu/" . $file_ktp_ibu;
        }
                
        $data['file_ktp_saksi1'] = "";
        if ($data->hasFile('file_ktp_saksi1')){
            $file_ktp_saksi1 = Str::random("3") . "-" . $data->file_ktp_saksi1->getClientOriginalName();
            $data->file('file_ktp_saksi1')->move("file/ktp_saksi1/",$file_ktp_saksi1);
            $requests['file_ktp_saksi1']="file/ktp_saksi1/" . $file_ktp_saksi1;
        }
                
        $data['file_ktp_saksi2'] = "";
        if ($data->hasFile('file_ktp_saksi2')){
            $file_ktp_saksi2 = Str::random("3") . "-" . $data->file_ktp_saksi2->getClientOriginalName();
            $data->file('file_ktp_saksi2')->move("file/ktp_saksi2/",$file_ktp_saksi2);
            $requests['file_ktp_saksi2']="file/ktp_saksi2/" . $file_ktp_saksi2;
        }

        $cat = SuratKelahiran::add_surat_kelahiran($nama_kk, $no_kk, $id_anak, $id_ibu, $id_ayah, $id_saksi1,  $id_saksi2,  $status, $user_id, $file_pengantar, $file_kk, $file_surat_lahir, $file_buku_nikah, $file_ktp_ayah, $file_ktp_ibu, $file_ktp_saksi1, $file_ktp_saksi2);
       
        if($cat){
            return redirect('surat-kelahiran/'. $user_id )->with('status', 'Berhasil menambah data!');
        }

        return redirect('surat-kelahiran/'. $user_id )->with('status', 'Gagal Menambah data!');
        
    }

    public function edit($id)
    {
        $data = SuratKelahiran::find($id);
        return view('admin.surat-kelahiran.edit', compact('data'));
    }

    public function update(Request $request,$id)
    {
        $d = SuratKelahiran::find($id);
        if ($d == null){
            return redirect('surat-kelahiran')->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKelahiran::find($id)->update($req);
        if($data){
            return redirect('surat-kelahiran')->with('status', 'surat kelahiran Berhasil diedit !');
        }

        return redirect('surat-kelahiran')->with('status', 'Gagal edit data surat kelahiran!');
        
    }

    public function delete($id)
    {
    $data = SuratKelahiran::find($id);
    if ($data == null) {
        return redirect('surat-kelahiran')->with('status', 'Data tidak ditemukan !');
    }
    
    $delete = $data->delete();
    if ($delete) {
        return redirect('surat-kelahiran')->with('status', 'Berhasil hapus surat kelahiran !');
    }
    return redirect('surat-kelahiran')->with('status', 'Gagal hapus surat kelahiran !');
    }
}
