<!DOCTYPE html>
<html>
<head>
	<title>Latihan Case</title>
</head>
<body>
<p align="left" class="style"><h3>latihan Menggunakan case</h3></p>
<form action=""  method="post" name="input">
	<select name="perhitungan">
		<option value="Kubus"> Kubus </option>
		<option value="Limas"> Limas Segiempat </option>
		<option value="Krucut"> Krucut </option>
	</select>
	<br>
<button type="submit" name="Hitung">Klik</button>
</form>

<?php 

if (isset($_POST['Hitung'])) {
	$HITUNGLAH= ($_POST['perhitungan']);
	echo "<br>";
		
switch ($HITUNGLAH) {
	case "Kubus":
		header('location:UJIAN/kubus.php');
		break;

	case "Limas":
		header('Location:UJIAN/Limas Segiempat.php');
		break;
	case "Krucut":
		header('Location:UJIAN/Krucut.php');
		break;

	default:
		echo "Your link for al In Here";
		break;
}
}
?>
</body>
</html>
