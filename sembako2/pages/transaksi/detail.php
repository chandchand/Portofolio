<?php 
include '../inc/koneksi.php';
$id = $_GET['id'];
$edit=" SELECT barang.*,transaksi_belanja.* FROM transaksi_belanja 
INNER JOIN barang ON barang.id_barang = transaksi_belanja.id_barang
WHERE transaksi_belanja.id_transaksi='$id'";

$hasil=mysqli_query($koneksi,$edit);
while ($ROW=mysqli_fetch_array($hasil)){
$satu     = $ROW['id_transaksi'];
$dua      = $ROW['nama'];
$tiga     = $ROW['jumlah'];
$empat    = $ROW['nama_barang'];
$lima     = $ROW['no_telp'];
$enam     = $ROW['total'];
$tujuh    = $ROW['tgl_belanja'];
$delapan  = $ROW['status'];
$sembilan = $ROW['alamat'];
$sepuluh  = $ROW['harga'];
$sebelas  = $ROW['email'];

}
?>


    
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:10:04 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Aplomb - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body onload="window.print();">
        <div id="stars"></div>
        <div id="stars2"></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        
                        <a href="index.html" class="logo">
                            <img src="../assets/images/logo-sm.png" alt="" height="22" class="logo-small">
                            <img src="../assets/images/logo.png" alt="" height="16" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0 ">
                                <!-- language-->


                           <ul class="navbar-nav ml-2 ml-md-5">
                                 <li class="nav-item dropdown no-arrow">
                                   <ul class="nav user-menu float-right">
                                      <button class="btn btn-success"><a href=""><i class="fas fa-print"></i> Print or save </a></button>
                                      ||
                                       <button class="btn btn-danger"><a href="javascript:window.open('','_self').close();"><i class="fas fa-window-close"></i> Close </a></button>
                                     </ul>
                                    </li>
                                </ul>
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link" id="mobileToggle">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>    
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        
                        <!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Aplomb</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Invoice</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Invoice</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body invoice"> 
                                <div class="float-right">
                                    <h6>Invoice : # 
                                        <strong><?php echo $satu; ?></strong>
                                    </h6>
                               
                                    <h6 class="mb-0 ">Date : <?php echo $tujuh; ?></h6>
                                </div>
                                <div class="">
                                    <h4 class="mb-0 align-self-center"><img src="../assets/images/logo-sm.png" alt="s"></h4>                                        
                                </div>                                            
                                <div class="clearfix"> </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="float-left mt-4">
                                            <address>
                                                <strong><?php echo $dua; ?></strong><br>
                                                <?php echo $sembilan; ?><br>
                                                Email : <?php echo $sebelas; ?> <br>
                                                <abbr title="Phone">P:</abbr> <?php echo $lima; ?>
                                                </address>
                                        </div>
                                        <div class="float-right mt-4">
                                            <p><strong>Order Date: </strong> <?php echo $tujuh; ?></p>
                                            <p><strong>Order Status: </strong><span class="#" data-toggle="tooltip" data-placement="bottom">
                                                                                  <?php if($delapan==1){ 
                                                                                        echo "<span class='badge badge-success'>Sudah Konfirmasi</span>";
                                                                                      }elseif($delapan==0){
                                                                                        echo "<span class='badge badge-warning'>Belum Konfirmasi</span>";
                                                                                      }
                                                                                  ?></p></p>
                                            <p><strong>Order ID: </strong> #<?php echo $satu; ?></p>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table mt-4">
                                                <thead>
                                                    <tr><th>No</th>
                                                        <th class="">id_transaksi</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>harga</th>
                                                    
                                                </tr></thead>
                                                <tbody>
                                                <?php

                                                     $query= @mysqli_query($koneksi, "SELECT barang.*, transaksi_belanja.* FROM transaksi_belanja
                                                     INNER JOIN barang on barang.id_barang = transaksi_belanja.id_barang
                                                     WHERE transaksi_belanja.id_transaksi='$id'");

                                                    

                                                    $NO=1;
                                                    while ($data = @mysqli_fetch_array($query)) {
                                                   
                                                     
                                                  ?>

                                                    <tr>
                                                        <td><?php echo $NO++;?></td>
                                                        <td><?php echo $data['id_transaksi']; ?></td>
                                                        <td><?php echo $data['nama_barang']; ?></td>
                                                        <td><?php echo $data['jumlah']; ?></td>
                                                        <td><?php echo $data['harga']; ?></td>
                                                    

                                                    </tr>
                                                <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end row-->

                                <div class="row" style="border-radius: 0px;">
                                    <div class="col-md-9">
                                        
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <p class="text-right"><strong>Sub-total: </strong>Rp. <?php echo number_format($enam); ?></p>
                                        <hr>
                                        <h4 class="text-right mb-0">Rp. <?php echo number_format($enam); ?></h4>
                                    </div>
                                </div><!--end row-->

                                <hr>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-12 col-xl-4 ml-auto align-self-center">
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!--end row-->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2018 Aplomb by Mannatthemes.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/modernizr.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/pages-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:10:04 GMT -->
</html>