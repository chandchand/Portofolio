<?php
include "../inc/koneksi.php";
include '../inc/informasi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LAPORAN PENERIMA HARIAN</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin3.css" rel="stylesheet">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Aplomb - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <link rel="stylesheet" href="../assets/plugins/metro/MetroJs.min.css">
        <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
        <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="../assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->

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
                        
                      
                           
                            <img src="../assets2/images/saung kode.png" alt="" height="40">
                       
                    </div>
                    <ul class="navbar-nav ml-2 ml-md-5">
                                 <li class="nav-item dropdown no-arrow">
                                   <ul class="nav user-menu float-right">
                                      <button class="btn btn-success"><a href=""><i class="fas fa-print"></i> Print or save </a></button>
                                      ||
                                       <button class="btn btn-danger"><a href="javascript:window.open('','_self').close();"><i class="fas fa-window-close"></i> Close </a></button>
                                     </ul>
                                    </li>
                                </ul>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0 ">

                           
                           
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
<div class="row">
    <div class="col-md-12">
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <h5 class="header-title" style="font-size: 20px;">Laporan Penerimaan Toko</h5>
                <br>
                
                <div>
                    <table id="dataTables-example" class="table border-0">
                        <thead>
                            <br>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Belanja</th>
                            <th>Total</th>
                        </tr>

                        </thead>
                        <tbody>
                            <?php
                            include '../inc/koneksi.php';
                            $totalkes =0;
                            $query = mysqli_query($koneksi, "SELECT * FROM transaksi_belanja GROUP BY id_transaksi") or die(mysqli_error($koneksi));

                              

                              $no=1;
                              while ($data = @mysqli_fetch_array($query)) {
                             
                               
                            ?>
                                        <tr>
                                            <td><?php  echo $no; ?></td>
                                            <td><?php  echo $data['tgl_belanja'] ; ?></td>
                                            <td>Rp. <?php  echo number_format($data['total']) ; ?></td>
                                            </tr>
     
    <?php
    $totalkes += $data['total'];  
    $no++;
    ?>
     <?php                                    
    }
     ?>
                            </tbody>
                        </table>

                            <div class="row" style="border-radius: 0px;">
                                    <div class="col-md-9">
                                        Total Keseluruhan
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <p class="text-right"><strong>Sub-total: </strong>Rp. <?php echo number_format($totalkes); ?></p>
                                        <hr>
                                        <h4 class="text-right mb-0">Rp. <?php echo number_format($totalkes); ?></h4>
                                    </div>
                                </div><!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
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

        <script src="../assets/plugins/metro/MetroJs.min.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../assets/plugins/sparkline-chart/jquery.sparkline.min.js"></script>
        <script src="../assets/plugins/morris/morris.min.js"></script>
        <script src="../assets/plugins/raphael/raphael-min.js"></script>
        <script src="../assets/pages/dashborad.js"></script>
        <script src="../assets/js/jquery.dataTables.js"></script>
        <script src="../assets/js/dataTables.bootstrap.js"></script>
        <!-- Required datatable js -->
        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../assets/plugins/datatables/jszip.min.js"></script>
        <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="../assets/pages/datatables.init.js"></script> 
        <script type="text/javascript">
            $(".show-form-btn").on("click",function(){
              $(".form-box").toggleClass("showed");
            });
            $(".hide-form-btn").on("click",function(){
              $(".form-box").toggleClass("showed");
            });
        </script>
            <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#dataTables-example').dataTable();
                    });
            </script>
        <script src="../assets/js/jquery.dataTables.min.js"></script>


        <!-- App js -->
        <script src="../assets/js/app.js"></script>

    </body>

<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:21 GMT -->
</html>