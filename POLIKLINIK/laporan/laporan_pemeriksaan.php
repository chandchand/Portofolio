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
                               <th>Kode Pemeriksaan</th>
                               <th>Tanggal</th>
                               <th>Kode Pasien</th>
                               <th>Nama</th>
                               <th>Diagnosa</th>
                               
                             </tr>
                       </thead>
                                    
                           
                            <?php

                               $query= @mysqli_query($CONNECT, "SELECT tb_pemeriksaan.*, tb_pasien.*, tb_pendaftaran.* FROM tb_pendaftaran
                               INNER JOIN tb_pemeriksaan on tb_pemeriksaan.no_pendaftaran = tb_pendaftaran.no_pendaftaran
                               INNER JOIN tb_pasien on tb_pasien.kode_pas = tb_pendaftaran.kode_pas");

                              

                              $NO=1;
                              while ($data = @mysqli_fetch_array($query)) {
                             
                               
                            ?>

                                  
                      <tr>

                          <td><?php echo $NO;?></td>                        
                          <td><?php echo $data['kode_pemeriksaan']; ?></td>
                          <td><?php echo $data['tanggal_pemeriksaan']; ?></td>
                          <td><?php echo $data['kode_pas'];  ?></td>
                          <td><?php echo $data['nama_pas'];  ?></td>
                          <td><?php echo $data['diagnosa']; ?></td>
                          

                    
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
                </div>
          </div>
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