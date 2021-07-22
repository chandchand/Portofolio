<?php 

ob_start();
include '../inc/koneksi.php';

$del = mysqli_query($koneksi,"DELETE FROM user WHERE id_user = '$_GET[id_user]'")

or die(mysqli_error($koneksi));

if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=user";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=user";</script>';
		}
 ?>