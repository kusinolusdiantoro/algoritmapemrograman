<html>
 <body>
<?php
 $numbers = array( 1, 2, 3, 4, 5);
 foreach( $numbers as $indeks =>$value ) {
 echo "Nomor Indeks = $indeks. Dengan nilai = $value <br />";
 }
echo "<br>";
 /* Cara Lain mendefinisikan Array. */
 $numbers[0] = "one";
 $numbers[1] = "two";
 $numbers[2] = "three";
 $numbers[3] = "four";
 $numbers[4] = "five";
 foreach( $numbers as $indeks=>$value ) {
 echo " Nomor Indeks = $indeks. Dengan nilai = $value <br />";
 }
 ?>
 </body>
 </html>