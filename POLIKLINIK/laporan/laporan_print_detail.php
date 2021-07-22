  <?php 
include '../INC/koneksi.php';
include '../INC/informasi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="Isna Nur Azis">
    <meta name="keyword" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="../asset1/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="../asset1/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="../asset1/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="../asset1/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="../asset1/css/plugins/fullcalendar.min.css"/>
    <link href="../asset1/css/style.css" rel="stylesheet">
    <!-- end: Css -->

    <link rel="shortcut icon" href="../asset1/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body onload="window.print();" class="hold-transition skin-blue sidebar-mini">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">          
            <div class="navbar-header" style="width:100%;">
                <a href="index.html" class="navbar-brand"> 
                 <b>Laporan</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav">
                <button type="button" class="btn btn-warning"><a class="logout" href="#"><i class="fas fa-print">Print Or Save</i></a></button>
                <button type="button" class="btn btn-danger"><a class="" href="javascript:window.open('','_self').close();"><i class="fas fa-times-circle">CLOSE</i></a></button>
              </ul>
            </div>
        </nav>
<div class="container">
  <?php 
  include @"kop_laporan.php";
   ?>
 


 <?php 
$id = $_GET['id'];
$edit=" SELECT tb_pemeriksaan.*,tb_pasien.*,tb_pendaftaran.* FROM tb_pendaftaran 
        INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran 
        INNER JOIN tb_pasien ON tb_pasien.kode_pas = tb_pendaftaran.kode_pas

        WHERE tb_pemeriksaan.kode_pemeriksaan='$id'";

$hasil=mysqli_query($CONNECT,$edit);
while ($ROW=mysqli_fetch_array($hasil)) {
$NO;
$satu   = $ROW['kode_pemeriksaan'];
$dua    = $ROW['tanggal_pemeriksaan'];
$tiga   = $ROW['kode_dok'];
$empat  = $ROW['no_pendaftaran'];
$lima   = $ROW['keluhan'];
$enam   = $ROW['diagnosa'];
$tujuh    = $ROW['perawatan'];
$delapan  = $ROW['tindakan'];
$sembilan = $ROW['berat_badan'];
$sepuluh  = $ROW['tensi_diastolik'];
$sebelas  = $ROW['tensi_sistolik'];
$duabelas  = $ROW['tanggal_daftar'];
$tigabelas  = $ROW['nama_pas'];
$empatbelas  = $ROW['tanggal_lahir_pas'];
$limabelas  = $ROW['alamat_pas'];
$enambelas  = $ROW['telp_pas'];
}
?>
<section class="invoice">
<div class="panel panel-default" style="color:black;">
    <div class="panel-body">
        <!-- Baris ke 2 -->
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xl-12">
               <div class="panel panel-default">
                    <div class="panel-body">
                        <table>
                            <tr> 
                                <td><h1><?php echo $satu; ?></h1><br></td>
                            </tr>
                            <tr>
                                <td>Tanggal registrasi</td>
                                <td>:</td>
                                <td><?php echo $duabelas; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal pemeriksaan</td>
                                <td>:</td>
                                <td><?php echo $dua; ?></td>
                            </tr>
                            <tr>
                                <td>No.pendaftaran</td>
                                <td>:</td>
                                <td><?php echo $empat; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Baris ke 3 -->
        <div class="row">
            <!-- Data pasien -->
            <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                <table>
                    <tr> 
                        <td><h2>Data pasien</h2></td>
                    </tr>
                    <tr>
                        <td><?php echo $tigabelas; ?>,<?php echo $empatbelas; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $limabelas; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $enambelas; ?></td>
                    </tr>
                </table>
            </div>
            <!-- Pasien -->
            <div class="col-lg-6 col-sm-6 col-md-6 col-xl-6">
                <table width="250">
                    <tr>
                        <td><h2>Pasien</h2></td>
                    </tr>
                    <tr>
                        <td>Berat badan</td>
                        <td>:</td>
                        <td><?php echo $sembilan; ?></td>
                    </tr>
                    <tr>
                        <td>Tensi diastolik</td>
                        <td>:</td>
                        <td><?php echo $sepuluh; ?></td>
                    </tr>
                    <tr>
                        <td>Tensi Sistolik</td>
                        <td>:</td>
                        <td><?php echo $sebelas; ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>
         <!-- Baris ke 4 -->
        <div class="row" style="margin-top:20px;">
            <div class="col-lg-3 col-sm-12 col-md-3 col-xl-3">
                <span>Keluhan</span><br>
                <span><?php echo $lima; ?></span>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-3 col-xl-3">
                <span>Diagnosa</span><br>
                <span><?php echo $enam; ?></span>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-3 col-xl-3">
                <span>Perawatan</span><br>
                <span><?php echo $tujuh; ?></span>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-3 col-xl-3">
                <span>Tindakan</span><br>
                <span><?php echo $delapan; ?></span>
            </div>
        </div>
                <!-- Baris 5 -->
        <div class="row">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>                                    
                                        <tr>
                                          <th>NO</th>
                                          <th>ID Biaya</th>
                                          <th>Tarif</th>
                                          <th>Kode Jenis Biaya</th>
                                          
                                        </tr>
                                  </thead>
                                      <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT tb_rekam_medis_biaya.*, tb_jenis_biaya.* FROM tb_rekam_medis_biaya 
                                          INNER JOIN tb_jenis_biaya ON tb_rekam_medis_biaya.kode_jenis_biaya = tb_jenis_biaya.kode_jenis_biaya 
                                          WHERE kode_pemeriksaan='$id'");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                         <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['nama_biaya']; ?></td>
                                             <td><?php echo $DATA['tarif']; ?></td>
                                             <td><?php echo $DATA['kode_jenis_biaya']; ?></td>
                                                
                                            
                                </tr>
                        <?php  
                        $NO++;
                        }
                        ?>
                    </table>
        </div><br>
        <!-- Baris 6 -->
        <div class="row">
           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama Obat</th>
                                            <th>Merk</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                              
                                        </tr>

                                    </thead>
                                    <tbody>

                                        <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT tb_rekam_medis_obat.*, tb_obat.* FROM tb_rekam_medis_obat 
                                          INNER JOIN tb_obat ON tb_rekam_medis_obat.kode_obat = tb_obat.kode_obat 
                                          WHERE kode_pemeriksaan_obat='$id'");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                         <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['nama_obat']; ?></td>
                                             <td><?php echo $DATA['merk']; ?></td>
                                             <td><?php echo $DATA['satuan']; ?></td>
                                             <td><?php echo $DATA['harga_jual']; ?></td>
                                                
                                             <td>
                                        
                                  

                
                                        </tr>      
                                  
                                      <?php  
                    $NO++;
                    }
                    ?>
                    </tbody>
                                </table>
                            </div>
        </div><br>
        <!-- Baris7 -->
        <div class="row">
             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Dosis</th>
                                            <th>Jumlah</th>
                                            <th>Kode Pemeriksaan Resep</th>
                                            
                                   
                                        </tr>
                                     </thead>
                             <?php
                                        $QUERRY = mysqli_query($CONNECT,"SELECT tb_rekam_medis_resep.*, tb_resep.* FROM tb_rekam_medis_resep 
                                          INNER JOIN tb_resep ON tb_rekam_medis_resep.kode_resep = tb_resep.kode_resep 
                                          WHERE kode_pemeriksaan_resep='$id'");
                                        $NO=1;
                                        while ($DATA = mysqli_fetch_array($QUERRY)) {
                                      ?>                              
                                         <tr>
                                             <td><?php echo $NO;?></td>
                                             <td><?php echo $DATA['dosis']; ?></td>
                                             <td><?php echo $DATA['jumlah']; ?></td>
                                             <td><?php echo $DATA['kode_pemeriksaan_resep']; ?></td>
                            
                              
                                        </tr>
                           
                                    <?php  
                              $NO++;
                              }
                              ?>
                                </table>
        </div>
    </div>    
</div>
</section>
                            
                        

                            
                        
</section>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../Admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../Admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../Admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../Admin/bower_components/raphael/raphael.min.js"></script>
<script src="../Admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../Admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../Admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../Admin/bower_components/moment/min/moment.min.js"></script>
<script src="../Admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../Admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../Admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../Admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../Admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../Admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Admin/dist/js/demo.js"></script>
<script src="../Admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
   
</body>
</html>