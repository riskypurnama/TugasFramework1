<!DOCTYPE html>
<html> <!--untuk memulai dokumen html-->
<head>
<title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Simpele CRUD</h1>
<a href="awal.php"> Beranda </a>/<a href="data.php">Tambah Data</a>
<h3>Tambah Data Siswa</h3>
<form action="tambah.php" method="POST"> <!--membuat form yang terhubung dengan file tambah.php-->
<table>
<tr> <!-- membuat baris baru-->
<td>NIS</td>
<td> : </td> <!-- membuat kolom-->
<td><input type="text" name="NIS"></td> <!-- membuat text box NIM-->
</tr>
<tr>
<td>Nama Lengkap</td>
<td> : </td>
<td><input type="text" name="NamaLengkap"></td> <!--membuat textbox NamaLengkap text-->
</tr>
<tr><!-- membuat baris baru-->
<td>Kelas	</td>
<td> : </td>
<td>
<select name="Kelas"> <!--membuat combobox dengan nama kelas comboo-->
<option value="X">X</option>
<option value="XI">XI</option>
<option value="XII">XII</option>
</select>
</td>
</tr>
<tr>
<td>Jurusan</td>
<td> : </td> <!-- membuat kolom-->
<td>
<select name="Jurusan"> <!--membuat combobox dengan nama jurusan, combo-->
<option value="mipa">MIPA</option>
<option value="ips">IPS</option>
<option value="bahasa">BAHASA</option>
</select>
</td>
</tr>
<tr>
<td colspan="2" align="right"></td>
<td><input type="submit" name="simpan"></td> <!--tombol botton-->
</tr>
</table>
</form>
</body>
</html>