<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<form action="" method="_GET">
	<input type="text" placeholder="Masukan Nama" name="Masuk-1"><br>
	<input type="text" placeholder="Masukan Jurusan" name="Masuk-2"><br>
	
	<input type="text" placeholder="Nilai B.Indonesia" name="Masuk-3"><br>
	<input type="text" placeholder="Nilai Matematika" name="Masuk-4"><br>
	<input type="text" placeholder="Nilai B.Inggris" name="Masuk-5"><br>
	<input type="text" placeholder="Nilai Produktif" name="Masuk-6">
	<BUTTON type="submit" nama="submit">KLiK</BUTTON>
</form>

<?php


if (isset($_GET['submit'])) {
	$NAMA= $_GET['Masuk-1'];
} 


if ($HASIL >= 80 ){
	echo "Siswa yg bernama " .$NAMA." dinyatakan LULUS";
} else
	echo "Siswa yang bernama ".$NAMA." dinyatakan TIDAK LULUS";







?>





</body>
</html>