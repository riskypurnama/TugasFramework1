<!DOCTYPE html>
<html>
<head>
	<title>PEMBELIAN</title>
</head>
<body>
<h2>FORM PEMBELIAN BARANG</h2>
	<table border="1" width="50%">
		<tr>
			<td width="25%">
				Jenis Barang
			</td>
			<td width="1%">:</td>
			<td width="24%"><?php $barang=$_POST['barang'];echo $barang;?>
		</tr>
		<tr>
			<td width="25%">
				Nama Barang
			</td>
			<td width="1%">:</td>
			<td width="24%"><?php echo $_POST['nama']?></td>
		</tr>
		<tr>
			<td width="25%">
				Harga Satuan
			</td>
			<td width="1%">:</td>
			<td width="24%"><?php $harga=$_POST['harga']; echo $harga?></td>
		</tr>
		<tr>
			<td width="25%">
				Jumlah Pembelian
			</td>
			<td width="1%">:</td>
			<td width="24%"><?php $jumlah=$_POST['jumlah']; echo $jumlah?></td>
		</tr>
		<tr>
			<td width="25%">
				Total
			</td>
			<td width="1%">:</td>
			<td width="24%"><?php echo $harga*$jumlah;?></td>
		</tr>		
	</table>
</body>
</html>