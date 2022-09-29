@extends('admin.app')


@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Form Data Pengguna</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Data Pengguna</h6>
    </div>

    <div class="card-body">
      <div class="p-10">
        <form method="post" class="user" action="{{ url('user-data/tambah') }}" enctype="multipart/form-data">
          @csrf    
            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" class="form-control"
                    name="name_user" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="">Alamat Email</label>
                <input type="email" class="form-control"
                    name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control"
                    name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="">Konfirmasi Password</label>
                <input type="password" class="form-control"
                    name="password_confirmation" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="">Level Akses</label>
                <select name="level" class="select form-control form-control-md">     
                  <option >Pilih level akses</option>
                  <option value="1">Kepala Desa</option>
                  <option value="2">Admin</option>
                  <option value="3">User</option>
                <select>
            </div>
            <button type="submit" class="btn btn-success btn-user btn-block" value="Tambah Data">
            Tambah Data
            </button>
            <a href="{{ url('user-data') }}" class="btn btn-secondary btn-user btn-block">
                Kembali
            </a>
                
        </form>
                  
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
@endsection