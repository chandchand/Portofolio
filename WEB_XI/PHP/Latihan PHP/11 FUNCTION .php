
<?php 

// cara membuat function tanpa variabel

function nama (){
	echo "Halo saya chandra<br>";
	echo "lagi belajar<br>";
	echo "function tanpa variable<br>";

}
// cara membuat function dengan variable

function nama2 ($nama,$kelas){
	echo "Halo nama Saya :".$nama."<br>";
	echo "Saya kelas :".$kelas."<br>";


}
// //// //// /// /// // // // // // //// ///// //// 
nama ();
echo "<hr>";

//memanggil nama
$nama="Chandra";
$kelas="XI";
nama2($nama,$kelas);



 ?>