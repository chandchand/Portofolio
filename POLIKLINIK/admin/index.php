<?php
@session_start();
include "../inc/koneksi.php";
if (@$_SESSION['username'])
    {
        if(@!$_SESSION['type_user'] =="Admin" )  
            {
                header ("location:../admin/index.php");
            } 
        else 
        {
            if (@$_SESSION['type_user'] =="Kasir" )  
                {
                    header ("location:../kasir/index.php");
                }
            elseif (@$_SESSION['type_user'] =="Dokter" )  
                {
                    header ("location:../dokter/index.php");
                }
            elseif (@$_SESSION['type_user'] =="Pendaftar" )  
                {
                    header ("location:../pendaftaran/index.php");
                }
        }
    }
else {
    header("location:../inc/login.php");
}
?>
<?php
include "../inc/informasi.php";
include "../inc/kode.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">      
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo"></a>
					<img src="../assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="../assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span><?php echo $_SESSION['type_user']; ?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="../inc/logout.php">Logout</a>
					</div>
                </li>
            </ul>
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                    <?php
                             @$PAGE = $_GET['page'];
                    ?>
                                <li class="menu-title"><?php echo $_SESSION['type_user']; ?></li>
                                <li class="active">
                                      <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                                </li>                                
                                <li <?php if ($PAGE=="pegawai") { ?> class="active" <?php  } ?>>
                                    <a href="?page=pegawai"><i class="fa fa-user"></i> <span>Pegawai</span></a>
                                </li>
                                <li <?php if ($PAGE=="jadwal") { ?> class="active" <?php  } ?>>
                                    <a href="?page=jadwal"><i class="fa fa-calendar"></i> <span>Data Jadwal</span></a>
                                </li>
                                <li <?php if ($PAGE=="poli") { ?> class="active" <?php  } ?>>
                                    <a href="?page=poli"><i class="fa fa-wheelchair"></i> <span>Data Poli</span></a>
                                </li>                        
                                <li <?php if ($PAGE=="dokter") { ?> class="active" <?php  } ?>>
                                    <a href="?page=dokter"><i class="fa fa-stethoscope"></i> <span>Data Dokter</span></a>
                                </li>
                                <li <?php if ($PAGE=="obat") { ?> class="active" <?php  } ?>>
                                    <a href="?page=obat"><i class="fa fa fa-cube"></i> <span>Data Obat</span></a>
                                </li>


                                <li <?php if ($PAGE=="biaya") { ?> class="active" <?php  } ?>>
                                    <a href="?page=biaya"><i class="fa fa-money"></i> <span>Data Jenis Biaya</span></a>
                                </li>                        
                                <li <?php if ($PAGE=="info") { ?> class="active" <?php  } ?>>
                                    <a href="?page=info"><i class="fa fa-hospital-o"></i> <span>Info Poliklinik</span></a>
                                </li>
                                <li <?php if ($PAGE=="database") { ?> class="active" <?php  } ?>>
                                    <a href="?page=database"><i class="fa fa-laptop"></i> <span>Database</span></a>
                                </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
            <?php 
            include "../inc/menu.php";
            ?>        
            </div>	
        </div>        
    </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/Chart.bundle.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/app.js"></script>

</body>



</html>