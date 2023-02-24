<!DOCTYPE html>
 <?php
 	session_start();
   ?>
<html>
<head>

	<title>Data Profil Pengguna</title>
</head>
<body>
	<form method="POST" action="proses_login1.php"></form>

	<table border="1" bgcolor="0ef490">
		<tr>
			<td colspan="3">Data Profil Pengguna</td>
		</tr>
		<tr>
			<td>Username</td>
			<td> : </td>
			<td><?php echo $_SESSION['akses'];  ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td> : </td>
			<td><?php echo $_POST['Tanggal']; ?></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><a href="input_login.php">Kembali ke Halaman Login</a></td>
		</tr>
	</table>
</body>
</html>