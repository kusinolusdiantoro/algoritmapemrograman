<!DOCTYPE html>
<?php 
	session_start();
	
 ?>
<html>
<head>
	<title>Edit Profil</title>
</head>
<body>
	<form method="POST" action="proses_login2.php">
	<table border="1" bgcolor="0ef490">
		<tr>
			<td colspan="3">Edit Profil Pengguna</td>
		</tr>
		<tr>
			<td>Username</td>
			<td> : </td>
			<td><?php echo $_SESSION['akses'];  ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td> : </td>
			<td><input type="date" name="Tanggal"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><button type="submit">Kirim</button></td>
		</tr>
	</table>
	</form>
</body>
</html>