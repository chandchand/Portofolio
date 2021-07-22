<?php  
	$SERVER="localhost";
	$USER="root";
	$PASSWORD="";
	$DATABASE="siswa";

	$CONNECT = mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASE);

	if ($CONNECT) {
		echo "Koneksi Ke Database berhasil.....!";
	}else{
		echo "Koneksi gagal bro....!" . mysqli_connect_error();
		die();
	}
	?>