<?php
include '../../INC/koneksi.php';

$KODE_POLI                             = mysqli_real_escape_string($CONNECT, @$_POST['kode_poli']);
$NAMA_POLi                              = mysqli_real_escape_string($CONNECT, @$_POST['nama_poli']);



if ($KODE_POLI=="" || 
    $NAMA_POLi=="" ) {

?>

    <div class='alert alert-danger' role='alert'>
        <strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_poliklinik  SET
        kode_poli   ='$KODE_POLI',
        nama_poli         ='$NAMA_POLi' WHERE tb_poliklinik.kode_poli='$KODE_POLI';")
        or die('Gagal dude'.mysqli_error($CONNECT) );



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
header("location:../../Admin/index.php?page=poli");
?>
