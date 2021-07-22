<?php  
	$SERVER="localhost";
	$USER="ict2_siswa";
	$PASSWORD="mvpisthebest";
	$DATABASE="db_siswa";

	$CONNECT = mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASE);

	if ($CONNECT) {
		echo "Koneksi Ke Database berhasil.....!";
	}else{
		echo "Koneksi gagal bro....!" . mysqli_connect_error();
		die();
	}
	?>