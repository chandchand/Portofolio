<?php 	
session_start();

$id_barang = $_GET['id'];

if (isset($_SESSION['keranjang'][$id_barang])) {
	$_SESSION['keranjang'][$id_barang] += 1; 
}else{
	$_SESSION['keranjang'][$id_barang] = 1 ;
}

echo "<script>alert('Barang Sudah Masuk Ke dalam Keranjang Belanja Anda')</script>";
echo "<script>location='index.php'</script>";
?>