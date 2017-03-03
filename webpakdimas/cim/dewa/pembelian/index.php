<!DOCTYPE html>
<html>
<head>
	<title>PEMBELIAN</title>
</head>
<body>
<h2>FORM PEMBELIAN BARANG</h2>
<form action="pembelian.php" method="POST" name="inputForm1">
	<table border="1" width="50%">
		<tr>
			<td width="25%">
				Jenis Barang
			</td>
			<td width="1%">:</td>
			<td width="24%"><select name="barang">
				<option value="Celana">Celana</option>
				<option value="Jas">Jas</option>
				<option value="Jaket">Jaket</option>
				<option value="Kemeja">Kemeja</option>
				<option value="Sweeter">Sweeter</option>
				<option value="T-Shirt">T-Shirt</option>				
			</select>
		</tr>
		<tr>
			<td width="25%">
				Nama Barang
			</td>
			<td width="1%">:</td>
			<td width="24%"><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="25%">
				Harga Satuan
			</td>
			<td width="1%">:</td>
			<td width="24%"><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td width="25%">
				Jumlah Pembelian
			</td>
			<td width="1%">:</td>
			<td width="24%"><input type="text" name="jumlah"></td>
		</tr>		
	</table>
	<input type="submit" name="hitung" value="Hitung">
	<input type="reset" name="batal" value="Batal">
</form>	
</body>
</html>