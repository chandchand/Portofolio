<?php
@session_start();
include "../inc/koneksi.php";
if (@$_SESSION['username'])
    {
        if(@!$_SESSION['level'] =="pengunjung" )  
            {
                header ("location:../pengunjung/index.php");
            } 
        else {
            if (@$_SESSION['level'] =="admin" )  
                {
                    header ("location:../admin/index.php");
            }elseif (@$_SESSION['level'] =="kasir" )  
                {
                    header ("location:../kasir/index.php");
                }
        }
    }
else {
    header("location:../inc/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:08:57 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>PENGUNJUNG</title>
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
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datepicker.min.css">
        <!-- Responsive datatable examples -->
        <link href="../assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->




    </head>

    <body>
        <div id="stars"></div>
        <div id="stars2"></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">

                            <img src="../assets2/images/saung sembako.png" alt="" height="40">
                       
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0 ">
                                <span></span>
                            <li class="list-inline-item dropdown notification-list">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="../assets/images/users/avatar-10.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="editprofil.php"><i class="mdi mdi-account-circle m-r-5"></i> Profile </a>
                                        <a class="dropdown-item text-danger" href="../inc/logout.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>                                                                    
                                </div>
                            </li>
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
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.php"><i class="mdi mdi-airplay"></i>Dashboard</a>
                            </li>
                                        
                                    <li class="has-submenu float-right ">     
                                        <button class="btn btn-info"><a href="cart.php"><i class="fa fa-shopping-cart"></i> CART</a></button>
                                    </li>
                                    
                                   

                            

                         
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container -->
            </div>
             <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper dashboard">
            <div class="container-fluid">
                                                    <?php
                                    @$PAGE = $_GET['page'];
                                    ?>
                        <?php   include '../inc/menu.php'; ?>
                <!-- Page-Title -->
                
                    <div class="text-center">
                    <h2 class=""><span class="badge badge-info"> Product Kita  </span></h2>
                    </div>
                
                <div class="row">
                    <?php
                            include '../inc/koneksi.php';

                               $query= @mysqli_query($koneksi, "SELECT  jenis_barang.*, barang.* FROM barang
                                INNER JOIN jenis_barang on jenis_barang.id_jenis = barang.id_jenis")
                               or die(mysqli_error($koneksi));

                               $no=1;
                              while ($data = @mysqli_fetch_array($query)) {
                            ?>

                <div class="col-md-12 col-xl-4">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h6><?php echo $data['jenis_barang'];?> <span class="font-12 ml-2 float-right"></span></h6>
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">  
                                                                               
                                    <div class="carousel-inner">
                                        <div class="carousel-item active col-auto">
                                            <div class="my-2">
                                                <a style="margin-left: 65px;"> <?php echo "<img src='../pages/barang/img/$data[foto]'width='250' height='250'/>";?></a>
                                            </div>
                                            <div class="text-center">
                                                <h6 class=""><?php echo $data['nama_barang'];?></h6>
                                                <ul class="list-unstyled list-inline">
                                            
                                                    <li class="list-inline-item">
                                                        <small class="text-muted">Product ID: #<?php echo $data['id_barang'];?></small>
                                                    </li>
                                                </ul>

                                                <div class="row text-center mt-3">
                                                    <div class="col-6 border-right">
                                                        <h3 class="text-white"><?php echo $data['qty'];?></h3>
                                                        <small class="text-muted"><b>Jumlah Barang</b></small>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3 class="text-white">Rp.<?php echo $data['harga'];?></h3>
                                                        <small class="text-muted"><b>Harga</b></small>
                                                    </div>
                                                    <div class="col-12 text-center mt-3"><br>
                                                        <a href="buy.php?id=<?php echo $data['id_barang']; ?>" class="btn btn-outline-light  btn-sm px-3">Masukan Ke Keranjang</a>
                                                    </div>                                                                
                                                </div>
                                            </div> 
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                        </tbody>   
                                        <?php
                                        $no++;
    }
    ?>   
                
                   
                </div>
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
    
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
        <script src="../assets/js/bootstrap-datepicker.min.js"></script>

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
</html>