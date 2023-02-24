<?php
$data = array(
				array('text'=>'Link ke file04.php','nilai'=>'Anda dapat membuka tautan <a href="link04.php">berikut</a> untuk menuju ke halaman link04.php'),
				array('text'=>'Link ke file04.php dengan menggunakan attribut_blank','nilai'=>'Anda dapat membuka tautan <a href="link04.php"target="_blank">berikut</a> untuk menuju ke halaman link04.php'),
				array('text'=>'Link ke file04.php dengan menggunakan attribut_top','nilai'=>'Anda dapat membuka tautan <a href="link04.php"target="_top">berikut</a> untuk menuju ke halaman link04.php'),
				array('text'=>'Link ke file04.php dengan menggunakan attribut_parent','nilai'=>'Anda dapat membuka tautan <a href="link04.php"target="_top">berikut</a> untuk menuju ke halaman link04.php')
		);
?>
<!-- Penggunaan tabel dimaksudkan agar pembuatan tabel akan terlihat lebih rapi -->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
			<title>PHP dan HTML</title>
</head>
<body>
		<table width="70%">
			<?php
			$counter = 0;
			while ($counter < count($data)) :
			?>
			<tr>
				<td width="2%"><?=$counter+1;?></td>
				<td width="40%"><?=$data[$counter]['text']?></td>
				<td width="2%">:</td>
				<td><?=$data[$counter]['nilai']?></td>
			</tr>
			<?php
				$counter++;
			endwhile;
			?>
		</table>
	</body>
</html>