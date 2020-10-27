<?php session_start(); ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Form Tracer Study Alumni</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<style type="text/css">
    /* Hide all steps by default: */
.tab {
  display: none;
}
.wajib.invalid {
  background-color: #ffdddd;
}
.text-error{
position:absolute;
right:0;
top:0px;
background:red;
color:white;
border-radius:5px;
padding:5px 3px;
}
</style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-primary">
    <div class="container">
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="survey.php" class="nav-link">Isi Survey</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
<?php 
if (isset($_SESSION['saveAction'])) {
  if ($_SESSION['saveAction']== 1) {
?>
<div class="row">
          <div class="col-md-12">
                  <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Selamat !</h5>
                  Saudara Berhasil Mengisi Survey Tracer Study TIF UIN SUSKA Riau.
      </div>
          </div>
        </div>
<?php
  }
  $_SESSION['saveAction'] = 0; 
}
 ?>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Form Tracer Study <small>| Alumni</small></h1>
          </div> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <!-- Horizontal Form -->
            <form id="regForm" class="form-horizontal" action="save.php" method="POST">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title" id="sub-survey"></h3>
                </div>
                <div class="card-body">
                <div class="tab">

                  <div class="form-group">
                    <label for="nama" class="col-sm-12 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control wajib inpAZ" id="nama" name="nama" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin" class="col-sm-12 col-form-label">Jenis Kelamin</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input " value="Laki-laki" type="radio" name="jenis_kelamin">
                          <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input " value="Perempuan" type="radio" name="jenis_kelamin">
                          <label class="form-check-label">Perempuan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-12 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control wajib" id="tempat_lahir"  name="tempat_lahir" required>
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="tgl_lahir" class="col-sm-12 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-12">
                      <input type="date" class="form-control wajib" id="  tgl_lahir" name="  tgl_lahir" required >
                    </div>
                  </div>                                   
                  <div class="form-group">
                    <label for="perkawinan" class="col-sm-12 col-form-label">Perkawinan</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input " value="Kawin" type="radio" name="perkawinan">
                          <label class="form-check-label">Kawin</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input " value="Belum Kawin" type="radio" name="perkawinan">
                          <label class="form-check-label">Belum Kawin</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_hp" class="col-sm-12 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control  wajib" id="no_hp" name="no_hp" required>
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="email" class="col-sm-12 col-form-label">Email</label>
                    <div class="col-sm-12">
                      <input type="email" class="form-control wajib" id="email" name="email" required>
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="alamat_rumah" class="col-sm-12 col-form-label">Alamat Rumah</label>
                    <div class="col-sm-12">
                      <textarea class="form-control wajib" name="alamat_rumah" required></textarea>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="pendidikan_terakhir" class="col-sm-12 col-form-label">Pendidikan Terakhir</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="S1" type="radio" name="pendidikan_terakhir" >
                          <label class="form-check-label">S1</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="S2" type="radio" name="pendidikan_terakhir" >
                          <label class="form-check-label">S2</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="S3" type="radio" name="pendidikan_terakhir">
                          <label class="form-check-label">S3</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Data Kelulusan TIF  -->
                <div class="tab">
                  <div class="form-group">
                    <label for="tahun_masuk" class="col-sm-12 col-form-label">Tahun Masuk</label>
                    <div class="col-sm-12">
                      <input type="number" min="1998" max="2016" class="form-control wajib" id="tahun_masuk" name="tahun_masuk"  required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="tahun_lulus" class="col-sm-12 col-form-label">Tahun Lulus</label>
                    <div class="col-sm-12">
                      <input type="number" min="1998" max="2020" class="form-control wajib" name="tahun_lulus" id="tahun_lulus" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="lama_studi" class="col-sm-12 col-form-label">Lama Studi (Tahun dan Bulan)</label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control wajib" id="lama_studi" name="lama_studi" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="ipk" class="col-sm-12 col-form-label">IPK</label>
                    <div class="col-sm-12">
                      <input type="number"  step="0.01" class="form-control  wajib" id="ipk" name="ipk" required placeholder="ex: 3.29">
                    </div>
                  </div>                                          

                  <div class="form-group">
                    <label for="waktu_kerja_pertama" class="col-sm-12 col-form-label">Waktu Tunggu Memperoleh Pekerjaan Pertama</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="1 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">1 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="2 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">2 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="3 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">3 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="4 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">4 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="5 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">5 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="6 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">6 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="7 - 11 Bulan" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">7 - 11 Bulan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="1 - 2 Tahun" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">1 - 2 Tahun</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="> 2 Tahun" type="radio" name="waktu_kerja_pertama">
                          <label class="form-check-label">> 2 Tahun</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Kepuasan Lulusan  -->
                <div class="tab">
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-12 col-form-label">Seberapa tinggi kepuasan Saudara terhadap berbagai layanan yang diberikan Program Studi kepada Saudara saat masa kuliah?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="kepuasan_layanan">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="kepuasan_layanan">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="kepuasan_layanan">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="kepuasan_layanan">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="kepuasan_layanan">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Puas</label>
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- Kepuasan Lulusan  -->
                  <div class="form-group">
                    <label for="kepuasan_penguasaan_kompetensi" class="col-sm-12 col-form-label">Seberapa tinggi kepuasan Saudara terhadap penguasaan kompetensi saat lulus dari Program Studi?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Puas</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="kepuasan_penguasaan_kompetensi">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="kepuasan_penguasaan_kompetensi">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="kepuasan_penguasaan_kompetensi">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="kepuasan_penguasaan_kompetensi">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="kepuasan_penguasaan_kompetensi">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Puas</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sudah_bekerja" class="col-sm-12 col-form-label">Apakah Saudara sudah mendapatkan pekerjaan?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Sudah" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Sudah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pernah bekerja dan sekarang mencari pekerjaan baru" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Pernah bekerja dan sekarang mencari pekerjaan baru</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pernah bekerja tapi sekarang sedang mendaftar studi lanjut" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Pernah bekerja tapi sekarang sedang mendaftar studi lanjut</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Belum pernah bekerja tapi sekarang sedang mendaftar studi lanjut" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Belum pernah bekerja tapi sekarang sedang mendaftar studi lanjut</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pernah bekerja, dan sekarang studi lanjut" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Pernah bekerja, dan sekarang studi lanjut</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak bekerja dan langsung studi lanjut" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Tidak bekerja dan langsung studi lanjut</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Belum pernah bekerja dan masih mencari pekerjaan" type="radio" name="sudah_bekerja">
                          <label class="form-check-label">Belum pernah bekerja dan masih mencari pekerjaan</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              <!-- Informasi Pekerjaan  -->
                <div class="tab">  
                  
                  <div class="form-group">
                    <label for="instansi_pertama_kerja" class="col-sm-12 col-form-label">Status badan hukum instansi/perusahaan tempat pekerjaan PERTAMA kali:</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Kementerian/ Lembaga Pemerintah" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Kementerian/ Lembaga Pemerintah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pemda" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Pemda</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Swasta nasional" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Swasta nasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Perusahaan multinasional" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Perusahaan multinasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Lembaga Internasional" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Lembaga Internasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="yayasan/ LSM nasional" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Yayasan/ LSM nasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="yayasan/ LSM internasional" type="radio" name="instansi_pertama_kerja">
                          <label class="form-check-label">Yayasan/ LSM internasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="radio" name="instansi_pertama_kerja" onclick="set_others_instansi_pertama_kerja()">
                          <input type="text"  class="form-control"  name="others_instansi_pertama_kerja" id="others_instansi_pertama_kerja" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="persen_keterampilan" class="col-sm-12 col-form-label">Seberapa besar persentase kesesuaian pengetahuan dan keterampilan yang Saudara peroleh dari Program Studi dengan tuntutan pekerjaan pertama Saudara ?</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value=">=86%" type="radio" name="persen_keterampilan">
                          <label class="form-check-label">>=86%</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="76% - 85%" type="radio" name="persen_keterampilan">
                          <label class="form-check-label">76% - 85%</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="61% - 65%" type="radio" name="persen_keterampilan">
                          <label class="form-check-label">61% - 65%</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="51% - 59%" type="radio" name="persen_keterampilan">
                          <label class="form-check-label">51% - 59%</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="<=50%" type="radio" name="persen_keterampilan">
                          <label class="form-check-label"><=50%</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sumber_kerja_pertama" class="col-sm-12 col-form-label">Darimana Saudara mendapat informasi tentang pekerjaan pertama kali? (jawaban dapat lebih dari satu)</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Program studi/kelas" type="checkbox" name="sumber_kerja_pertama[]">
                          <label class="form-check-label">Program studi/kelas</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Dosen" type="checkbox" name="sumber_kerja_pertama[]">
                          <label class="form-check-label">Dosen</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Organisasi alumni" type="checkbox" name="sumber_kerja_pertama[]">
                          <label class="form-check-label">Organisasi alumni</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Media cetak" type="checkbox" name="sumber_kerja_pertama[]">
                          <label class="form-check-label">Media cetak</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Media elektronik" type="checkbox" name="sumber_kerja_pertama[]">
                          <label class="form-check-label">Media elektronik</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="checkbox" name="sumber_kerja_pertama[]">
                          <input type="text" class="form-control"  name="others_sumber_kerja_pertama" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sulit_kerja_pertama" class="col-sm-12 col-form-label">Apakah Saudara merasa kesulitan untuk mendapatkan pekerjaan pertama?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Ya" type="radio" name="sulit_kerja_pertama">
                          <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak" type="radio" name="sulit_kerja_pertama">
                          <label class="form-check-label">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="hambatan_kerja_pertama" class="col-sm-12 col-form-label">Jika Ya, hambatan apa saja yang ditemui untuk memperoleh pekerjaan pertama (boleh menjawab lebih dari satu)</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="IPK tidak memenuhi syarat" type="checkbox" name="hambatan_kerja_pertama[]">
                          <label class="form-check-label">IPK tidak memenuhi syarat</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Akreditasi prodi kurang mendukung, misal C atau belum terakreditasi ketika lulus" type="checkbox" name="hambatan_kerja_pertama[]">
                          <label class="form-check-label">Akreditasi prodi kurang mendukung, misal C atau belum terakreditasi ketika lulus</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kalah bersaing dengan pencari kerja yang lain" type="checkbox" name="hambatan_kerja_pertama[]">
                          <label class="form-check-label">Kalah bersaing dengan pencari kerja yang lain</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Lowongan kerja jarang atau tidak sesuai dengan bidang keahlian" type="checkbox" name="hambatan_kerja_pertama[]">
                          <label class="form-check-label">Lowongan kerja jarang atau tidak sesuai dengan bidang keahlian</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Lowongan tidak sesuai dengan minat karir" type="checkbox" name="hambatan_kerja_pertama[]">
                          <label class="form-check-label">Lowongan tidak sesuai dengan minat karir</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="checkbox" name="hambatan_kerja_pertama[]">
                          <input type="text"  class="form-control"  name="others_hambatan_kerja_pertama" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jumlah_pindah_kerja" class="col-sm-12 col-form-label">Berapa kali anda pernah pindah instansi/perusahaan ?</label>
                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="jumlah_pindah_kerja" name="jumlah_pindah_kerja" required>
                    </div>
                  </div>   
                  <div class="form-group">
                    <label for="alasan_pindah_kerja" class="col-sm-12 col-form-label">Alasan Anda pindah pekerjaan</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Suasana kerja" type="radio" name="alasan_pindah_kerja">
                          <label class="form-check-label">Suasana kerja</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Besaran gaji" type="radio" name="alasan_pindah_kerja">
                          <label class="form-check-label">Besaran gaji</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pengembangan karir" type="radio" name="alasan_pindah_kerja">
                          <label class="form-check-label">Pengembangan karir</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="radio" name="alasan_pindah_kerja">
                          <input type="text" class="form-control"  name="others_alasan_pindah_kerja" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="instansi_sekarang_bekerja" class="col-sm-12 col-form-label">Status badan hukum instansi/perusahaan tempat pekerjaan SEKARANG: </label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Kementerian/ Lembaga Pemerintah" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Kementerian/ Lembaga Pemerintah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pemda" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Pemda</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Swasta nasional" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Swasta nasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Perusahaan multinasional" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Perusahaan multinasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Lembaga Internasional" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Lembaga Internasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="yayasan/ LSM nasional" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Yayasan/ LSM nasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="yayasan/ LSM internasional" type="radio" name="instansi_sekarang_bekerja">
                          <label class="form-check-label">Yayasan/ LSM internasional</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="radio" name="instansi_sekarang_bekerja">
                          <input type="text" class="form-control"  name="others_instansi_sekarang_bekerja" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sektor_kerja_sekarang" class="col-sm-12 col-form-label">Sektor usaha pekerjaan SEKARANG</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Teknologi Informasi (TI)" type="radio" name="sektor_kerja_sekarang">
                          <label class="form-check-label">Teknologi Informasi (TI)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Non - Teknologi Informasi" type="radio" name="sektor_kerja_sekarang">
                          <label class="form-check-label">Non - Teknologi Informasi</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="bidang_kerja_sekarang" class="col-sm-12 col-form-label">Bidang pekerjaan SEKARANG </label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Programmer" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Programmer</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="System Analyst" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">System Analyst</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Database Administrator" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Database Administrator</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Server Administrator" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Server Administrator</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Network Administrator" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Network Administrator</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Research & development / peneliti/ laboran/ QC/ QA" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Research & development / peneliti/ laboran/ QC/ QA</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Multimedia Designer" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Multimedia Designer</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Project Admin" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Project Admin</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Software Tester" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Software Tester</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Dosen / Pendidik/ Guru" type="radio" name="bidang_kerja_sekarang">
                          <label class="form-check-label">Dosen / Pendidik/ Guru</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="radio" name="bidang_kerja_sekarang">
                          <input type="text"  name="others_bidang_kerja_sekarang" class="form-control" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jabatan_sekarang" class="col-sm-12 col-form-label">Jabatan pada pekerjaan SEKARANG adalah </label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Staff" type="radio" name="jabatan_sekarang">
                          <label class="form-check-label">Staff</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Supervisor" type="radio" name="jabatan_sekarang">
                          <label class="form-check-label">Supervisor</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Asisten Manager" type="radio" name="jabatan_sekarang">
                          <label class="form-check-label">Asisten Manager</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Manager" type="radio" name="jabatan_sekarang">
                          <label class="form-check-label">Manager</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Direktur" type="radio" name="jabatan_sekarang">
                          <label class="form-check-label">Direktur</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="radio" name="jabatan_sekarang">
                          <input type="text" class="form-control"  name="others_jabatan_sekarang" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="sesuai_jabatan_dan_minat" class="col-sm-12 col-form-label">Kesesuaian jabatan pekerjaan SEKARANG dengan minat Anda :</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Sesuai" type="radio" name="sesuai_jabatan_dan_minat">
                          <label class="form-check-label">Sesuai</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak Sesuai" type="radio" name="sesuai_jabatan_dan_minat">
                          <label class="form-check-label">Tidak Sesuai</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak tahu" type="radio" name="sesuai_jabatan_dan_minat">
                          <label class="form-check-label">Tidak tahu</label>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="gaji_kerja_sekarang" class="col-sm-12 col-form-label">Besarnya gaji/honorarium (take home pay) per bulan yang diperoleh dari pekerjaan SEKARANG:</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="< 1jt" type="radio" name="gaji_kerja_sekarang">
                          <label class="form-check-label">< 1jt</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="1-3jt" type="radio" name="gaji_kerja_sekarang">
                          <label class="form-check-label">1-3jt</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="4-5jt" type="radio" name="gaji_kerja_sekarang">
                          <label class="form-check-label">4-5jt</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="5-9jt" type="radio" name="gaji_kerja_sekarang">
                          <label class="form-check-label">5-9jt</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value=">10jt" type="radio" name="gaji_kerja_sekarang">
                          <label class="form-check-label">>10jt</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="matkul_paling_mendukung" class="col-sm-12 col-form-label">Mata Kuliah apa yang paling banyak berperan dalam mendukung pekerjaan Anda?</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Rekayasa perangkat lunak" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Rekayasa perangkat lunak</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Strategi Algoritma" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Strategi Algoritma</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Matematika Diskrit" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Matematika Diskrit</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Jaringan Komputer" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Jaringan Komputer</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kecerdasan buatan" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Kecerdasan buatan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Keamanan Komputer" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Keamanan Komputer</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Interaksi Manusia Komputer" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Interaksi Manusia Komputer</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="e-government" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">e-government</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Struktur Data" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Struktur Data</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="data mining" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">data mining</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Basis data" type="checkbox" name="matkul_paling_mendukung[]">
                          <label class="form-check-label">Basis data</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="checkbox" name="matkul_paling_mendukung[]">
                          <input type="text" class="form-control"  name="others_matkul_paling_mendukung" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="hambatan_masuk_kerja" class="col-sm-12 col-form-label">Sebutkan hambatan yang Anda hadapi dalam memasuki dunia kerja :</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan bahasa asing" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">Kemampuan bahasa asing</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Lokasi tempat kerja" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">Lokasi tempat kerja</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kepercayaan diri" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">Kepercayaan diri</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="IPK" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">IPK</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Cara berkomunikasi" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">Cara berkomunikasi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Penampilan" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">Penampilan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan Pemrograman" type="checkbox" name="hambatan_masuk_kerja[]">
                          <label class="form-check-label">Kemampuan Pemrograman</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="checkbox" name="hambatan_masuk_kerja[]">
                          <input type="text" class="form-control"  name="others_hambatan_masuk_kerja" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="hambatan_kembang_karir" class="col-sm-12 col-form-label">Hambatan utama yang dihadapi dalam mengembangkan karir :</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Bidang kerja di luar latar belakang pendidikan" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Bidang kerja di luar latar belakang pendidikan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Manajemen waktu yang kurang baik" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Manajemen waktu yang kurang baik</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan memecahkan masalah" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kemampuan memecahkan masalah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan beradaptasi" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kemampuan beradaptasi</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kerjasama dengan tim" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kerjasama dengan tim</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan menganalisa" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kemampuan menganalisa</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemauan menanggung resiko" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kemauan menanggung resiko</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Keberanian mengambil keputusan" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Keberanian mengambil keputusan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan mengendalikan diri" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kemampuan mengendalikan diri</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kemampuan untuk bekerja keras" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Kemampuan untuk bekerja keras</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Interaksi sosial" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Interaksi sosial</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Skill pemrograman yang kurang" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">Skill pemrograman yang kurang</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="bahasa inggris" type="checkbox" name="hambatan_kembang_karir[]">
                          <label class="form-check-label">bahasa inggris</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="checkbox" name="hambatan_kembang_karir[]">
                          <input type="text" class="form-control"  name="others_hambatan_kembang_karir" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="butuh_bhs_inggris" class="col-sm-12 col-form-label">Sejauh mana pekerjaan Saudara membutuhkan kemampuan bahasa Inggris?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Sangat membutuhkan" type="radio" name="butuh_bhs_inggris">
                          <label class="form-check-label">Sangat membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Membutuhkan" type="radio" name="butuh_bhs_inggris">
                          <label class="form-check-label">Membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Cukup membutuhkan" type="radio" name="butuh_bhs_inggris">
                          <label class="form-check-label">Cukup membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kurang membutuhkan" type="radio" name="butuh_bhs_inggris">
                          <label class="form-check-label">Kurang membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak membutuhkan" type="radio" name="butuh_bhs_inggris">
                          <label class="form-check-label">Tidak membutuhkan</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="butuh_teknologi_informasi" class="col-sm-12 col-form-label">Sejauh mana pekerjaan Saudara membutuhkan Teknologi Informasi ?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Sangat membutuhkan" type="radio" name="butuh_teknologi_informasi">
                          <label class="form-check-label">Sangat membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Membutuhkan" type="radio" name="butuh_teknologi_informasi">
                          <label class="form-check-label">Membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Cukup membutuhkan" type="radio" name="butuh_teknologi_informasi">
                          <label class="form-check-label">Cukup membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kurang membutuhkan" type="radio" name="butuh_teknologi_informasi">
                          <label class="form-check-label">Kurang membutuhkan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak membutuhkan" type="radio" name="butuh_teknologi_informasi">
                          <label class="form-check-label">Tidak membutuhkan</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kantor_butuh_ipk" class="col-sm-12 col-form-label">Apakah instansi di tempat Saudara bekerja mensyaratkan IPK?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Ya" type="radio" name="kantor_butuh_ipk">
                          <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak" type="radio" name="kantor_butuh_ipk">
                          <label class="form-check-label">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="profesi_impian" class="col-sm-12 col-form-label">Dalam 10 tahun ke depan, profesi apa yang akan Anda geluti sebagai seorang profesional di bidang teknologi informasi? </label>
                    <div class="col-sm-12">
                      <input type="text" class="form-control wajib" id="profesi_impian" name="profesi_impian" required >
                    </div>
                  </div>
                </div>

              <!-- 5. Berikan penilaian tentang tingkat kebermanfaatan yang saudara peroleh dari program studi -->
                  <div class="tab">
                  <div class="form-group">
                    <label for="keterampilan_teknis" class="col-sm-12 col-form-label">Keterampilan teknis/praktis</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="keterampilan_teknis">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="keterampilan_teknis">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="keterampilan_teknis">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="keterampilan_teknis">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="keterampilan_teknis">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pengetahuan_teori" class="col-sm-12 col-form-label">Pengetahuan teoritis</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="pengetahuan_teori">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="pengetahuan_teori">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="pengetahuan_teori">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="pengetahuan_teori">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="pengetahuan_teori">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="kebanggaan" class="col-sm-12 col-form-label">Prestis/kebanggaan yang tinggi</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="kebanggaan">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="kebanggaan">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="kebanggaan">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="kebanggaan">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="kebanggaan">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kepercayaan" class="col-sm-12 col-form-label">Kepercayaan diri</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="kepercayaan">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="kepercayaan">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="kepercayaan">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="kepercayaan">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="kepercayaan">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gaji_besar" class="col-sm-12 col-form-label">Pendapatan yang besar</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="gaji_besar">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="gaji_besar">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="gaji_besar">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="gaji_besar">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="gaji_besar">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="kemajuan_karir" class="col-sm-12 col-form-label">Kemajuan karir/promosi yang cepat</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="kemajuan_karir">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="kemajuan_karir">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="kemajuan_karir">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="kemajuan_karir">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="kemajuan_karir">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mobilitas_lintas_bidang" class="col-sm-12 col-form-label">Kemampuan mobilitas lintas bidang pekerjaan yang tinggi</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check form-check-inline" style="padding-right: 2%;">                      
                          <label class="form-check-label">Tidak Bermanfaat</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="1" type="radio" name="mobilitas_lintas_bidang">
                          <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="2" type="radio" name="mobilitas_lintas_bidang">
                          <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="3" type="radio" name="mobilitas_lintas_bidang">
                          <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="4" type="radio" name="mobilitas_lintas_bidang">
                          <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" value="5" type="radio" name="mobilitas_lintas_bidang">
                          <label class="form-check-label">5</label>
                        </div>
                        <div class="form-check form-check-inline" style="padding-left: 2%;">
                          <label class="form-check-label">Sangat Bermanfaat</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="prodi_terhadap_iptek" class="col-sm-12 col-form-label">Apakah pengetahuan dan keterampilan yang telah Saudara dapatkan di Program Studi mengikuti perkembangan IPTEKS bidang pendidikan?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Ya" type="radio" name="prodi_terhadap_iptek">
                          <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak" type="radio" name="prodi_terhadap_iptek">
                          <label class="form-check-label">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="skill_relevan" class="col-sm-12 col-form-label">Menurut Saudara, pengetahuan dan keterampilan apa saja yang relevan dengan kebutuhan dunia kerja yang perlu diberikan Prodi kepada mahasiswa ?</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" name="skill_relevan" required></textarea>
                    </div>
                  </div> 
                </div>
                                
              <!-- 6. HUBUNGAN ALUMNI DENGAN PROGRAM STUD  -->
                  <div class="tab">
                  <div class="form-group">
                    <label for="komunikasi_dg_prodi" class="col-sm-12 col-form-label">Setelah lulus, apakah Saudara masih berhubungan atau menjalin komunikasi dengan Prodi?</label>
                     <div class="col-sm-12">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Ya" type="radio" name="komunikasi_dg_prodi">
                          <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Tidak" type="radio" name="komunikasi_dg_prodi">
                          <label class="form-check-label">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </div>              

                  <div class="form-group">
                    <label for="cara_komunikasi_prodi" class="col-sm-12 col-form-label">Bagaimana hubungan Saudara dengan Prodi terus terjalin ?</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" name="cara_komunikasi_prodi" ></textarea>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="rangka_komunikasi_dg_prodi" class="col-sm-12 col-form-label">Dalam rangka apa Saudara berkomunikasi atau berhubungan dengan Prodi? Pilihan jawaban boleh lebih dari 1</label>
                     <div class="col-sm-12">
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Urusan administrasi, misal legalisir ijasah" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <label class="form-check-label">Urusan administrasi, misal legalisir ijasah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pencarian informasi lowongan pekerjaan" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <label class="form-check-label">Pencarian informasi lowongan pekerjaan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pemberian informasi lowongan pekerjaan" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <label class="form-check-label">Pemberian informasi lowongan pekerjaan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Penyelenggaraan kegiatan kerjasama antara Prodi dengan Instansi tempat kerja" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <label class="form-check-label">Penyelenggaraan kegiatan kerjasama antara Prodi dengan Instansi tempat kerja</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Penyelenggaraan kegiatan temu alumni" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <label class="form-check-label">Penyelenggaraan kegiatan temu alumni</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Pemberian saran/masukan kepada Prodi untuk peningkatan kualitas lulusan" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <label class="form-check-label">Pemberian saran/masukan kepada Prodi untuk peningkatan kualitas lulusan</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="lainnya" type="checkbox" name="rangka_komunikasi_dg_prodi[]">
                          <input type="text" class="form-control"  name="others_rangka_komunikasi_dg_prodi" placeholder="Lainnya">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="saran" class="col-sm-12 col-form-label">Saran untuk TIF UIN-SUSKA :</label>
                    <div class="col-sm-12">
                      <textarea class="form-control" name=" saran" ></textarea>
                    </div>
                  </div>                  
                  </div>


                </div>
                <div class="card-footer">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-default">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-info float-right">Next</button>
                </div>
              </div>
            </form>
          </div>
      </div><!-- /.container -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    <strong>Copyright &copy; 2020 <a href="https://https://tif.uin-suska.ac.id/">TIF UIN SUSKA RIAU</a>.</strong> All rights reserved.
    </div>
    <!-- Default to the left -->

  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script>
function set_others_instansi_pertama_kerja() {
  document.getElementById("others_instansi_pertama_kerja").readonly = false;
}


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  if (n == 0) {
    document.getElementById("sub-survey").innerHTML = "Data Diri";
  }else if (n == 1) {
    document.getElementById("sub-survey").innerHTML = "Data Kelulusan Teknik Informatika";
  }else if (n == 2) {
    document.getElementById("sub-survey").innerHTML = "Kepuasan Lulusan";
  }else if (n == 3) {
    document.getElementById("sub-survey").innerHTML = " Informasi Pekerjaan";
  }else if (n == 4) {
    document.getElementById("sub-survey").innerHTML = "Penilaian tentang tingkat kebermanfaatan yang saudara peroleh dari program studi";
  }else if (n == 5) {
    document.getElementById("sub-survey").innerHTML = "Hubungan Alumni dengan Program Studi";
  }
  //... and run a function that will display the correct step indicator:
  // fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;

//   // If the valid status is true, mark the step as finished and valid
//   return valid; // return the valid status
// }

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  // y = x[currentTab].getElementsByTagName("input");
  y = x[currentTab].getElementsByClassName("wajib");

  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    
    //get name class input validation 

    var inVal = (y[i].className).split(' ').pop();
    
    if (inVal == 'inpAZ') {
       
      regex = /^[a-zA-Z]+$/;

      if (y[i].value == "" || regex.test(y[i].value) == false) {
        y[i].className += " invalid";
        valid = false;
      }

    } else{

      if (y[i].value == "") {
        y[i].className += " invalid";
        valid = false;
      }
    }   

  }


  return valid; // return the valid status
}

</script>
</body>
</html>

