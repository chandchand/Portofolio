<!DOCTYPE html>
<html>
<head>
	<title>Foreach</title>
</head>
<body>
	
<?php
$books = [
    "PHP Dasar",
    "Funtion",
    "HTML",
    "Boostrap"
];

echo "<h5>Judul Latihan:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

?>

</body>
</html>