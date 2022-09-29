<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\SuratKematian;
use App\Models\Jenazah;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\Saksi1;
use App\Models\Saksi2;
use PDF;
use Psy\Readline\Transient;

class SuratKematianController extends Controller
{
    ///menampilkan semua data
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(Request $request, $user_id)
    {
        
        $this->middleware('auth');
        $pagination = 50;
        $data = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                        ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('user_id', $user_id)
                        ->paginate(50);
        return view('admin.surat-kematian.index', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function file(Request $request, $id_kematian)
    {

        $data               = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                            ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                            ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                            ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                            ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                            ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                            ->where('id_kematian',$id_kematian)
                            ->get();

        $pdf = PDF::loadView('admin.surat-kematian.file', compact('data'));
    
        return $pdf->download('file-surat-kematian.pdf');
    }

    public function detail(Request $request, $id_kematian)
    {
        $this->middleware('auth');
        $pagination = 50;
         $data = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                        ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('id_kematian',$id_kematian)
                        ->get();
      
        return view('admin.surat-kematian.detail', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
    public function create()
    {
        return view('admin.surat-kematian.add.create'); 
    }

    public function insert(Request $data)
    {

        $dt_jenazah = Jenazah::create([
            'nik_jenazah'             => $data['nik_jenazah'],
            'nama_jenazah'    => $data['nama_jenazah'],
            'jenis_kelamin_jenazah'     => $data['jenis_kelamin_jenazah'],
            'tempat_lahir_jenazah'     => $data['tempat_lahir_jenazah'],
            'tanggal_lahir_jenazah'             => $data['tanggal_lahir_jenazah'],
            'umur_jenazah'    => $data['umur_jenazah'],
            'agama_jenazah'      => $data['agama_jenazah'],
            'alamat_jenazah'  => $data['alamat_jenazah'],
            'desa_jenazah'               => $data['desa_jenazah'],
            'kecamatan_jenazah'    => $data['kecamatan_jenazah'],
            'kabupaten_jenazah'            => $data['kabupaten_jenazah'],
            'provinsi_jenazah'           => $data['provinsi_jenazah'],
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

        $tanggal_kematian       = $data['tanggal_kematian'];
        $jam_kematian           = $data['jam_kematian'];
        $sebab_kematian         = $data['sebab_kematian'];
        $tempat_kematian        = $data['tempat_kematian'];
        $menerangkan_kematian   = $data['menerangkan_kematian'];

        $status     = $data['status'];
        $user_id    = $data['user_id'];
        $id_jenazah = $dt_jenazah['id_jenazah'];
        $id_ayah    = $dt_ayah['id_ayah'];
        $id_ibu     = $dt_ibu['id_ibu'];
        $id_saksi1  = $dt_saksi1['id_saksi1'];
        $id_saksi2  = $dt_saksi2['id_saksi2'];
        $file_pengantar  = $data['file_pengantar_rt'];
        $file_kk  = $data['file_kk'];
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

        $cat = SuratKematian::add_surat_kematian($nama_kk, $no_kk, $tanggal_kematian, $jam_kematian, $sebab_kematian, $tempat_kematian, $menerangkan_kematian, $id_jenazah, $id_ibu, $id_ayah, $id_saksi1,  $id_saksi2,  $status, $user_id, $file_pengantar, $file_kk, $file_ktp_ayah, $file_ktp_ibu, $file_ktp_saksi1, $file_ktp_saksi2);
       
        if($cat){
            return redirect('surat-kematian/'.  $user_id )->with('status', 'Berhasil menambah data!');
        }

        return redirect('surat-kematian/' .  $user_id )->with('status', 'Gagal Menambah data!');
        
    }

    public function edit($id_kematian)
    {
        $data = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                            ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                            ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                            ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                            ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                            ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                            ->where('id_kematian',$id_kematian)
                            ->get();
        return view('admin.surat-kematian.edit', compact('data'));
    }

    public function update(Request $data,$id_kematian)
    {
        $d = SuratKematian::find($id_kematian);
        if ($d == null){
            return redirect('surat-kematian')->with('status', 'Data tidak Ditemukan !');
        }

        $user_id    = $data['user_id'];
        $id_jenazah    = $data['jenazah_id'];
        $id_ibu    = $data['ibu_id'];
        $id_ayah    = $data['ayah_id'];
        $id_saksi1    = $data['saksi1_id'];
        $id_saksi2    = $data['saksi2_id'];
        
        $dt_kematian = SuratKematian::find($id_kematian)->update([
            'nama_kk'   => $data['nama_kk'],
            'no_kk'     => $data['no_kk'],
            'tanggal_kematian'      => $data['tanggal_kematian'],
            'jam_kematian'          => $data['jam_kematian'],
            'sebab_kematian'        => $data['sebab_kematian'],
            'tempat_kematian'       => $data['tempat_kematian'],
            'menerangkan_kematian'  => $data['menerangkan_kematian'],
        ]);

        $dt_jenazah = Jenazah::find($id_jenazah)->update([
            'nik_jenazah'           => $data['nik_jenazah'],
            'nama_jenazah'          => $data['nama_jenazah'],
            'jenis_kelamin_jenazah'     => $data['jenis_kelamin_jenazah'],
            'tempat_lahir_jenazah'     => $data['tempat_lahir_jenazah'],
            'tanggal_lahir_jenazah'             => $data['tanggal_lahir_jenazah'],
            'umur_jenazah'    => $data['umur_jenazah'],
            'agama_jenazah'      => $data['agama_jenazah'],
            'alamat_jenazah'  => $data['alamat_jenazah'],
            'desa_jenazah'               => $data['desa_jenazah'],
            'kecamatan_jenazah'    => $data['kecamatan_jenazah'],
            'kabupaten_jenazah'            => $data['kabupaten_jenazah'],
            'provinsi_jenazah'           => $data['provinsi_jenazah'],
        ]);

        $dt_ayah = Ayah::find($id_ayah)->update([
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

        $dt_ibu = Ibu::find($id_ibu)->update([
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

        $dt_saksi1 = Saksi1::find($id_saksi1)->update([
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

        $dt_saksi2 = Saksi2::find($id_saksi2)->update([
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

        if($dt_keterangan){
            return redirect('surat-kematian')->with('status', 'surat kelahiran Berhasil diedit !');
        }

        return redirect('surat-kematian')->with('status', 'Gagal edit data surat kelahiran!');
        
    }

    public function delete($id)
    {
    $data = SuratKematian::find($id);
    if ($data == null) {
        return redirect('surat-kematian')->with('status', 'Data tidak ditemukan !');
    }
    
    $delete = $data->delete();
    if ($delete) {
        return redirect('surat-kematian')->with('status', 'Berhasil hapus surat kelahiran !');
    }
    return redirect('surat-kematian')->with('status', 'Gagal hapus surat kelahiran !');
    }
}