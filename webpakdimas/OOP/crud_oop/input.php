<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<!-- form akan dikelola di file proses.php
terdapat parameter aksi.
untuk apa parameter ini ? = digunakan
agar semua
proses dijalankan pada sebuah file ini 
saja yaitu file proses.php -->
<form action="proses.php?aksi=tambah" method="post">

<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
