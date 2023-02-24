<?php 
$y = $_GET['nama'] - 1;
$ayam = $_GET['nama'];
	echo "Anak Ayam = ".$ayam."<br>";
	while ($y >= 2) {
	for ($i=$ayam; $i>=2; $i--){
		echo "Anak ayam turun ". $i;
		echo ", mati satu tinggalah $y <br>";
		$y--;
		
	}
}
	echo "Anak ayam turun 1, mati satu tinggalah Induknya";
 ?>