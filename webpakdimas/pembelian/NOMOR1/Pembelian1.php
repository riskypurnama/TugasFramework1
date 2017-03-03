//Rizky Purnamasari
//1541180125
//28
<br/>
<?php
	if (isset($_POST['submit'])) {
		session_start();
		$jmlh = $_POST['jmlh'];	
		$_SESSION["jmlh"] = $jmlh;
?>
<form action="Pembelian2.php" method="POST">
	<table bgcolor="blue" align="center" border="1">
		<tr>
			<td colspan="5" align="center">FORM PEMBELIAN BARANG</td>
		</tr>
		<tr>
			<td>No.</td>
			<td>Jenis</td>
			<td>Nama Barang</td>
			<td>Harga Satuan</td>
			<td>Jumlah Beli</td>
		</tr>
		<?php
		for ($i=0; $i < $jmlh; $i++) { 
		?>
		<tr>
			<td><?php echo $i+1 ?></td>
			<td>
				<select name="jenis<?php echo $i?>">
					<option>Celana</option>
					<option>Celana Panjang</option>
					<option>Baju</option>
					<option>Baju Koko</option>
				</select>
			</td>
			<td><input type="text" name="nama<?php echo $i?>"></td>
			<td><input type="text" name="harga<?php echo $i?>"></td>
			<td><input type="text" name="tot<?php echo $i?>"></td>
		</tr>
		<?php	
		}
		?>
		<tr>
			<td colspan="5" align="right">
				<input type="submit" name="submit" value="Hitung">
				<input type="reset" name="clear" value="Batal">
			</td>
		</tr>
	</table>
</form>

<?php
	}	
?>