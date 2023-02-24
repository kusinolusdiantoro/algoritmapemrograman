<?php 
$bilangan = $_GET['nama'];
echo "Bilangan ganjil dan genap dari 1 sampai ". $bilangan." yaitu<br>";
echo "Bilangan ganjil = ";
for ($i=1; $i<=$bilangan;$i++){
if ($i%2==1){
	echo $i;
	echo "&nbsp";
}
}
echo "<br>";
echo "Bilangan genap = ";
for ($i=1; $i<=$bilangan;$i++){
if ($i%2==0){
	echo $i;
	echo "&nbsp";
}
}

 ?>
 