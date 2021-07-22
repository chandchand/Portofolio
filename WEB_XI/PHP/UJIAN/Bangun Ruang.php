<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Bangun Ruang </title>
</head>
<body>
<form method="post">
		
	<table>
		<h3>Kubus</h3>
 		<tr>
 			<td>Sisi 1</td>
 			<td>: <input type="text" name="sisi1"></td>
 		</tr>
 		<tr>
 			<td>Sisi 2</td>
 			<td>: <input type="text" name="sisi2"></td>
 		</tr>
 		<tr>
 			<td>Sisi 3</td>
 			<td>: <input type="text" name="sisi3"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="isi">Klik untuk hasil</button></td>
 		</tr>
 	</table>
 	<table>
 		<h3>Limas Segiempat</h3>
 		<tr>
 			<td>Sisi 1</td>
 			<td>: <input type="text" name="s1"></td>
 		</tr>
 		<tr>
 			<td>Sisi 2</td>
 			<td>: <input type="text" name="s2"></td>
 		</tr>
 		<tr>
 			<td>Sisi 3</td>
 			<td>: <input type="text" name="s3"></td>
 		</tr>
 		<tr>
 			<td>Sisi 4</td>
 			<td>: <input type="text" name="s4"></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit" name="isi">Klik untuk hasil</button></td>
 		</tr>
 	</table>
 	<table>
 		<h3>Krucut</h3>
 		<tr>
 			<td>Alas</td>
 			<td>: <input type="text" name="alas"></td>
 		</tr>
 		<tr>
 			<td>Tinggi</td>
 			<td>: <input type="text" name="tinggi"></td>
 		</tr>
 			<td></td>
 			<td><button type="submit" name="isi">Klik untuk hasil</button></td>
 		</tr>
 	</table>
 </form>
</body>
</html>
<?php 


if (isset($_POST['isi'])) {
	$ank1 	=$_POST['sisi1'];
	$ank2 	=$_POST['sisi2'];
	$ank3 	=$_POST['sisi3'];
	$sisi1 	=$_POST['s1'];
	$sisi2 	=$_POST['s2'];
	$sisi3 	=$_POST['s3'];
	$sisi4 	=$_POST['s4'];
	$alas 	=$_POST['alas'];
	$tinggi =$_POST['tinggi'];


	function kubus($ank1,$ank2,$ank3){return
		$ank1*$ank2*$ank3;
		}
	function limas ($sisi1,$sisi2,$sisi3,$sisi4){return
		$sisi1+$sisi2+$sisi3+$sisi4;
		}
	function krucut($alas,$tinggi){return
		$alas*$tinggi;
		}
		


		echo "luas kubus yg di cari".kubus ($ank1,$ank2,$ank3)."<br>" ;
		echo "luas limas segitiga yg di cari".limas ($sisi1,$sisi2,$sisi3,$sisi4)."<br>" ;
		echo "luas krucut yg di cari".krucut ($alas,$tinggi)."<br>" ;

}
?>