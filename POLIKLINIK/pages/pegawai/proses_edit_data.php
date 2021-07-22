<?php


$NIP                       	= mysqli_real_escape_string($CONNECT, @$_POST['nip']);
$NAMA                   	= mysqli_real_escape_string($CONNECT, @$_POST['nama_peg']);
$ALAMAT                     = mysqli_real_escape_string($CONNECT, @$_POST['alamat_peg']);
$TELEPON                    = mysqli_real_escape_string($CONNECT, @$_POST['telp_peg']);
$JENKEL                     = mysqli_real_escape_string($CONNECT, @$_POST['jenis_kelamin_peg']);
$USERNAME                   = mysqli_real_escape_string($CONNECT, @$_POST['username']);
$PASSWORD                   = mysqli_real_escape_string($CONNECT, @$_POST['password']);
$STATUS                     = mysqli_real_escape_string($CONNECT, @$_POST['type_user']);

if ($NIP=="" || 
    $NAMA=="" || 
    $ALAMAT=="" || 
    $TELEPON=="" || 
    $JENKEL=="" || 
    $USERNAME=="" || 
    $PASSWORD=="" || 
    $STATUS=="") {

?>

    <div class='alert alert-danger' role='alert'>
        <strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
        <button type="button" class="close" data-dismiss="alert" arial-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php

    }else{
        $QUERY1=mysqli_query($CONNECT,"UPDATE tb_pegawai INNER JOIN tb_login 
    on tb_login.nip=tb_pegawai.nip SET
        nama_peg              ='$NAMA',
        alamat_peg            ='$ALAMAT',
        telp_peg              ='$TELEPON',
        jenis_kelamin_peg     ='$JENKEL' WHERE tb_pegawai.nip='$NIP';")
        or die('Gagal goblok'.mysqli_error($CONNECT) );

        $QUERY2=mysqli_query($CONNECT,"UPDATE tb_login INNER JOIN tb_pegawai 
    on tb_login.nip=tb_pegawai.nip SET
  
            password          = md5('$PASSWORD'),
            type_user         ='$STATUS' WHERE tb_login.nip='$NIP';")
        or die("Gagal anjing".mysqli_error($CONNECT) );


?>

	<div class='alert alert-success' role='alert'>
    	<strong>Edit Data sukses</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

    <meta http-equiv="refresh" content="5; url=?page=index.php?page=pegawai">



<?php
}
?>
