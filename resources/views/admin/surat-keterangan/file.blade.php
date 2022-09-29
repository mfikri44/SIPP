<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <title>File Kelahiran | SIPP </title>
</head>
<body>
        <div style="text-align: center;">
            <img src="{{ public_path('assets/image/2.png') }}" style="width: 700px; height: 200px">
        </div>

        <div style="text-align: center;">
            <h6><u>SURAT KETERANGAN/PENGANTAR</u></h6>
            <p>NO : 045.2 / 184 / V / 2022<br>
            Dasar Surat : Pengantar RT 004 / RW 007
            <p>
        </div>

        <main>
            <p>     Yang bertanda tangan dibawah ini menerangkan bahwa:<p>
            @foreach ($data as $cat)
            <table class=" table-borderless">
            
                <tr>
                    <td>Nama                    </td>
                    <td>: {{$cat->nama_pemohon}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin           </td>
                    <td>: {{$cat->jenis_kelamin_pemohon}}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir   </td>
                    <td>: {{$cat->tempat_lahir_pemohon}}, {{$cat->tanggal_lahir_pemohon}}</td>
                </tr>
                <tr>
                    <td>Agama                   </td>
                    <td>: {{$cat->agama_pemohon}}</td>
                </tr>
                <tr>
                    <td>Keperluan               </td>
                    <td>: {{$cat->keperluan}}</td>
                </tr>
                <tr>
                    <td>Berlaku Mulai           </td>
                    <td>: {{$cat->berlaku_mulai}} - {{$cat->berlaku_sampai}}  </td>
                </tr>
                <tr>
                    <td>Keterangan Lain         </td>
                    <td>: Ybs. Benar-benar penduduk Kelurahan Purwosari Rt 004/ Rw 007 Kec. Kota Kudus Kab. Kudus dan {{$cat->keterangan_lain}} </td>
                </tr>
            </table>
            @endforeach

        </main>

        <br>
        <br>
        <br>
        <br>
        <br>

        <div style="width:300px;float:left; margin-left:50px;">
            
            <br/>Pemohon
            <br>
            <br>
            <br>
            <br>
            <p>Mieke<br/></p>
        </div>

        <div style="width:200px;float:right">
            Kudus, 17 Maret 2012
            <br/>KEPALA DESA
            <br>
            <br>
            <br>
            <br>
            <p>SULISTIYO, S.STP<br/>
            NIP. 189283423473459</p>
        </div>
</body>
<style>

</style>
</html>