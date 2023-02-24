<h2>Kata Yang Sudah di Balikkan</h2>
<ol>
<?php
if (isset($_POST['nama'])) {
$input_balik_kata= $_POST['nama'];
    echo "<font color = 'red'> string</font>"." = ".$input_balik_kata."<br>";
    echo "dibalik = ";
    $count = strlen($input_balik_kata);
	for ($i=$count; $i >=0; $i--) { 
		$output = substr($input_balik_kata, $i,1);
        echo $output;

    }
    echo '<br>';
    echo $input_balik_kata[0]; 
    echo '<br>';
    echo $input_balik_kata[1];
    echo '<br>';
    print_r($input_balik_kata);
 }
 ?>
 </ol>
 <br>
<br>
<a href="input_balik_kata.php">Kembali</a>