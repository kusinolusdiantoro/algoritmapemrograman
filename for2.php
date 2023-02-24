<?php
	echo "Contoh 5<br>";
	$a = 0;
	$b = 0;
	echo "Nilai variabel\$a = $a sebelum loop<br>";
	echo "Nilai variabel \$b = $b sebelum loop<br>";
	for ($i = 0;$i<5;$i++){
		echo "Nilai\$a pada loop ke $i adalah $a<br>";
		//echo "Nilai \$b pada loop ke $i adalah $b<br>";
		$a+=10;
		$b+=5;
		echo "Nilai\$a pada loop ke $i setelah dilakukan incrementasi sebanyak 10 adalah $a<br>";
		echo "<br><br>";
	}
	echo ("Pada akhir Loop\$a = $a and \$b = $b");
	echo "<br><br>"
?>