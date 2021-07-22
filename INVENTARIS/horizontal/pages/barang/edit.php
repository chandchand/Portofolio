<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mannatthemes.com/aplomb/aplomb-cyan/horizontal/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 15:09:41 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Aplomb - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../../assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="../../assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
        <link href="../../assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="../../assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
   
        <link href="../../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="../../assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="../../assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">   

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="../../assets/css/style.css" rel="stylesheet" type="text/css">
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
                        
                      
                           
                            <img src="../../assets/images/saung.png" alt="" height="40">
                       
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0 ">

                           
                            <li class="list-inline-item dropdown notification-list">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="../../assets/images/a.png" alt="user" class="rounded-circle">
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
                                        <a class="dropdown-item text-danger" href="../../index.php"><i class="mdi mdi-power text-danger"></i> Logout</a>
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

                                    <?php
                                    @$PAGE = $_GET['page'];
                                    ?>                        
                                   
                                    
                                    <li <?php if ($PAGE=="barang") { ?> class="active" <?php  } ?>>
                                        <a href="?page=barang"><i class="fa fa-book"></i> <span>DATA BARANG</span></a>
                                    </li>
                                    <li <?php if ($PAGE=="peminjam") { ?> class="active" <?php  } ?>>
                                        <a href="?page=peminjam"><i class="fa fa-users"></i> <span>MEMINJAM</span></a>
                                    </li>
                                    <li <?php if ($PAGE=="pengembalian") { ?> class="active" <?php  } ?>>
                                        <a href="?page=pengembalian"><i class="fa fa-list-ol"></i> <span>PENGEMBALIAN</span></a>
                                    </li>
                                   

                            

                         
                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div> <!-- end container -->
            </div>
             <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- End Navigation Bar-->
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
                            <h3  class="page-title">Dashboard</h3>
                        </div>
                    </div>
                </div>
		<?php

		ob_start();
			include '../../inc/koneksi.php';
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['kode_barang'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$kode_barang = $_GET['kode_barang'];
			
			//query ke database SELECT tabel mahasiswa berdasarkan id = $id
			$select = mysqli_query($koneksi,"SELECT * FROM daftar_barang WHERE kode_barang = '$_GET[kode_barang]'")

			or die(mysqli_error($koneksi));
			
			
			//jika hasil query = 0 maka muncul pesan error
			if (!$select || mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
			}
		}
		?>
		
		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$kode_barang			= $_POST['kode_barang'];
			$nama_barang			= $_POST['nama_barang'];
			$ket					= $_POST['ket'];
			$qty					= $_POST['qty'];

			$sql=mysqli_query($koneksi,"SELECT * FROM daftar_barang WHERE kode_barang = '$_GET[kode_barang]'")

			or die(mysqli_error($koneksi));
			
			
			$sql = mysqli_query($koneksi, "UPDATE daftar_barang SET nama_barang='$nama_barang', ket='$ket', qty='$qty'  WHERE kode_barang='$kode_barang'") or die(mysqli_error($koneksi));
			
			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="../../operator/index.php?page=barang";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>
		
		<div class="card m-b-30">
		<form action="edit.php?kode_barang=<?php echo $kode_barang; ?>" method="post">
				 <div class="card-body">            
                <h5 class="mt-1 header">Edit Barang</h5>
                <br>
     
				 <label class="mb-0"><b>Kode Barang</b></label>
                
                                <input type="text" class="form-control" maxlength="5" name="kode_barang" id="" style="color: #778899; background-color: #F0FFFF;" value="<?php echo $data['kode_barang'];?>" readonly  required />
<br>
                                <label class="mb-0"><b>Nama Barang</b></label>
                             
                                <input type="text" class="form-control" name="nama_barang" id="" value="<?php echo $data['nama_barang'];?>" required/>
<br>
                                <label class="mb-0"><b>Keterangan</b></label>
                             
                                <input type="text" class="form-control" name="ket" id="" value="<?php echo $data['ket'];?>" required/>
<br>
                                <label class="mb-0"><b>Qty</b></label>
                                
                                <input type="text" class="form-control" name="qty" id="" value="<?php echo $data['qty'];?>" required />
				<label class="col-sm-2 col-form-label">&nbsp;</label>
				<div class="col-sm-10">
					<input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
					<a href="../../operator/index.php?page=barang" class="btn btn-warning">KEMBALI</a>
				</div>
			</div>
		</form>
		
	</div>

		<script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/popper.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
        <script src="../../assets/js/modernizr.min.js"></script>
        <script src="../../assets/js/detect.js"></script>
        <script src="../../assets/js/fastclick.js"></script>
        <script src="../../assets/js/jquery.slimscroll.js"></script>
        <script src="../../assets/js/jquery.blockUI.js"></script>
        <script src="../../assets/js/waves.js"></script>
        <script src="../../assets/js/jquery.nicescroll.js"></script>
        <script src="../../assets/js/jquery.scrollTo.min.js"></script>

        <!-- Plugins js -->
        <script src="../../assets/plugins/timepicker/moment.js"></script>
        <script src="../../assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        <script src="../../assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="../../assets/plugins/colorpicker/jquery-asColor.js"></script>
        <script src="../../assets/plugins/colorpicker/jquery-asGradient.js"></script>
        <script src="../../assets/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
        <script src="../../assets/plugins/select2/select2.min.js"></script>
 
        <script src="../../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="../../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
        <script src="../../assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
        <script src="../../assets/plugins/dropzone/dist/dropzone.js"></script>
 
        <!-- Plugins Init js -->
        <script src="../../assets/pages/form-advanced.js"></script>

        <!-- App js -->
        <script src="../../assets/js/app.js"></script>

