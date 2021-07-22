<?php
include '../../INC/koneksi.php';

$KODE                       	       = mysqli_real_escape_string($CONNECT, @$_POST['kode_jadwal']);
$HARI                   	           = mysqli_real_escape_string($CONNECT, @$_POST['hari']);
$JAMMULAI                           = mysqli_real_escape_string($CONNECT, @$_POST['jam_mulai']);
$JAMMSELESAI                        = mysqli_real_escape_string($CONNECT, @$_POST['jam_selesai']);

if ($KODE=="" || 
    $HARI=="" || 
    $JAMMULAI=="" || 
    $JAMMSELESAI=="") {

?>

    <div class='alert alert-danger' role='alert'>
        <strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_jadwal_praktik  SET
        kode_jadwal     ='$KODE',
        hari            ='$HARI',
        jam_mulai       ='$JAMMULAI',
        jam_selesai     ='$JAMMSELESAI' WHERE tb_jadwal_praktik.kode_jadwal='$KODE';")
        or die('Gagal goblok'.mysqli_error($CONNECT) );



?>

	<div class='alert alert-success' role='alert'>
    	<strong>Edit Data sukses</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

    



<?php
}
header("location:../../Admin/index.php?page=jadwal");
?>
