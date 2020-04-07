<!DOCTYPE html>
<html>
<head>
	<title>Login Buku Tamu</title>
	<link rel="stylesheet" type="text/css" href="efek.css">
</head>
<body>
	<?php
	// menyeleksi apakah terdapat pesan yang diberikan dari page sebelumnya
	if(isset($_GET['pesan'])){
		//menyeleksi pesan sesuai isinya dan perlakuan yang akan diberikan
		if($_GET['pesan'] == "gagal"){
			echo ("<script>window.alert('Login anda gagal, username tau password salah!!')</script>");
			// memunculkan alert javascript bahwa login gagal
		}else if($_GET['pesan'] == "logout"){
			// memunculkan alert javascript bahwa anda telah logout
			echo ("<script>window.alert('Anda telah logout!!')</script>");
		}else if($_GET['pesan'] == "belum_login"){
			// memunculkan alert javascript bahwa login belum dilakukan
			echo ("<script>window.alert('Silahkan login untuk melanjutkan')</script>");
		};
	};
	?>
	<br>	
	<form method="post" action="cek_login.php">
		<table align="center" border="55" class="data-table">
			<tr>
				<td align="center" colspan="3">
					<h2 align="center">Login Daftar Kontak</h2>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user" placeholder="Masukkan username anda"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>