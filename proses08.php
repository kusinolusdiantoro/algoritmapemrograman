<?php
	if (isset($_POST['Pilih'])) {
		$film = $_POST['kartun'];
		echo "Film Kartun Favorit Anda adalah :
		<font color=blue><b>$film</b></font>";
	}
?>
<br>
<br>
<a href="input08.php">Kembali</a>