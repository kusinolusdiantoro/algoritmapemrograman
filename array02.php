<html>
	<body>
 	<?php
 	$marks = array(
 		"mohammad" => array (
 			"physics" => 35,
 			"maths" => 30,
 			"chemistry" => 39
 			),
 		"qadir" => array (
 			"physics" => 30,
 			"maths" => 32,
 			"chemistry" => 29
 			),
 		"zara" => array (
 			"physics" => 31,
 			"maths" => 22,
 			"chemistry" => 39
 			)
	 );
 	/* akses nilai pada array multi-dimensional */
	echo "Marks for mohammad in physics : " ;
	echo $marks['mohammad']['physics'] . "<br />";
	echo "Marks for qadir in maths : ";
	echo $marks['qadir']['maths'] . "<br />";
	echo "Marks for zara in chemistry : " ;
	echo $marks['zara']['chemistry'] . "<br />";
	echo "<br>";
	foreach ($marks as $key => $value) {
		foreach ($value as $key2 => $value2) {
			echo "Nilai $key pada MK $key2 yaitu $value2<br>";
		}
		echo "<br>";
	}
?>
</body>
</html>