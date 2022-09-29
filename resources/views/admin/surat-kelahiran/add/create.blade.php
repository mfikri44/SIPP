@extends('admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Surat Kelahiran</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Surat Kelahiran</h6>
        
            <h6 class="mb-1 mt-1">Pemerintah Desa/Kelurahan : PURWOSARI</h6>
            <h6 class="mb-1 mt-1">Kecamatan : KOTA/KUDUS</h6>
            <h6 class="mb-1 mt-1">Kabupaten/Kota : KUDUS</h6>
            <h6 class="mb-1 mt-1 ">Kode Wilayah : 3319021001</h6>
          </div>
        <div class="card-body">
            <div class="p-10">
                    <form method="post" class="user" action="{{ url('surat-kelahiran/create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kepala Keluarga</label>
                            <input type="text" class="form-control"
                                name="nama_kk" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Kartu Keluarga</label>
                            <input type="number" class="form-control"
                                name="no_kk" placeholder="Nomor KK">
                        </div>
                        <hr>
<!-- FORM ANAK-->
<!-- FORM ANAK-->
<!-- FORM ANAK-->
<!-- FORM ANAK-->
<!-- FORM ANAK-->
                        <label class="text-justify" for="form-class">Form Anak/Bayi</label>
                
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_anak" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin_anak" class="select form-control form-control-md">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat dilahirkan</label>
                            <select name="tempat_lahir_anak" class="select form-control form-control-md">
                              <option value="Rumah Sakit/Rumah Bersalin">Rumah Sakit/Rumah Bersalin</option>
                              <option value="Puskesmas">Puskesmas</option>
                              <option value="Poliklinik Desa">Poliklinik Desa</option>
                              <option value="Rumah">Rumah</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Kota Kelahiran</label>
                            <input type="text" class="form-control"
                                name="kota_anak" value="Kudus">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_anak">
                        </div>
                        <div class="form-group">
                            <label for="">Waktu (WIB)</label>
                            <input type="time" class="form-control"
                                name="waktu_lahir_anak">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelahiran</label>
                            <select name="jenis_kelahiran_anak" class="select form-control form-control-md">
                              <option value="Tunggal">Tunggal</option>
                              <option value="Kembar 2">Kembar 2</option>
                              <option value="Kembar 3">Kembar 3</option>
                              <option value="Kembar 4">Kembar 4</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Anak ke</label>
                            <select name="anak_ke"class="select form-control form-control-md">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Penolong Kelahiran</label>
                            <select name="penolong_kelahiran" class="select form-control form-control-md">
                              <option value="Dokter">Dokter</option>
                              <option value="Bidan/Perawat">Bidan/Perawat</option>
                              <option value="Dukun">Dukun</option>
                              <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Berat (Kg)</label>
                            <input type="text" class="form-control"
                                name="berat_anak" placeholder="3.5">
                        </div>
                        <div class="form-group">
                            <label for="">Tinggi (CM)</label>
                            <input type="number" class="form-control"
                                name="tinggi_anak" placeholder="20">
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
                                name="nik_ibu" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_ibu" placeholder="Lengkap">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_ibu">
                        </div>                       
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_ibu">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_ibu" placeholder="Umur">
                        </div>                        
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_ibu" placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_ibu" placeholder="Alamat lengkap">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_ibu" placeholder="Desa">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_ibu" placeholder="Kecamatan">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_ibu" placeholder="Kabupaten">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_ibu" placeholder="Provinsi">
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
                                name="tanggal_kawin" >
                        </div>
                        <div class="form-group">
                            <label for="">Kebangsaan</label>
                            <input type="text" class="form-control"
                                name="kebangsaan_ibu" placeholder="Negara">
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
                                name="nik_ayah" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_ayah" placeholder="Nama Lengkap">
                        </div>          
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_ayah" placeholder="Kota">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_ayah">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_ayah" placeholder="Umur">
                        </div>                        
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_ayah" placeholder="Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_ayah" placeholder="Alamat lengkap">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_ayah" placeholder="Desa">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_ayah" placeholder="Kecamatan">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_ayah" placeholder="Kabupaten">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_ayah" placeholder="Provinsi">
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
                                name="kebangsaan_ayah" placeholder="Negara">
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
                                name="nik_saksi1" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_saksi1" placeholder="Nama Lengkap">
                        </div>          
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_saksi1" placeholder="Kota">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_saksi1">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_saksi1" placeholder="Umur">
                        </div> 
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_saksi1" placeholder="Pekerjaan">
                        </div>                            
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_saksi1" placeholder="Alamat lengkap">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_saksi1" placeholder="Desa">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_saksi1" placeholder="Kecamatan">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_saksi1" placeholder="Kabupaten">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_saksi1" placeholder="Provinsi">
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
                                name="nik_saksi2" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_saksi2" placeholder="Nama Lengkap">
                        </div>          
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_saksi2" placeholder="Kota">
                        </div>                        
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_saksi2">
                        </div>
                        <div class="form-group">
                            <label for="">Umur</label>
                            <input type="number" class="form-control"
                                name="umur_saksi2" placeholder="Umur">
                        </div> 
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" class="form-control"
                                name="pekerjaan_saksi2" placeholder="Pekerjaan">
                        </div>            
                        <div class="form-group">
                            <label for="">Alamat lengkap</label>
                            <input type="text" class="form-control"
                                name="alamat_saksi2" placeholder="Alamat lengkap">
                        </div>                        
                        <div class="form-group">
                            <label for="">Desa/Kelurahan</label>
                            <input type="text" class="form-control"
                                name="desa_saksi2" placeholder="Desa">
                        </div>                
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control"
                                name="kecamatan_saksi2" placeholder="Kecamatan">
                        </div>                
                        <div class="form-group">
                            <label for="">Kabupaten</label>
                            <input type="text" class="form-control"
                                name="kabupaten_saksi2" placeholder="Kabupaten">
                        </div>                
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input type="text" class="form-control"
                                name="provinsi_saksi2" placeholder="Provinsi">
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
                            <label for="">Foto Surat Lahir</label>
                            <input type="file" class="form-control"
                                name="file_surat_lahir">
                        </div>

                        <div class="form-group">
                            <label for="">Foto Buku Nikah</label>
                            <input type="file" class="form-control"
                                name="file_buku_nikah">
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
                        </div>

                        <input type="hidden" readonly class="form-control" name="status" value="2">
                        <input type="hidden" readonly class="form-control" name="user_id" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
                        Tambah Data
                        </button>
                        <a href="{{ ('../surat-kelahiran') }}" class="btn btn-secondary btn-user btn-block">
                            Kembali
                        </a>
                            
                    </form>
                    
                </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection