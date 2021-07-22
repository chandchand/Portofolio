<?php  
	$SERVER="localhost";
	$USER="root";
	$PASSWORD="";
	$DATABASE="ict2_db_poliklinik";

	$CONNECT = mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASE);

	if ($CONNECT) {
	}else{
		echo "Koneksi gagal bro....!" . mysqli_connect_error();
		die();
	}
?>