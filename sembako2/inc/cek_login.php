<?php
@session_start();
include('koneksi.php');
$USER	= addslashes($_POST['username']);
$PASS	= addslashes($_POST['password']);
$QUERY	= mysqli_query($koneksi,"SELECT * FROM `user` WHERE `username` = '$USER' AND `password` ='$PASS'");

$HASIL 	= mysqli_num_rows($QUERY);
$DATA 	= mysqli_fetch_array($QUERY);
if ($HASIL == 1)
{
	$_SESSION['username'] 	= $DATA['username'];
	$_SESSION['level'] 	= $DATA['level'];
	$_SESSION['pengunjung'];
	if ($DATA['level'] == "admin" ) {header("location:../admin/index.php");}
	else if ($DATA['level'] == "kasir" ) {header("location:../kasir/index.php");}
	else if ($DATA['level'] == "pengunjung" ) {header("location:../pengunjung/index.php");}


	echo("	<div class='alert alert-success'>
				<center>
					<strong>LOGIN BERHASIL !</strong>
					<br>
					Halaman Akan Redirect Otomatis
				</center>
			</div>
			<meta http-equiv='refresh' content=2;'>");
}
else 
{
	echo("	<div class='alert alert-danger'>
				<center>
					<strong>LOGIN GAGAL</strong>
					<br>
					Periksa Username dan Password !
				</center>
			</div>
			<meta http-equiv='refresh' content=2;'> ");
}
?>
