<?php
	$t = date("H");//fungsi date, format tertentu, megambil waktu dari komputer
	if($t<"7"){
		echo "Selamat pagi";
	}elseif($t<"9"){
		echo "Semoga harimu menyenangkan!";
	}else{
		echo "Selamat malam";
	}
?>