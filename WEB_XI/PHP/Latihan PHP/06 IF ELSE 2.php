<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	
	<input type="text" placeholder="Masukan angka" name="1">
	<input type="text" placeholder="nama" name="2">
	<BUTTON type="submit" name="submit">KLiK</BUTTON>
</form>
<?php

if (isset($_POST['submit'])) {
	$HASIL= $_POST['1'];
	$NAMA= $_POST['2'];



	if ($HASIL>= 80 ){
	echo "Siswa yg bernama " .$NAMA." dinyatakan LULUS";
	} else 
	echo "Siswa yang bernama ".$NAMA." dinyatakan TIDAK LULUS";



} 




?>

</body>
</html>