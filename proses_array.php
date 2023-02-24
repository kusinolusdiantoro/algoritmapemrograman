<h2>Menampilkan Nama Mahasiwa</h2>
<ol>
	<?php 
	$array_mahasiswa= $_POST['nama'];
	for ($i=1; $i <=3 ; $i++) { 
		echo ucfirst(strtolower($array_mahasiswa[$i]))."<br>";
	} 
	echo '<br>';
	print_r ($array_mahasiswa);
	?>
</ol>
<br>
<br>
<a href="input_array.php">Kembali</a>