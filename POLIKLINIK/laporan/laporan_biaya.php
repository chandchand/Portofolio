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
       <div class="panel box-shadow-none content-header">

              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Biaya</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                       
                                          <tr>
                                            <th>NO</th>
                                            <th>KODE Jenis Biaya</th>
                                            <th>Nama Biaya</th>
                                            <th>TARIF</th>
                                            
                                          </tr>
                                    </thead>
                                    
                                       
                                        <?php

                                          $TAMPIL = "SELECT * FROM tb_jenis_biaya";

                                          $HASIL = mysqli_query($CONNECT,$TAMPIL);

                                          $NO=1;

                                          while ($ROW = mysqli_fetch_array($HASIL)) {
                                            
                                            $NO;
                                            $KODE     =$ROW['kode_jenis_biaya'];
                                            $NAMA     =$ROW['nama_biaya'];
                                            $TARIF    =$ROW['tarif'];
    
                                        ?>

                                                        
                                            <tr>

                                                <td><?php echo $NO;?></td>
                                                <td><?php echo $KODE; ?></td>
                                                <td><?php echo $NAMA; ?></td>
                                                <td><?php echo $TARIF; ?></td>
                                                                                                



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


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->


  </body>
</html>