<?php 
// mengaktifkan sesi sebuah php
session_start();
 
// menghubungkan dengan koneksi
include ('koneksi.inc.php');

// menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['pass'];
 
// menyeleksi data admin dengan username dan password yang sesuai pada database 18082010028 dengan tabel admin
$data = mysqli_query($conn,"select * from admin where user='$username' and pass='$password';"); 
//mysqli_query berguna untuk memanggil sebuah query sql

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

//perlakuan ketika data yang diinput ada pada tabel admin
if($cek > 0){
	$_SESSION['user'] = $username; //berguna untuk menyimpan variabel username pada sesi login
	$_SESSION['status'] = "login"; //menyimpan variabel status sebagai login pada sesi tersebut
	header("location:cetak.php?pesan=login"); //mengarahkan ke laman cetak.php dengan menyimpan value pesan login
}else{
	header ("location:index.php?pesan=gagal"); //mengarahkan ke laman index.php dengan menyimpan value pesan gagal
	echo "<script>window.alert('Login anda gagal, username tau password salah!!')</script>"; //memunculkan alert sesuai pesan yang diberikan
}
?>