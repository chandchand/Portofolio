
<?php

ob_start();
include ('koneksi.php');
mysqli_query($CONNECT);
$DELETE = "DELETE FROM tbl_siswa WHERE id_bio= '$_GET[id]'";
mysqli_query($CONNECT, $DELETE);

header('location:index.php');


 ?>