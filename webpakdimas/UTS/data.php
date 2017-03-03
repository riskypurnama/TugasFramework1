<a href="nomorr4.php">Beranda</a> / <a href="tambah_data.php">Tambah Data Member</a>
<br>
<h4>Tambah Data Member</h4>

<form action="process.php" method="POST">
<table>
	<tr><td>No KTP</td>
		<td>:</td>
		<td><input type="text" name="No_KTP" size="15"></td>
	</tr>
	<tr><td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" size="20"></td>
	</tr>
	<tr><td>Jenis Kelamin</td>
	    <td>:</td>
	    <td><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki <br/>
	        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br/>
	    </td>
	</tr>
	<tr><td>Agama</td>
		<td>:</td>
		<td><select name="agama">
			<option value="" disabled selected style="display: none;">Pilih Agama</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="Hindu">Hindu</option>
			<option value="Budha">Budha</option>
			<option value="Katolik">Katolik</option>
		</select>
		</td></tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" size="15"></td>
		</tr>
	<tr><td>No telp</td>
        <td>:</td>
        <td><input type="text" name="no_telp" size="15"></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" name="tambah" value="Tambah"></td>
	</td></tr>
	
</table>
</form>
</body>
</html>