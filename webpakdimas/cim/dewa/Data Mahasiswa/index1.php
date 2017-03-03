<form action="proses1.php" method="POST" name="inputForm1">
<h1>DATA SISWA</h1>
<table cellpadding="2" border="1" width="30%">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" size="30"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
			<input type="radio" name="jk" value="Perempuan">Perempuan</td>
	</tr>	
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><textarea name="alamat" cols="25" rows="4"></textarea></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><select name="kelas">
		<option value="oracle1">Oracle 1</option>
		<option value="oracle2">Oracle 2</option>
		<option value="cisco 1">cisco 1</option>
		<option value="cisco 2">cisco 2</option>
		<option value="IBM 1">IBM 1</option>
		<option value="IBM 2">IBM 2</option>
		</select></td>
	</tr>
	<tr>
		<td>keterangan</td>
		<td>:</td>
		<td><textarea name="keterangan" cols="25" rows="4"></textarea></td>
		</tr>
	</table>
	<input type="submit" name="simpan" value="simpan">
	<input type="reset" name="batal" value="batal">
	</form>	