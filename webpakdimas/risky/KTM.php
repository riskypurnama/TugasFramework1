<!DOCTYPE html>
<html>
<head>
<title>Member</title>
</head>
<body>
<a href="beranda.php"> Member </a>/<a href="DataSiswa.php">Tambah Data</a>
<h3> Member </h3>
<form action="tambah.php" method="POST">
<table>
<tr>
<td>No_KTP</td>
<td> : </td>
<td><input type="1541180211" name="No_KTP"></td>
</tr>
<tr>
<td>Nama</td>
<td> : </td>
<td><input type="text" name="Nama"></td>
</tr>
<tr>
<td>Jenis_Kelamin</td>
<td> : </td>
<td>
<select name="Jenis_Kelamin">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</td>
</tr>
<tr>
<td>Agama</td>
<td> : </td>
<td>
<select name="Agama">
<option value="Kristen">Kristen</option>
<option value="Islam">Islam</option>
<option value="Hindhu">Hindhu</option>
<option value="Budha">Budha</option>
<option value="Katolik">Katolik</option>
</select>
</td>
</tr>
</tr>
<tr>
<td>Alamat</td>
<td> : </td>
<td><input type="text" name="Alamat"></td>
</tr>
</tr>
<tr>
<td>No_Tlp</td>
<td> : </td>
<td><input type="text" name="No_Tlp"></td>
<td colspan="2" align="right"></td>
<td><input type="submit" name="simpan"></td>
</tr>
</table>
</form>
</body>
</html>