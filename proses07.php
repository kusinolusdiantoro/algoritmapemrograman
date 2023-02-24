<?php
if (isset($_POST['Pilih'])) {
	echo "Band Favorit Anda adalah :<br>";
	if (isset($_POST['band01'])) {
		echo "1. " . $_POST['band01'] . "<br>";
	}
	if (isset($_POST['band02'])) {
		echo "2. " . $_POST['band02'] . "<br>";
	}
	if (isset($_POST['band03'])) {
		echo "3. " . $_POST['band03'] . "<br>";
	}
	if (isset($_POST['band04'])) {
		echo "4. " . $_POST['band04'] . "<br>";
	}
}
?>
<br>
<br>
<a href="input07.php">Kembali</a>