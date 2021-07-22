<?php

$x = 10;
$x = $x + 5;

//maka akan menghasilkan 15.

echo "$x";

//code diatas sama dgn

$x = 10;
$x = 5;
//maka akan meghasilkan nilai 15 juga.
echo "Sama juga $x";



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  action="" method="post">
	Alas <input type="text" name="var1">
	Tinggi <input type="text" name="var2">
	<input type="submit" name="submit" value="hitung">
	
</form>
<?php

	if (isset($_POST['input'])) {
		$x = $_POST['var1'];
		$PENAMBAH = $_POST['var2'];
		$x+=$PENAMBAH;
		echo "jika diketahui nilai awal <b>".$x."</b> dan si Tambah;
		nilai ke 2 sebesar ".$PENAMBAH." maka hasilnya : <b>
		".$x."</b>";
	}
?>

</body>
</html>