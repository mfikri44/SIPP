@extends('admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Surat Keterangan</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Surat Keterangan</h6>
        
            <h6 class="mb-1 mt-1">Pemerintah Desa/Kelurahan : PURWOSARI</h6>
            <h6 class="mb-1 mt-1">Kecamatan : KOTA/KUDUS</h6>
            <h6 class="mb-1 mt-1">Kabupaten/Kota : KUDUS</h6>
            <h6 class="mb-1 mt-1 ">Kode Wilayah : 3319021001</h6>
          </div>
        <div class="card-body">
            <div class="p-10">
                    <form method="post" class="user" action="{{ url('surat-keterangan/create') }}" enctype="multipart/form-data">
                        @csrf
<!-- FORM PEMOHON-->
<!-- FORM PEMOHON-->
<!-- FORM PEMOHON-->
<!-- FORM PEMOHON-->
<!-- FORM PEMOHON-->
                        <label class="text-justify" for="form-class">Form Pemohon</label>
                            
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control"
                                name="nama_pemohon" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin_pemohon" class="select form-control form-control-md">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control"
                                name="tempat_lahir_pemohon">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control"
                                name="tanggal_lahir_pemohon">
                        </div>

                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama_pemohon" class="select form-control form-control-md">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konguchu">Konguchu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Berlaku Mulai</label>
                            <input type="date" class="form-control"
                                name="berlaku_mulai">
                        </div>
                        <div class="form-group">
                            <label for="">Berlaku Sampai</label>
                            <input type="date" class="form-control"
                                name="berlaku_sampai">
                        </div>

                        <div class="form-group">
                            <label for="">Keperluan</label>
                            <input type="text" class="form-control"
                                name="keperluan">
                        </div>

                        <div class="form-group">
                            <label for="">Keteragan Lain</label>
                            <input type="text" class="form-control"
                                name="keterangan_lain">
                        </div>

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
                            <label for="">Foto KTP</label>
                            <input type="file" class="form-control"
                                name="file_ktp">
                        </div>

                        <input type="hidden" readonly class="form-control" name="status" value="2">
                        <input type="hidden" readonly class="form-control" name="user_id" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
                        Tambah Data
                        </button>
                        <a href="{{ ('../surat-keterangan') }}" class="btn btn-secondary btn-user btn-block">
                            Kembali
                        </a>
                            
                    </form>
                    
                </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection