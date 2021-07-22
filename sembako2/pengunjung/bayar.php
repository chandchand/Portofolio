<?php 
session_start();
include '../inc/koneksi.php';

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

                            <img src="../assets2/images/saung kode.png" alt="" height="40">
                       
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
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5"></i> My Wallet</a>
                                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
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
        <div class="wrapper dashboard">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group float-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                   
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    
                                </ol>
                            </div>
                            <h4>Transaksi </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body invoice"> 
                               
                                <div class="">
                                    <h4 class="mb-0 align-self-center"><img src="../assets/images/logo-sm.png" alt="s"></h4>                                        
                                </div>                                            
                                <div class="clearfix"> </div>
                                   <div>
                                    <h1 class="text-center">SAUNG SEMBAKO</h1>
                                   </div>
                                <hr>
                               </div> 
                                                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table mt-4">
                                                <thead>
                                                    <tr><th>#</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah Barang</th>
                                                    <th>Harga</th>
                                                    <th>Total</th>
                                                </tr></thead>
                                                <tbody>
                                                    <?php $no = 1; ?> 
                                                    <?php 
                                                        $sub = 0;
                                                    foreach ($_SESSION['keranjang'] as $id_barang => $jumlah): 

                                                    ?>
                                                    <?php 
                                                    
                                                    $ambil = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
                                                    $pecah = $ambil->fetch_assoc();
                                                    $total = $pecah['harga'] * $jumlah;

                                                    $sub += $total;
                                                    ?>                                                      
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $pecah['nama_barang']; ?>  </td>
                                                        <td><?php echo $jumlah; ?></td>
                                                        <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                                                        <td><?php echo $total; ?></td>
                                                    </tr>
                                                    <?php $no++; ?>
                                                    <?php  endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end row-->

                                <div class="row" style="border-radius: 0px;">
                                    <div class="col-md-9">
                                    </div>
                                    <div class="col-md-3">
                                        <p class="text-right"><strong>Sub-total:  </strong>Rp. <?php echo number_format($sub) ; ?> </p>

                                        <hr>
                                        <h4 class="text-right mb-0">Rp. <?php echo number_format($sub) ; ?> </h4>
                                  </div>
                                </div>
                                  <hr>
                        <form action="" method="post">
                            <div class="card-body">            
                              <div class="m-t-20">
                                  <?php  
                                    $QUERY = mysqli_query ($koneksi, "SELECT * FROM user WHERE username='".$_SESSION['username']."'");
                                    while ($DATA=mysqli_fetch_array($QUERY)) 
                                    $NIP = $DATA['nama'];
                                    {
                                      $QUERY = mysqli_query ($koneksi, "SELECT * FROM user WHERE user.nama='$NIP'");
                                      while ($DATA2=mysqli_fetch_array($QUERY)) 
                                      if ($_SESSION['username']) 
                                      {
                                        if ($_SESSION['level']== "pengunjung") 
                                        {

                                          ?>
                                    <label class="mb-0"><b>NAMA</b></label>
                                    <input type="text" name="nama" class="form-control mb-1 custom-select" value="<?php echo $DATA2['nama']; ?>" readonly>
                                </div>
                                     <?php 
                                                }
                                              }
                                          }
                                                                        
                                    ?>
                                <div class="m-t-20">
                                  <label class="mb-0"><b>ALAMAT</b></label>
                                  <textarea type="text" name="alamat" class="form-control" rows="12"></textarea>
                                </div>
                                <div class="m-t-20">
                                  <label class="mb-0"><b>Email</b></label>
                                  <input type="email" name="email" class="form-control">
                                </div>
                                <div class="m-t-20">
                                  <label class="mb-0"><b>No Telepon</b></label>
                                  <input type="text" name="no_telp" class="form-control">
                                </div>

                                <div class="m-t-20">
                                  <label class="mb-0"><b>ONGKIR Per Kecamatan</b></label>
                                  <select class="form-control" name="id_ongkir">
                                    <option value=""> Pilih Ongkos Kirim </option>
                                    <?php 
                                    $QUERY = mysqli_query ($koneksi, "SELECT * FROM ongkir ");
                                    while ($DATA=mysqli_fetch_array($QUERY)){
                                    ?>
                                    <option value="<?php  echo $DATA['id_ongkir']; ?>">
                                      <?php echo $DATA['tempat']; ?>
                                      Rp. <?php echo number_format($DATA['tarif']); ?>
                                    </option>
                                    <?php } ?>
                                  </select>

                                </div>
                                  


                              
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                 <div class="m-t-20">
                    <input type="submit" name="submit" class="btn btn-primary" value="Checkout">
                </div>         
            
        </div> <!-- end col -->
      </form>
        <?php if (isset($_POST["submit"]))
        {
         $id_ongkir = $_POST["id_ongkir"];
         $alamat = $_POST["alamat"];
         $nama = $_POST['nama'];
         $email = $_POST['email'];
         $ambil = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
         $no_telp = $_POST["no_telp"];
         $tanggal_pembelian = date("Y-m-d");
         $array = mysqli_query ($koneksi, "SELECT * FROM ongkir WHERE id_ongkir = 'id_ongkir' ");
         $ongkir = $array->fetch_assoc();
         $tarif = $ongkir['tarif'];
         $id_transaksi = $no_telp.$tanggal_pembelian; 


        $total_pembelian = $sub + $tarif;

        //menyimpan ke tabel di database
        $id_pembelian=$koneksi->insert_id;
        foreach ($_SESSION["keranjang"] as $id_barang => $jumlah) 
        {  
        $QUERY1=mysqli_query($koneksi,"INSERT INTO transaksi_belanja ( email,nama,id_transaksi,id_barang,jumlah,id_ongkir,tgl_belanja,alamat,total,no_telp) 
          VALUES ( '$email','$nama','$id_transaksi','$id_barang','$jumlah','$id_ongkir','$tanggal_pembelian','$alamat','$total_pembelian','$no_telp')");

        

        
                  
                       
        }
                    echo '<script>alert("Pembelian Berhasil."); document.location="invoice.php?id='.$id_transaksi.'";</script>';
                    echo "";
      
        }
        

        ?>
      
    </div><!--end row-->







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