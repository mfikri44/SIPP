<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\SuratKelahiran;
use App\Models\SuratKematian;
use App\Models\SuratKeterangan;
use App\Models\Anak;
use App\Models\Ayah;
use App\Models\Ibu;
use App\Models\Saksi1;
use App\Models\Saksi2;

class SuratMasukController extends Controller
{
    //menampilkan semua data
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function data_pending(Request $request, $status)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data_lahir = SuratKelahiran::join('anak', 'anak.id_anak', '=', 'kelahiran.anak_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kelahiran.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kelahiran.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kelahiran.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kelahiran.saksi2_id')
                        ->select('kelahiran.*', 'anak.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('status', $status)
                        ->paginate(50);
        $data_meninggal = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                        ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('status', $status)
                        ->paginate(50);
        $data_ket = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('status', $status)
                        ->paginate(50);
        return view('admin.surat-masuk.data', compact('data_lahir','data_meninggal','data_ket'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function data_selesai(Request $request, $status)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data_lahir = SuratKelahiran::join('anak', 'anak.id_anak', '=', 'kelahiran.anak_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kelahiran.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kelahiran.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kelahiran.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kelahiran.saksi2_id')
                        ->select('kelahiran.*', 'anak.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('status', $status)
                        ->paginate(50);
        $data_meninggal = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                        ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('status', $status)
                        ->paginate(50);
        $data_ket = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('status', $status)
                        ->paginate(50);
        return view('admin.surat-masuk.data-selesai', compact('data_lahir','data_meninggal','data_ket'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }


    public function data_ralat(Request $request, $status)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data_lahir = SuratKelahiran::join('anak', 'anak.id_anak', '=', 'kelahiran.anak_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kelahiran.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kelahiran.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kelahiran.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kelahiran.saksi2_id')
                        ->select('kelahiran.*', 'anak.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('status', $status)
                        ->paginate(50);
        $data_meninggal = SuratKematian::join('jenazah', 'jenazah.id_jenazah', '=', 'kematian.jenazah_id')
                        ->leftjoin('ayah','ayah.id_ayah','=', 'kematian.ayah_id')
                        ->leftjoin('ibu','ibu.id_ibu','=', 'kematian.ibu_id')
                        ->leftjoin('saksi1','saksi1.id_saksi1','=', 'kematian.saksi1_id')
                        ->leftjoin('saksi2','saksi2.id_saksi2','=', 'kematian.saksi2_id')
                        ->select('kematian.*', 'jenazah.*', 'ayah.*', 'ibu.*', 'saksi1.*', 'saksi2.*')
                        ->where('status', $status)
                        ->paginate(50);
        $data_ket = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('status', $status)
                        ->paginate(50);
        return view('admin.surat-masuk.data-ralat', compact('data_lahir','data_meninggal','data_ket'))->with('i', ($request->input('page', 1) - 1) * $pagination);
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

    public function detail_kmt(Request $request, $id_kematian)
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

    public function detail_ket(Request $request, $id_keterangan)
    {
        $this->middleware('auth');
        $pagination = 50;
        $data = SuratKeterangan::join('pemohon', 'pemohon.id_pemohon', '=', 'keterangan.pemohon_id')
                        ->select('keterangan.*', 'pemohon.*')
                        ->where('id_keterangan',$id_keterangan)
                        ->get();
        return view('admin.surat-keterangan.detail', compact('data'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function stat_update_bh(Request $request,$id_kelahiran)
    {
        $d = SuratKelahiran::find($id_kelahiran);
        $statdata = SuratKelahiran::select('status')
                ->where('id_kelahiran',$id_kelahiran)
                ->get();

        if ($d == null){
            return redirect('surat/data-selesai/'. 1)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKelahiran::find($id_kelahiran)->update($req);
        if($data){
            return redirect('surat/data-selesai/'. 1)->with('status', 'surat kelahiran Berhasil diedit !');
        }

        return redirect('surat/data-selesai/'. 1)->with('status', 'Gagal edit data surat kelahiran!');
        
    }

    public function stat_update_pd(Request $request,$id_kelahiran)
    {
        $d = SuratKelahiran::find($id_kelahiran);
        $statdata = SuratKelahiran::select('status')
                ->where('id_kelahiran',$id_kelahiran)
                ->get();

        if ($d == null){
            return redirect('surat/data/'. 2)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKelahiran::find($id_kelahiran)->update($req);
        if($data){

            return redirect('surat/data/'. 2)->with('status', 'surat kelahiran Berhasil diedit !');
        
        }

        return redirect('surat/data/'. 2)->with('status', 'Gagal edit data surat kelahiran!');
        
    }

    public function stat_update_rl(Request $request,$id_kelahiran)
    {
        $d = SuratKelahiran::find($id_kelahiran);
        $statdata = SuratKelahiran::select('status')
                ->where('id_kelahiran',$id_kelahiran)
                ->get();

        if ($d == null){
            return redirect('surat/data-ralat/'. 3)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKelahiran::find($id_kelahiran)->update($req);
        if($data){

                return redirect('surat/data-ralat/'. 3)->with('status', 'surat kelahiran Berhasil diedit !');
        
        }

        return redirect('surat/data-ralat/'. 3)->with('status', 'Gagal edit data surat kelahiran!');
        
    }

    public function stat_update_bh_kmt(Request $request,$id_kematian)
    {
        $d = SuratKematian::find($id_kematian);
        if ($d == null){
            return redirect('surat/data-selesai/'. 1)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKematian::find($id_kematian)->update($req);
        if($data){
            return redirect('surat/data-selesai/'. 1 )->with('status', 'surat kematian Berhasil diedit !');
        }

        return redirect('surat/data-selesai/'. 1)->with('status', 'Gagal edit data surat kematian!');
        
    }

    public function stat_update_pd_kmt(Request $request,$id_kematian)
    {
        $d = SuratKematian::find($id_kematian);
        if ($d == null){
            return redirect('surat/data/'. 2)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKematian::find($id_kematian)->update($req);
        if($data){
            return redirect('surat/data/'. 2 )->with('status', 'surat kematian Berhasil diedit !');
        }

        return redirect('surat/data/'. 2)->with('status', 'Gagal edit data surat kematian!');
        
    }
    
    public function stat_update_rl_kmt(Request $request,$id_kematian)
    {
        $d = SuratKematian::find($id_kematian);
        if ($d == null){
            return redirect('surat/data-ralat/'. 3)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKematian::find($id_kematian)->update($req);
        if($data){
            return redirect('surat/data-ralat/'. 3 )->with('status', 'surat kematian Berhasil diedit !');
        }

        return redirect('surat/data-ralat/'. 3)->with('status', 'Gagal edit data surat kematian!');
        
    }

    public function stat_update_bh_ket(Request $request,$id_keterangan)
    {
        $d = SuratKeterangan::find($id_keterangan);
        if ($d == null){
            return redirect('surat/data-selesai/'. 1)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKeterangan::find($id_keterangan)->update($req);
        if($data){
            return redirect('surat/data-selesai/'. 1)->with('status', 'surat keterangan Berhasil diedit !');
        }

        return redirect('surat/data-selesai/'. 1)->with('status', 'Gagal edit data surat keterangan!');
        
    }

    public function stat_update_pd_ket(Request $request,$id_keterangan)
    {
        $d = SuratKeterangan::find($id_keterangan);
        if ($d == null){
            return redirect('surat/data/'. 2)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKeterangan::find($id_keterangan)->update($req);
        if($data){
            return redirect('surat/data/'. 2)->with('status', 'surat keterangan Berhasil diedit !');
        }

        return redirect('surat/data/'. 2)->with('status', 'Gagal edit data surat keterangan!');
        
    }

    public function stat_update_rl_ket(Request $request,$id_keterangan)
    {
        $d = SuratKeterangan::find($id_keterangan);
        if ($d == null){
            return redirect('surat/data-ralat/'. 3)->with('status', 'Data tidak Ditemukan !');
        }

        $req = $request->all();

        
        $data = SuratKeterangan::find($id_keterangan)->update($req);
        if($data){
            return redirect('surat/data-ralat/'. 3)->with('status', 'surat keterangan Berhasil diedit !');
        }

        return redirect('surat/data-ralat/'. 3)->with('status', 'Gagal edit data surat keterangan!');
        
    }
    public function delete($id)
    {
        $data = SuratKelahiran::find($id);
        if ($data == null) {
            return redirect('surat/data-selesai/'. 1)->with('status', 'Data tidak ditemukan !');
        }
        
        $delete = $data->delete();
        if ($delete) {
            return redirect('surat/data-selesai/'. 1)->with('status', 'Berhasil hapus surat kelahiran !');
        }
        return redirect('surat/data-selesai/'. 1)->with('status', 'Gagal hapus surat kelahiran !');
    }

    public function delete_kmt($id)
    {
        $data = SuratKematian::find($id);
        if ($data == null) {
            return redirect('surat/data-selesai/'. 1)->with('status', 'Data tidak ditemukan !');
        }
        
        $delete = $data->delete();
        if ($delete) {
            return redirect('surat/data-selesai/'. 1)->with('status', 'Berhasil hapus surat kematian !');
        }
        return redirect('surat/data-selesai/'. 1)->with('status', 'Gagal hapus surat kematian !');
    }

    public function delete_ket($id)
    {
        $data = SuratKeterangan::find($id);
        if ($data == null) {
            return redirect('surat/data-selesai/'. 1)->with('status', 'Data tidak ditemukan !');
        }
        
        $delete = $data->delete();
        if ($delete) {
            return redirect('surat/data-selesai/'. 1)->with('status', 'Berhasil hapus surat kematian !');
        }
        return redirect('surat/data-selesai/'. 1)->with('status', 'Gagal hapus surat kematian !');
    }
}
