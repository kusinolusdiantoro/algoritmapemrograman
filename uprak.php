<?php 
$bilangan = $_GET['Nilai'];
echo "Bilangan ganjil dan genap antara 1 sampai dengan ".$bilangan."yaitu<br>";
echo "Bilangan genap : ";
for ($i=1; $i<=$bilangan; $i++){
	if($i%2==0){
		echo $i;
	}
}

echo "<br>";
echo "Bilangan ganjil : ";
for ($i=1; $i<=$bilangan; $i++){
	if($i%2==1){
		echo $i;
	}
}
 ?>
