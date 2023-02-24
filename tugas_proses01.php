<?php 
	if (isset($_POST['Input'])) {
		$angka = $_POST['nama'];
		echo 'nominalnya adalah : <b>'. "Rp.".number_format($angka).'</b>';
	}
?>
<br>
<br>
<a href="tugas_tampilan01.php">Kembali</a>