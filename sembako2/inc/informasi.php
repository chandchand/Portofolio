<?php
include "koneksi.php";
$QUERY_INFO = mysqli_query ($koneksi, "SELECT * FROM master_siswa");
$DATA_INFO = mysqli_fetch_array($QUERY_INFO);
?>