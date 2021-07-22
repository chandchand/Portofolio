<?php
ob_start();
include ("koneksi.php");
$ID_BIO=$_POST['id_bio'];
$NAMA=$_POST['nama'];
$ALIAS=$_POST['alias'];
$JENGKEL=$_POST['jenkel'];
$TGL_LAHIR=$_POST['tgl_lahir'];
$STATUS=$_POST['status'];
$PEKERJAAN=$_POST['pekerjaan'];
$TIPE_WANITA=$_POST['tipe_wanita'];
$HP=$_POST['no_hp'];
$KEPRIBADIAN=$_POST['kepribadian'];

$SQL="UPDATE tbl_siswa SET
nama='$NAMA',
alias='$ALIAS',
jenkel='$JENGKEL',
tgl_lahir='$TGL_LAHIR',
status='$STATUS',
pekerjaan='$PEKERJAAN',
tipe_wanita='$TIPE_WANITA',
no_hp='$HP',
kepribadian='$KEPRIBADIAN'
WHERE id_bio='$ID_BIO'";	

mysqli_query($CONNECT, $SQL)
	or die('Gagal Update Data '.mysqli_error($CONNECT) );


	echo "Proses Update data Berhasil";
	header("location:index.php");
?>