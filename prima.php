<?php
	$num = 100;
	{
		$a = 0;
		for ($i = 1; $i <= $num; $i++){
			if ($num % $i == 0){
				$a++;
			}
		}
		if ($a == 2){
			echo "<font style= 'color:red;'>Bilangan Bulat Positif</font> = $num, merupakan Bilangan Prima";
		}else {
		echo "<font style= 'color:red;'>Bilangan Bulat Positif</font> = $num, Bukan merupakan Bilangan Prima";
		}
	}
?>