<!DOCTYPE html>
<head>
<title>Pendaftaran Kontak</title>
</head>
<body>
	<div>
		<h1>Form Pendataan Kontak</h1>
		<div>
        <form action="simpan_kontak.php" method="POST" name="simpan">
        <table>
        <thead>
        	<tr>
        	<td colspan="4">Silahkan Mengisi Form Pendaftaran dibawah ini.
            </td>
            </tr>
        </thead>
        	<tbody align="left">
            <tr>
            <td>
            Nama
            </td>
            <td>
            <input type="text" name="nama" maxlength="30"></input>
            </td>
            </tr>            
            <tr>
            <td>
            Jenis Kelamin
            </td>
            <td>
            <p><input type="radio" name="jkel" value="Laki-laki">Laki-laki</input>
            <input type="radio" name="jkel" value="Perempuan">Perempuan</input></p>
            </td>
            </tr>          
            <tr>
            <td>Email</td>
            <td><input type="text" name="email" maxlength="40"></input>
            </td>
            <tr>
            <td>
            Alamat
            </td>
            <td>
            <input type="text" name="alamat" maxlength="50"></input>
            </td>
            </tr>
            <tr>
                <td>
                    Kota
                </td>
                <td>
                    <input type="text" name="kota" maxlength="20"></input>
                </td>
            </tr>
        	<tr>
            <td>
            Pesan
            </td>
            <td>
            <textarea rows="5" cols="50" name="pesan"></textarea>
            </td>
            <td colspan="4" align="center">
            <p><input class="logo" type="submit" name="simpan" value="Simpan">
			<input class="logo" type="reset" name="hapus" value="Reset"></p>
            </td>
            </tr>
            </table>
        </form>
		</div>
	</div>
</body>
</html>