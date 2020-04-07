<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$database = '18082010028';
		$conn = mysqli_connect($servername,$username,$password,$database);
		mysqli_connect($servername,$username,$password,$database) or die("Koneksi gagal dibuat");
?>