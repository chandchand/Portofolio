<?php
include 'koneksi.php';

$KODE                                  = mysqli_real_escape_string($CONNECT, @$_POST['kode_resep']);
$DOSIS                                  = mysqli_real_escape_string($CONNECT, @$_POST['dosis']);
$JUMLAH                           = mysqli_real_escape_string($CONNECT, @$_POST['jumlah']);


if ($KODE=="" || 
    $DOSIS=="" || 
    $JUMLAH=="" ) {

?>

    <div class='alert alert-danger' role='alert'>
        <strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_resep  SET
        kode_resep     ='$KODE',
        dosis            ='$DOSIS',
        jumlah       ='$JUMLAH' WHERE tb_resep.kode_resep='$KODE';")
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
header("location:../PENDAFTAR/index.php?page=resep");
?>
