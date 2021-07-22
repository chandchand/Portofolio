<?php
include '../inc/koneksi.php';

$satu     = mysqli_real_escape_string($koneksi, $_POST['id_jenis']);
$dua      = mysqli_real_escape_string($koneksi, $_POST['jenis_barang']);


    if ($satu=="" || $dua=="") 
    {
?>


<?php
}
else
{
	$UPDATE1 = mysqli_query($koneksi, "UPDATE jenis_barang SET
		jenis_barang   ='$dua' WHERE jenis_barang.id_jenis='$satu';")
	  or die ("GAGAL GAIS".mysqli_error($koneksi));
	}
	?>
	<?php
if
    ($UPDATE1){
                  echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=jenis_barang";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }



?>
