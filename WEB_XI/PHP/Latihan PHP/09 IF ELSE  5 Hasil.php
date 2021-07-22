<?php 
	if (isset($_POST["isi"])) {
			$nama 		= $_POST["nama"];
			$nis 		= $_POST["nis"];
			$mtk 		= $_POST["mtk"];
			$indo 		= $_POST["indo"];
			$batas 		= $_POST["batas"];
			$rata 		= ($mtk+$indo)/2;
	if ($mtk<=50) {
		$pmtk="Sangat Kurang";
	}
	elseif ($mtk<=50) {
			$pmtk="Kurang";
	}
	elseif ($mtk<=65) {
			$pmtk="Cukup";
	}
	elseif ($mtk<=75) {
			$pmtk="Baik";
	}
	elseif ($mtk<=85) {
			$pmtk="Baik";
	}
	else  {
		$pmtk="Sangat Baik";
	}

	if ($indo<=50) {
		$pindo="Sangat Kurang";
	}
	elseif ($indo<=50) {
			$pindo="Kurang";
	}
	elseif ($indo<=65) {
			$pindo="Cukup";
	}
	elseif ($indo<=75) {
			$pindo="Baik";
	}
	elseif ($indo<=85) {
			$pindo="Baik";
	}
	else  {
		$pindo="Sangat Baik";
	}

	if ($mtk>=$batas && $indo>=$batas) {
		$STATUS="LULUS";
	}	else {
		$STATUS="TIDAK LULUS";
	}



?>
<b>Siswa yang bernama :</b>
<table>
	<tr>
		<td width="30px"></td><td>Nama</td><td>:</td> <td><?php echo $nama ?></td>
		<td></td><td>Nis</td><td>:</td> <td><?php echo $nis ?></td>
	</tr>
</table>
<b>Telah mengikuti ujian dan mendapatkan Nilai</b>
<table>
	<tr>
		<td width="30px"></td><td>Matematika</td><td>:</td> <td><?php echo $mtk ?></td><td><?php echo $pmtk; ?></td>
	</tr>
	<tr>
		<td></td><td>Indonesia</td><td>:</td> <td><?php echo $indo ?></td><td><?php echo $pindo; ?></td>
	</tr>
</table>

Sesuai dengan Kriteria KKM sebesar <b> <?php echo $batas; ?></b>, maka siswa tersebut dinyatakan <b><?php echo $STATUS; ?></b>

<?php
}
?>
