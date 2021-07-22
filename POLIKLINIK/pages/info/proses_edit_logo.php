<?php  
$foto 	 =@$_FILES['foto']['tmp_name'];
$target ='dist/';
$gambar	 =@$_FILES['foto']['name'];

if ($gambar=="") 
{
?>
	<div class='alert alert-danger' role='alert'>
    	<strong>error!</strong>A<a href='#' class='alert-link'>Pastikan </a>Semua data terisi.
    	<button type='button' class='close' data-dismiss='alert' arial-label='close'>
    		<span aria-hidden='true'>&times;</span>
    	</button>
    </div>
<?php 
}
else
{
	$update_logo = move_uploaded_file($foto, $target.$gambar);
	if ($update_logo) 
	{
		$query = mysqli_query($CONNECT, "UPDATE `tb_informasi` SET logo_poliklinik='$gambar' WHERE id_informasi='1' ;") or die (mysqli_error());	
	}

?>

	<div class='alert alert-success' role='alert'>
    	<strong>Update Logo Succes!</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type='button' class='close' data-dismiss='alert'arial-label='close'>
    		<span aria-hidden='true'>&times;</span>
    	</button>
    </div>
    <meta http-equiv="refresh" content="3; url=?page=info">
<?php
}

?>