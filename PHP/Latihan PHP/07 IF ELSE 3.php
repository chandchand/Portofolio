<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	
	<input type="text" placeholder="Nilai B.Indonesia" name="NINDO"><br>
	<input type="text" placeholder="Nilai Matematika" name="NMATH"><br>
	<input type="text" placeholder="Nilai B.Inggris" name="NINGG"><br>
	<input type="text" placeholder="Nilai Produktif" name="NPRO">
	<BUTTON type="submit" nama="submit">KLiK</BUTTON>
</form>
<?php

$NAMA = "Chand";

if (isset($_POST['submit'])) {
	$INDO= $_POST['NINDO'];
	$MTK= $_POST['NMATH'];
	$INGG= $_POST['NINGG'];
	$PRO= $_POST['NPRO'];
	$rata= ($INDO+$MTK+$INGG+$PRO)/4;



if ($HASIL >= 80 ){
	echo "Siswa yg bernama " .$NAMA." dengan rata-rata".$rata."dinyatakan LULUS";
} else{
	echo "Siswa yang bernama ".$NAMA." dengan rata-rata".$rata." dinyatakan TIDAK LULUS";
}



}



?>



</body>
</html>