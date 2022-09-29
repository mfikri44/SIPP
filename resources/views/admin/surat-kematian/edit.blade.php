@extends('admin.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Surat Kematian</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Surat Kematian</h6>
        
            <h6 class="mb-1 mt-1">Pemerintah Desa/Kelurahan : PURWOSARI</h6>
            <h6 class="mb-1 mt-1">Kecamatan : KOTA/KUDUS</h6>
            <h6 class="mb-1 mt-1">Kabupaten/Kota : KUDUS</h6>
            <h6 class="mb-1 mt-1 ">Kode Wilayah : 3319021001</h6>
          </div>
        <div class="card-body">
            <div class="p-10">
                    <form method="post" class="user" action="{{ url('surat-kematian/edit/' . $data->first()->id_kematian) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kepala Keluarga</label>
                            <input type="text" class="form-control"
                                name="nama_kk" placeholder="Nama Lengkap" value="{{ $data->first()->nama_kk }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Kartu Keluarga</label>
                            <input type="number" class="form-control"
                                name="no_kk" placeholder="Nomor KK" value="{{ $data->first()->no_kk }}">
                        </div>
                        <hr>
<!-- FORM Jenazah-->
<!-- FORM Jenazah-->
<!-- FORM Jenazah-->
<!-- FORM Jenazah-->
<!-- FORM Jenazah-->
                        <label class="text-justify" for="form-class">Form Jenazah</label>
                
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" class="form-control"
                                name="nik_jenazah" placeholder="Nama Lengkap"  value="{{ $data->first()->nik_jenazah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_jenazah" placeholder="Nama Lengkap" value="{{ $data->first()->nama_jenazah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin_jenazah" class="select form-control form-control-md">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_jenazah" value="{{ $data->first()->tempat_lahir_jenazah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_jenazah" value="{{ $data->first()->tanggal_lahir_jenazah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_jenazah" value="{{ $data->first()->umur_jenazah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama_jenazah" class="select form-control form-control-md">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konguchu">Konguchu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_jenazah" placeholder="Alamat lengkap" value="{{ $data->first()->alamat_jenazah }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_jenazah" placeholder="Desa" value="{{ $data->first()->desa_jenazah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_jenazah" placeholder="Kecamatan" value="{{ $data->first()->kecamatan_jenazah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_jenazah" placeholder="Kabupaten" value="{{ $data->first()->kabupaten_jenazah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_jenazah" placeholder="Provinsi" value="{{ $data->first()->provinsi_jenazah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kematian</label>
                            <input type="date" class="form-control"
                                name="tanggal_kematian" value="{{ $data->first()->tanggal_kematian }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jam Kematian</label>
                            <input type="time" class="form-control"
                                name="jam_kematian" value="{{ $data->first()->jam_kematian }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Kematian</label>
                            <input type="text" class="form-control"
                                name="tempat_kematian" value="{{ $data->first()->tempat_kematian }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Sebab Kematian</label>
                            <select name="sebab_kematian" class="select form-control form-control-md">
                                <option value="Sakit biasa/tua">Sakit biasa/tua</option>
                                <option value="Wabah penyakit">Wabah penyakit</option>
                                <option value="Kecelakaan">Kecelakaan</option>
                                <option value="Kriminalitas">Kriminalitas</option>
                                <option value="Bunuh diri">Bunuh diri</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Yang Menerangkan</label>
                            <select name="menerangkan_kematian" class="select form-control form-control-md">
                              <option value="Dokter">Dokter</option>
                              <option value="Tenaga/Kesehatan">Tenaga/Kesehatan</option>
                              <option value="Kepolisian">Kepolisian</option>
                              <option value="Lainnya">Lainnya : Keluarga</option>
                            </select>
                        </div>

<!-- FORM IBU ANAK-->
<!-- FORM IBU ANAK-->
<!-- FORM IBU ANAK-->
<!-- FORM IBU ANAK-->
<!-- FORM IBU ANAK-->
                        <hr>
                        <label class="text-justify" for="form-class">Form Ibu Anak</label>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" class="form-control"
                                name="nik_ibu" placeholder="NIK" value="{{ $data->first()->nik_ibu }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_ibu" placeholder="Lengkap" value="{{ $data->first()->nama_ibu }}">
                        </div>                       
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_ibu"  value="{{ $data->first()->tempat_lahir_ibu }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_ibu" value="{{ $data->first()->tanggal_lahir_ibu }}">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_ibu" placeholder="Umur" value="{{ $data->first()->umur_ibu }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_ibu" placeholder="Pekerjaan" value="{{ $data->first()->pekerjaan_ibu }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_ibu" placeholder="Alamat lengkap" value="{{ $data->first()->alamat_ibu }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_ibu" placeholder="Desa" value="{{ $data->first()->desa_ibu }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_ibu" placeholder="Kecamatan" value="{{ $data->first()->kecamatan_ibu }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_ibu" placeholder="Kabupaten" value="{{ $data->first()->kabupaten_ibu }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_ibu" placeholder="Provinsi" value="{{ $data->first()->provinsi_ibu }}">
                        </div>
                        <div class="form-group">
                            <label for="">Kewarganegaraan</label>
                            <select name="kewarganegaraan_ibu" class="select form-control form-control-md">
                              <option value="WNI">WNI</option>
                              <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Perkawinan</label>
                            <input type="date" class="form-control"
                                name="tanggal_kawin"  value="{{ $data->first()->tanggal_kawin }}">
                        </div>
                        <div class="form-group">
                            <label for="">Kebangsaan</label>
                            <input type="text" class="form-control"
                                name="kebangsaan_ibu" placeholder="Negara" value="{{ $data->first()->kebangsaan_ibu }}">
                        </div>
<!-- FORM AYAH ANAK-->
<!-- FORM AYAH ANAK-->
<!-- FORM AYAH ANAK-->
<!-- FORM AYAH ANAK-->
<!-- FORM AYAH ANAK-->
                        <hr>
                        <label class="text-justify" for="form-class">Form Ayah Anak</label>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" class="form-control"
                                name="nik_ayah" placeholder="NIK" value="{{ $data->first()->nik_ayah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_ayah" placeholder="Nama Lengkap" value="{{ $data->first()->nama_ayah }}">
                        </div>                       
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_ayah" value="{{ $data->first()->tempat_lahir_ayah }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_ayah" value="{{ $data->first()->tanggal_lahir_ayah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_ayah" placeholder="Umur" value="{{ $data->first()->umur_ayah }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_ayah" placeholder="Pekerjaan" value="{{ $data->first()->pekerjaan_ayah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_ayah" placeholder="Alamat lengkap" value="{{ $data->first()->alamat_ayah }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_ayah" placeholder="Desa" value="{{ $data->first()->desa_ayah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_ayah" placeholder="Kecamatan" value="{{ $data->first()->kecamatan_ayah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_ayah" placeholder="Kabupaten" value="{{ $data->first()->kabupaten_ayah }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_ayah" placeholder="Provinsi" value="{{ $data->first()->provinsi_ayah }}">
                        </div>
                        <div class="form-group">
                            <label for="">Kewarganegaraan</label>
                            <select name="kewarganegaraan_ayah" class="select form-control form-control-md">
                              <option value="WNI">WNI</option>
                              <option value="WNA">WNA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kebangsaan</label>
                            <input type="text" class="form-control"
                                name="kebangsaan_ayah" placeholder="Negara" value="{{ $data->first()->kebangsaan_ayah }}">
                        </div>

<!-- FORM SAKSI 1-->
<!-- FORM SAKSI 1-->
<!-- FORM SAKSI 1-->
<!-- FORM SAKSI 1-->
<!-- FORM SAKSI 1-->
                        <hr>
                        <label class="text-justify" for="form-class">Form Saksi 1</label>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" class="form-control"
                                name="nik_saksi1" placeholder="NIK" value="{{ $data->first()->nik_saksi1 }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_saksi1" placeholder="Nama Lengkap" value="{{ $data->first()->nama_saksi1 }}">
                        </div>          
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_saksi1" placeholder="Kota" value="{{ $data->first()->tempat_lahir_saksi1 }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_saksi1" value="{{ $data->first()->tanggal_lahir_saksi1 }}">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_saksi1" placeholder="Umur" value="{{ $data->first()->umur_saksi1 }}">
                        </div> 
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_saksi1" placeholder="Pekerjaan" value="{{ $data->first()->pekerjaan_saksi1 }}">
                        </div>          
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_saksi1" placeholder="Alamat lengkap" value="{{ $data->first()->alamat_saksi1 }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_saksi1" placeholder="Desa" value="{{ $data->first()->desa_saksi1 }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_saksi1" placeholder="Kecamatan" value="{{ $data->first()->kecamatan_saksi1 }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_saksi1" placeholder="Kabupaten" value="{{ $data->first()->kabupaten_saksi1 }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_saksi1" placeholder="Provinsi" value="{{ $data->first()->provinsi_saksi1 }}">
                        </div>

<!-- FORM SAKSI 2-->
<!-- FORM SAKSI 2-->
<!-- FORM SAKSI 2-->
<!-- FORM SAKSI 2-->
<!-- FORM SAKSI 2-->
                        <hr>
                        <label class="text-justify" for="form-class">Form Saksi 2</label>
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="number" class="form-control"
                                name="nik_saksi2" placeholder="NIK" value="{{ $data->first()->nik_saksi2 }}">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_saksi2" placeholder="Nama Lengkap" value="{{ $data->first()->nama_saksi2 }}">
                        </div>          
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_saksi2" placeholder="Kota" value="{{ $data->first()->tempat_lahir_saksi2 }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_saksi2" value="{{ $data->first()->tanggal_lahir_saksi2 }}">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_saksi2" placeholder="Umur" value="{{ $data->first()->umur_saksi2 }}">
                        </div> 
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_saksi2" placeholder="Pekerjaan" value="{{ $data->first()->pekerjaan_saksi2 }}">
                        </div>         
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_saksi2" placeholder="Alamat lengkap" value="{{ $data->first()->alamat_saksi2 }}">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_saksi2" placeholder="Desa" value="{{ $data->first()->desa_saksi2 }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_saksi2" placeholder="Kecamatan" value="{{ $data->first()->kecamatan_saksi2 }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_saksi2" placeholder="Kabupaten" value="{{ $data->first()->kabupaten_saksi2 }}">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_saksi2" placeholder="Provinsi" value="{{ $data->first()->provinsi_saksi2 }}">
                        </div>
                        <hr>

                        <div class="form-group">
                            <label for="">Foto Pengantar RT</label>
                            <input type="file" class="form-control"
                                name="file_pengantar_rt" >
                        </div>

                        <div class="form-group">
                            <label for="">Foto KK</label>
                            <input type="file" class="form-control"
                                name="file_kk">
                        </div>

                        <div class="form-group">
                            <label for="">Foto KTP Ayah</label>
                            <input type="file" class="form-control"
                                name="file_ktp_ayah">
                        </div>

                        <div class="form-group">
                            <label for="">Foto KTP Ibu</label>
                            <input type="file" class="form-control"
                                name="file_ktp_ibu">
                        </div>

                        <div class="form-group">
                            <label for="">Foto KTP Saksi 1</label>
                            <input type="file" class="form-control"
                                name="file_ktp_saksi1">
                        </div>

                        <div class="form-group">
                            <label for="">Foto KTP Saksi 2</label>
                            <input type="file" class="form-control"
                                name="file_ktp_saksi2">
                        </div>x

                        <input type="hidden" readonly class="form-control" name="jenazah_id" value="{{ $data->first()->jenazah_id }}">
                        <input type="hidden" readonly class="form-control" name="ayah_id" value="{{ $data->first()->ayah_id }}">
                        <input type="hidden" readonly class="form-control" name="ibu_id" value="{{ $data->first()->ibu_id }}">
                        <input type="hidden" readonly class="form-control" name="saksi1_id" value="{{ $data->first()->saksi1_id }}">
                        <input type="hidden" readonly class="form-control" name="saksi2_id" value="{{ $data->first()->saksi2_id }}">
                        <input type="hidden" readonly class="form-control" name="status" value="3">
                        <input type="hidden" readonly class="form-control" name="user_id" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
                        Tambah Data
                        </button>
                        <a href="{{ ('../surat-kematian') }}" class="btn btn-secondary btn-user btn-block">
                            Kembali
                        </a>
                            
                    </form>
                    
                </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection