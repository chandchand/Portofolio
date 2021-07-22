<?php 
ob_start();
include '../../INC/koneksi.php';
$id			=		$_GET['id'];
$kode		=		$_GET['id_rekam_medis_resep'];
mysqli_query($CONNECT, "DELETE FROM tb_rekam_medis_resep WHERE id_rekam_medis_resep='$kode'")or die (mysqli_error($CONNECT));
?>
<meta http-equiv="refresh" content="1; url=../../dokter/index.php?page=rekam_medis&aksi=detail&id=<?php echo $id; ?>">