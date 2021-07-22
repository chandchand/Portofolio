<?php
@session_start();
include "koneksi.php";
if (@$_SESSION['username'])
    {
        if(@$_SESSION['type_user'] =="Admin" )  {header ("location:../admin/index.php");}
        elseif (@$_SESSION['type_user'] =="Kasir" )  {header ("location:../kasir/index.php");}
        elseif (@$_SESSION['type_user'] =="Dokter" )  {header ("location:../dokter/index.php");}
        elseif (@$_SESSION['type_user'] =="Pendaftar" )  {header ("location:../pendaftaran/index.php");}
    }
?>
<!DOCTYPE html>
<html lang="en">
<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="cek_login.php" class="form-signin" method="post">
                        <?php
                          if (@$_POST['masuk'])
                          {include 'cek_login.php';}
                          ?>
						<div class="account-logo">
                            <a href="../index-2.html"><img src="../assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" type="text" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="masuk" class="btn btn-primary account-btn">Login</button>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>
<!-- login23:12-->
</html>