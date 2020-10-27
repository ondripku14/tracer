<?php
require_once('data.php');
?>
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

  <title>Tracer Study Alumni</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

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
            <a href="#" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="survey.php" class="nav-link">Isi Survey</a>
          </li>
        </ul>


      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Tracer Study <small>| Alumni</small></h1>
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
                <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Waktu Tunggu Peroleh Pekerjaan Pertama</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="waktuKerjaPertama" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
        </div>


         <div class="row">
          <div class="col-md-12">
                <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kepuasan Lulusan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="kepuasanLulusan" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
        </div>



        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sekarang Sudah Dapat Pekerjaan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="dapatPekerjaan" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Status Instansi Pekerjaan Pertama</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="statusKantorPertama" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kesesuaian Knowlege & Skill Dari Prodi Pada Pekerjaan Pertama</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="persenSkillJurusan" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sulit Dapat Pekerjaan Pertama</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="sulitKerjaPertama" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>

       <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Alasan Pindah Pekerjaan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="alasanPindah" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Status Instansi Pekerjaan Sekarang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="statusKantorSekarang" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <!-- /.row -->
        </div>
        <div class="row">
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sektor Pekerjaan Sekarang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="sektorKerja" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bidang Pekerjaan Sekarang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="bidangKerja" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <div class="row">
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Jabatan Pada Pekerjaan Sekarang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="jabatanKerja" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        
         <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kesesuaian Jabatan Sekarang Dan Minat</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="suaiMinat" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Gaji Per Bulan Pekerjaan Sekarang</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="gajiKerja" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Instansi Mensyaratkan IPK </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="butuhIpk" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
         <div class="row">
          <div class="col-md-12">
                <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pekerjaan Membutuhkan Bahasa Inggris dan Teknologi Informasi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="butuhIT" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
        </div>

        <div class="row">
          <div class="col-md-12">
                <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tingkat Kebermanfaatan Yang Diperoleh Dari Prodi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="manfaat" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
        </div>

        <div class="row">
           <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Knowledge & Skill Dari Prodi Mengikuti Perkembangan IPTEK </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="berkembang" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
           <div class="col-md-6">
           <!-- DONUT CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Komunikasi Dengan Prodi Setelah Lulus </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">

                  <canvas id="komunikasi" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>          
        </div>

        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-md-12">
           
              <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title">Data Alumni</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Tahun Lulus</th>
                    <th>IPK</th>
                    <th>Lama Pekerjaan Pertama</th>
                    <th>Instansi </th>
                  </tr>
                  </thead>
                  <tbody>
<?php

while($v = mysqli_fetch_array($allData, MYSQLI_ASSOC)) {
?>
                  <tr>
                    <td> <?= $v['nama'] ?> </td>
                    <td><?= $v['tahun_lulus'] ?></td>
                    <td><?= $v['ipk'] ?></td>
                    <td><?= $v['waktu_kerja_pertama'] ?></td>
                    <td><?= $v['instansi_pertama_kerja'] ?></td>
                  </tr>

<?php
}   
?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>Tahun Lulus</th>
                    <th>IPK</th>
                    <th>Lama Pekerjaan Pertama</th>
                    <th>Instansi </th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->


      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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

<!-- page script -->
<script>
  $(function () {
     
    //-------------
    //- Chart Waktu Tunggu Pekerjaan Pertama -
    //-------------
    var ctx = document.getElementById('waktuKerjaPertama');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1 Bulan', '2 Bulan', '3 Bulan', '4 Bulan', '5 Bulan', '6 Bulan', '7-11 Bulan', '1-2 Tahun', '> 2 Tahun'],
        datasets: [{
            label: '',
            data: [<?= $kerja1Bulan ?>, <?= $kerja2Bulan ?>, <?= $kerja3Bulan ?>, <?= $kerja4Bulan ?>, <?= $kerja5Bulan ?>, <?= $kerja6Bulan ?>, <?= $kerja7Bulan ?>, <?= $kerja1Tahun ?>, <?= $kerja2Tahun ?>],

            backgroundColor: [
                '#f56954',
                '#00a65a',
                '#f39c12',
                '#00c0ef',
                '#739900',
                '#b35900',
                '#993399',
                '#ff0000',
                '#ffff00'
            ],
            borderColor: [],
            borderWidth: 1
        }]
    },
    options: {
        legend:{
          display:false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


    //-------------
    //- Chart Kepuasaan Lulusan -
    //-------------
    var ctx = document.getElementById('kepuasanLulusan');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1 Poin', '2 Poin', '3 Poin', '4 Poin', '5 Poin'],
        datasets: [
        {
          label: 'Kepuasaan Layanan Dari Program Studi',
          backgroundColor     : '#00a65a',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $layanan1 ?>, <?= $layanan2 ?>, <?= $layanan3 ?>, <?= $layanan4 ?>, <?= $layanan5 ?>]

        },
        {
          label: 'Kepuasaan Penguasaan Kompetensi Setelah Lulus',
          backgroundColor     : '#f39c12',
          pointRadius         : false,
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?= $komp1 ?>, <?= $komp2 ?>, <?= $komp3 ?>,<?= $komp4 ?>, <?= $komp5 ?>]

        }
        ]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom',
          fontSize: 12
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

   //-------------
    //- Chart Dapat Pekerjaan -
    //-------------
    var ctx = document.getElementById('dapatPekerjaan');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Sudah',
         'Pernah Bekerja Dan Sekarang Mencari Pekerjaan Baru',
          'Pernah Bekerja Tapi Sekarang Sedang Mendaftar Studi Lanjut',
          'Belum Pernah Bekerja Dan Sedang Mendaftar Studi Lanjut',
           'Pernah Bekerja, dan Sekarang Studi Lanjut',
            'Tidak Bekerja Dan Langsung Studi Lanjut', 
            'Belum Pernah Bekerja Dan Masih Mencari Pekerjaan'],
        datasets: [{  
          data: [<?= $job_stat1 ?>, <?= $job_stat2 ?>, <?= $job_stat3 ?>, <?= $job_stat4 ?>, <?= $job_stat5 ?>, <?= $job_stat6 ?>, <?= $job_stat7 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900', '#b35900', '#993399'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});


   //-------------
    //- Chart Status Kantor Pertama -
    //-------------
    var ctx = document.getElementById('statusKantorPertama');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Kementerian/ Lembaga Pemerintah', 'Pemda', 'Swasta Nasional', 'Perusahaan Multinasional', 'Lembaga Internasional', 'Yayasan/ LSM Nasional', 'Yayasan/ LSM Internasional', 'BUMN/ BUMD', 'Lainnya'],

        datasets: [{  
          data: [<?= $ins_stat1 ?>, <?= $ins_stat2 ?>, <?= $ins_stat3 ?>, <?= $ins_stat4 ?>, <?= $ins_stat5 ?>, <?= $ins_stat6 ?>, <?= $ins_stat7?>, <?= $ins_stat8 ?>, <?= $ins_stat9 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900', '#b35900', '#993399', '#ff0000'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

  //-------------
    //- Chart Persentase Skill Jurusan Pada Pekerjaan Pertama -
    //-------------
    var ctx = document.getElementById('persenSkillJurusan');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['>=86%', '76% - 85%', '61% - 65%', '51% - 59%', '<=50%'],

        datasets: [{  
          data: [<?= $persen_skill1 ?>, <?= $persen_skill2 ?>, <?= $persen_skill3 ?>, <?= $persen_skill4 ?>, <?= $persen_skill5 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900', '#b35900'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

    //-------------
    //- Chart Apakah Sulit Mendapatkan Pekerjaan Pertama -
    //-------------
    var ctx = document.getElementById('sulitKerjaPertama');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Ya', 'Tidak'],

        datasets: [{  
          data: [<?= $sulit_kerja_pertama1 ?>, <?= $sulit_kerja_pertama2 ?>],

          backgroundColor : ['#00a65a', '#f39c12'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

  //-------------
    //- Chart Alasan Pindah Pekerjaan -
    //-------------
    var ctx = document.getElementById('alasanPindah');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Suasana kerja', 'Besaran gaji', 'Pengembangan karir', 'Lainnya'],

        datasets: [{  
          data: [<?= $alasanPindah1 ?>, <?= $alasanPindah2 ?>, <?= $alasanPindah3 ?>, <?= $alasanPindah4 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#d2d6de'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

 //-------------
    //- Chart Status Kantor Pertama -
    //-------------
    var ctx = document.getElementById('statusKantorSekarang');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Kementerian/ Lembaga Pemerintah', 'Pemda', 'Swasta Nasional', 'Perusahaan Multinasional', 'Lembaga Internasional', 'Yayasan/ LSM Nasional', 'Yayasan/ LSM Internasional', 'BUMN/ BUMD', 'Lainnya'],

        datasets: [{  
          data: [<?= $ins_stat_now1 ?>, <?= $ins_stat_now2 ?>, <?= $ins_stat_now3 ?>, <?= $ins_stat_now4 ?>, <?= $ins_stat_now5 ?>, <?= $ins_stat_now6 ?>, <?= $ins_stat_now7 ?>, <?= $ins_stat_now8 ?>, <?= $ins_stat_now9 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900', '#b35900', '#993399', '#ff0000', '#d2d6de'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

    //-------------
    //- Chart Sektor Pekerjaan Sekarang-
    //-------------
    var ctx = document.getElementById('sektorKerja');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Teknologi Informasi (TI)', 'Non - Teknologi Informasi'],

        datasets: [{  
          data: [<?= $sektorKerja1 ?>, <?= $sektorKerja2 ?>],

          backgroundColor : ['#00a65a', '#f39c12'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});


   //-------------
    //- Chart Dapat Pekerjaan -
    //-------------
    var ctx = document.getElementById('bidangKerja');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Programmer', 'System Analyst', 'Database Administrator', 'Server Administrator', 'Network Administrator', 'Research & development / peneliti/ laboran/ QC/ QA', 'Multimedia Designer', 'Project Admin', 'Software Tester', 'Dosen / Pendidik/ Guru', 'Lainnya'],

        datasets: [{  
          data: [<?= $bidangKerja1 ?>, <?= $bidangKerja2 ?>, <?= $bidangKerja3 ?>, <?= $bidangKerja4 ?>, <?= $bidangKerja5 ?>, <?= $bidangKerja6 ?>, <?= $bidangKerja7 ?>, <?= $bidangKerja8 ?>, <?= $bidangKerja9 ?>, <?= $bidangKerja10 ?>, <?= $bidangKerja11 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900', '#b35900', '#993399', '#ff0000', '#ffff00', '#ff00ff', '#d2d6de'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});


   //-------------
    //- Chart Jabatan Pekerjaan -
    //-------------
    var ctx = document.getElementById('jabatanKerja');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Staff', 'Supervisor', 'Asisten Manager', 'Manager', 'Direktur', 'Lainnya'],

        datasets: [{  
          data: [<?= $jabatanKerja1 ?>, <?= $jabatanKerja2 ?>, <?= $jabatanKerja3 ?>, <?= $jabatanKerja4 ?>, <?= $jabatanKerja5 ?>, <?= $jabatanKerja6 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900', '#d2d6de'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

   //-------------
    //- Chart Kesesuaian Minat dg Jabatan Sekarang -
    //-------------
    var ctx = document.getElementById('suaiMinat');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Sesuai', 'Tidak Sesuai', 'Tidak tahu'],

        datasets: [{  
          data: [<?= $suaiMinat1 ?>, <?= $suaiMinat2 ?>, <?= $suaiMinat3 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#d2d6de'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

   //-------------
    //- Chart Jabatan Pekerjaan -
    //-------------
    var ctx = document.getElementById('gajiKerja');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['< 1jt', '1-3jt', '4-5jt', '5-9jt', '>10jt'],

        datasets: [{  
          data: [<?= $gajiKerja1 ?>, <?= $gajiKerja2 ?>, <?= $gajiKerja3 ?>, <?= $gajiKerja4 ?>, <?= $gajiKerja5 ?>],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#739900'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});


    //-------------
    //- Chart Apakah Pekerjaan Butuh Bhs Inggris dan IT  -
    //-------------
    var ctx = document.getElementById('butuhIT');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sangat Membutuhkan', 'Membutuhkan', 'Cukup Membutuhkan', 'Kurang Membutuhkan', 'Tidak Membutuhkan'],
        datasets: [
        {
          label: 'Sejauh mana pekerjaan sekarang membutuhkan kemampuan bahasa Inggris',
          backgroundColor     : '#00a65a',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?= $eng1 ?>, <?= $eng2 ?>, <?= $eng3 ?>, <?= $eng4 ?>, <?= $eng5 ?>]

        },
        {
          label: 'Sejauh mana pekerjaan sekarang membutuhkan Teknologi Informasi',
          backgroundColor     : '#f39c12',
          pointRadius         : false,
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?= $it1 ?>, <?= $it2 ?>, <?= $it3 ?>,<?= $it4 ?>, <?= $it5 ?>]

        }
        ]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom',
          fontSize: 12
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


    //-------------
    //- Chart Apakah Instansi Mensyaratkan IPK -
    //-------------
    var ctx = document.getElementById('butuhIpk');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Ya', 'Tidak'],

        datasets: [{  
          data: [<?= $butuhIpk1 ?>, <?= $butuhIpk2 ?>],

          backgroundColor : ['#00a65a', '#f39c12'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});


 //-------------
    //- Chart Kepuasaan Lulusan -
    //-------------
    var ctx = document.getElementById('manfaat');
    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1 Poin', '2 Poin', '3 Poin', '4 Poin', '5 Poin'],
        datasets: [
        {


          label: 'Keterampilan teknis/praktis',
          backgroundColor     : '#f56954',
          pointRadius          : false,
          pointHighlightFill  : '#fff', 
          data                : [<?= $tek1 ?>, <?= $tek2 ?>, <?= $tek3 ?>, <?= $tek4 ?>, <?= $tek5 ?>]

        },
        {
          label: 'Pengetahuan Teoritis',
          backgroundColor     : '#00a65a',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          data                : [<?= $teo1 ?>, <?= $teo2 ?>, <?= $teo3 ?>, <?= $teo4 ?>, <?= $teo5 ?>]

        },
        {
          label: 'Prestis/kebanggan yang tinggi',
          backgroundColor     : '#f39c12',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          data                : [<?= $bangga1 ?>, <?= $bangga2 ?>, <?= $bangga3 ?>, <?= $bangga4 ?>, <?= $bangga5 ?>]

        },
        {
          label: 'Kepercayaan Diri',
          backgroundColor     : '#00c0ef',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          data                : [<?= $percaya1 ?>, <?= $percaya2 ?>, <?= $percaya3 ?>, <?= $percaya4 ?>, <?= $percaya5 ?>]

        },
        {
          label: 'Pendapatan yang besar',
          backgroundColor     : '#3c8dbc',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          data                : [<?= $gaji_besar1 ?>, <?= $gaji_besar2 ?>, <?= $gaji_besar3 ?>, <?= $gaji_besar4 ?>, <?= $gaji_besar5 ?>]

        },
        {
          label: 'Kemajuan karir/promosi yang cepat',
          backgroundColor     : '#d2d6de',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          data                : [<?= $karir1 ?>, <?= $karir2 ?>, <?= $karir3 ?>, <?= $karir4 ?>, <?= $karir5 ?>]
        },
        {
          label: 'Kemampuan mobilitas lintas bidang pekerjaan yang tinggi',
          backgroundColor     : '#993399',
          pointRadius          : false,
          pointHighlightFill  : '#fff',
          data                : [<?= $mobilitas1 ?>, <?= $mobilitas2 ?>, <?= $mobilitas3 ?>, <?= $mobilitas4 ?>, <?= $mobilitas5 ?>]

        }
        ]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom',
          fontSize: 12
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


    //-------------
    //- Chart Apakah Knowledge & Skill dari Prodi mengikuti perkembanhan IPTEK -
    //-------------
    var ctx = document.getElementById('berkembang');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Ya', 'Tidak'],

        datasets: [{  
          data: [<?= $berkembang1 ?>, <?= $berkembang2 ?>],
          backgroundColor : ['#00a65a', '#f39c12'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});

  //-------------
    //- Chart Apakah Masih berhubungan dg Prodi Pasca Lulus -
    //-------------
    var ctx = document.getElementById('komunikasi');
    var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Ya', 'Tidak'],

        datasets: [{  
          data: [<?= $komunikasi1 ?>, <?= $komunikasi2 ?>],
          backgroundColor : ['#00a65a', '#f39c12'],
        }]
    },
    options: {
        legend:{
          display:true,
          position: 'bottom'
        },
    }
});


    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

