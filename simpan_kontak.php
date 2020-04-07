<?php
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$database = '18082010028';

		//Create Connection
		$conn = mysqli_connect($servername,$username,$password,$database);
			//pemindahan data dari form kontak
			$nama	= $_POST['nama'];
			$vjkel	= $_POST['jkel'];
			$vemail	= $_POST['email'];
			$valamat = $_POST['alamat'];
			$vkota	= $_POST['kota'];
			$vpesan	= $_POST['pesan'];
			
			$sql = "INSERT INTO kontak VALUES (NULL,'".$nama."','".$vjkel."', '".$vemail."', '".$valamat."', '".$vkota."', '".$vpesan."')";
		mysqli_query($conn,$sql);
		mysqli_close($conn);
		header("location:kontak.php");
		?>