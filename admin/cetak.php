<!DOCTYPE html>
<html>
<head>
  <title>Daftar Kontak</title>
  <link rel="stylesheet" type="text/css" href="efek.css">
</head>
<body>

<div>
        
<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  } else if($_GET['pesan'] == "login") {
      echo ("<script>window.alert('Selamat, anda telah login!!')</script>");
  };
	          include('koneksi.inc.php');
              $select = "SELECT * FROM kontak order by nama asc;";
              $qry = mysqli_query($conn, $select) or die("Proses cetak gagal");
              echo "
              <h1 align='center'>
              Daftar Kontak disajikan dalam tabel berikut.
              </h1>
              <table width='75%' cellpadding='2' cellspacing='0' border='1' class='data-table' align='center'>
                <thead>
                <tr>
                  <th>NO</th>
                  <th>ID</th>
                  <th>NAMA</th>
                  <th>JENIS KELAMIN</th>
                  <th>EMAIL</th>
                  <th>ALAMAT</th>
                  <th>KOTA</th>
                  <th>PESAN</th>
                </tr>
                </thead>
                <tbody>
                ";
              $no = 1;
              while ($hasil = mysqli_fetch_row($qry)) 
                  {
                    echo '
                    
                      <tr>
                        <td>'.$no.'</td>
                      	<td>'.$hasil[0].'</td>
                        <td>'.$hasil[1].'</td>
                        <td>'.$hasil[2].'</td>
                        <td>'.$hasil[3].'</td>
                        <td>'.$hasil[4].'</td>
                        <td>'.$hasil[5].'</td>
                        <td>'.$hasil[6].'</td>
                        </tr>';
                  		$no++;  
                  }
                  echo "</tbody></table>";
                 ?><p align="center">
                  <button value="Logout dan Kembali" ><a href="logout.php">Logout dan Kembali</a></button>
                   
                   </p>
              </div>
</body>
</html>