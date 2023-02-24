<?php
	$ip = 4.00;
	if ($ip>=2.00 && $ip<=2.75){
		echo "IP = $ip, Kategori = Memuaskan";
	} elseif ($ip>2.75 && $ip<=3.50){
		echo "IP = $ip, Kategori = Sangat Memuaskan";
	} else {
		echo "IP = $ip, Kategori = Lulus dengan Pujian";
	}
?>