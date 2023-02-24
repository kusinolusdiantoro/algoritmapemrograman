<?php 
	if (isset($_GET['Kirim']))
		$angka = $_GET['nilai'];
	for ($x=1; $x<=$angka; $x++){
		for ($y=1; $y<=$angka; $y++){
			if ($y==$x || $x+$y == $angka+1){
				echo $y;
			} else{
				echo "&nbsp;";
			}
		}
		echo '<br>';
	}
?>
<br>
<a href="input_pola.php">Kembali</a>