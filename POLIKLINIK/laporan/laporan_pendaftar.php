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
<div class="box-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                             
                                <tr>
                                  <th>No</th>
                                  <th>Tanggal</th>
                                  <th>NO Urut</th>
                                  <th>Nama Pegawai</th>
                                  <th>Nama Pasien</th>
                                  <th>Jadwal</th>
                                  
                                </tr>
                          </thead>
                                    
                           
                            <?php

                               $query= mysqli_query($CONNECT, "SELECT 
                               tb_pendaftaran.*,tb_pasien.*, tb_pegawai.*, tb_jadwal_praktik.* FROM tb_pendaftaran
                            JOIN tb_pegawai ON tb_pendaftaran.nip = tb_pegawai.nip
                            JOIN tb_pasien ON tb_pasien.kode_pas = tb_pendaftaran.kode_pas
                            JOIN tb_jadwal_praktik ON tb_jadwal_praktik.kode_jadwal = tb_pendaftaran.kode_jadwal


                              ORDER BY tb_pendaftaran.no_pendaftaran ASC");

                              

                              $NO=1;

                              while ($data =@mysqli_fetch_array($query)) {
                               
                            ?>

                                  
                      <tr>

                          <td><?php echo $NO;?></td>                        
                          <td><?php echo $data['tanggal_daftar']; ?></td>
                          <td><?php echo $data['no_urut']; ?></td>
                          <td><?php echo $data['nama_peg'];  ?></td>
                          <td><?php echo $data['nama_pas'];  ?></td>
                          <td><?php echo $data['hari']; echo ", "; echo $data['jam_mulai']; echo " - "; echo $data['jam_selesai']; ?></td>
                          

              

                              </tr>
     
<?php  
$NO++;
}
?>
                                    
                                </table>
                            </div>
                            
                        </div>
                </div>
          </div>
</section>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

 <script src="../admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="../admin/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="../admin/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="../admin/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="../admin/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="../admin/js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="../admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="../admin/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="../admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="../admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="../admin/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="../admin/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../admin/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
    ============================================ -->
    <script src="../admin/js/calendar/moment.min.js"></script>
    <script src="../admin/js/calendar/fullcalendar.min.js"></script>
    <script src="../admin/js/calendar/fullcalendar-active.js"></script>
  <!-- float JS
    ============================================ -->
    <script src="../admin/js/flot/jquery.flot.js"></script>
    <script src="../admin/js/flot/jquery.flot.resize.js"></script>
    <script src="../admin/js/flot/curvedLines.js"></script>
    <script src="../admin/js/flot/flot-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="../admin/js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="../admin/js/main.js"></script>
</body>

</html>