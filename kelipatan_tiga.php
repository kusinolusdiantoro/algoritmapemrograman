<?php 
	$num = 30;
	$jumlah = 0;
	for ($i = 1; $i<=$num; $i++){
		if($i%3==0){
			echo "Bilangan kelipatan 3 antara 1 sampai $num yaitu $i<br>";
	$jumlah += 1;
		}
	}
	echo ("Jumlah Bilangan kelipatan 3 mulai 1 sampai dengan $num adalah = $jumlah<br>");
 ?>