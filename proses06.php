<?php
	if (isset($_POST['Pilih'])) {
		$jurusan = $_POST['jurusan'];
		echo "Jurusan Anda adalah
		<b><font color='red'>$jurusan</font></b>";
	}
?>
<br>
<br>
<a href="input06.php">Kembali</a>