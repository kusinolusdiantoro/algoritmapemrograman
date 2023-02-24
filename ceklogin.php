<?php 
			if (isset($_POST['proseslogin'])){
				$user = $_POST['user'];
				$pass = $_POST['pass'];

				if ($user==$_POST['user'] && $pass=='123456'){
					echo "BERHASIL";
				}
				else {
					echo "
					<script>
					alert ('maaf,password salah!!!!');
					window.location.href 'login.php';
					</script>";
				}
			}

		 ?>