<!DOCTYPE html>
<?php
	session_start();
  ?>

<html>
<head>
	<title>Form Login</title>

</head>
<body>

	<?php 
		if (isset($_POST['proseslogin'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			if ($user==$_POST['user'] and $pass=='123456'){
				$_SESSION['akses']=$user;
				header("location:proses_login1.php");
			}
			 else {
			 	echo "
			 		<script>
						alert ('Password Salah, Silahkan Masukkan Password Kembali');
						window.location.href='input_login.php';
						</script>
					";
			 }

		}
		else {

	 ?>

		<form method="POST" action="<?php
		$_SERVER['PHP_SELF'];  ?>">
			<table border="1" bgcolor="0ef490">
			<tr>
				<td colspan="3">Halaman Login</td>
			</tr>
			<tr>
				<td>Username</td>
				<td> : </td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td colspan= "3" align="center">
					<button type="submit" 
					name="proseslogin">Kirim</button></td>
			</tr>
		</table>
		</form>
		<?php
			}
		  ?>
</body>
</html>