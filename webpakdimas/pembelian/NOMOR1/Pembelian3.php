<?php
if (isset($_POST['submit'])) {
	session_start();
	

	$jmlh = $_SESSION["jmlh"];
	$ds = $_SESSION["ds"];
	$grand = $_SESSION["grand"];
	$bayar = $_POST['byr'];

	for ($i=0; $i < $jmlh ; $i++) { 
		$jenis[$i] = $_SESSION["jenis$i"];
		$nama[$i] = $_SESSION["nama$i"];
		$harga[$i] = $_SESSION["harga$i"];
		$jumlah[$i] = $_SESSION["jumlah$i"];
		$total[$i] = $_SESSION["total$i"];
		$sub = $_SESSION["sub"] ;
	}
	$kem = $bayar - $grand;
	if ($bayar > $grand) {
		
?>
<form action="Pembelian3.php" method="POST">
	<table>
		<tr>
			<td colspan="5" align="center">FORM PEMBELIAN BARANG</td>
		</tr>
		<tr>
			<td>No.</td>
			<td>Jenis</td>
			<td>Nama Barang</td>
			<td>Harga Satuan</td>
			<td>Jumlah Beli</td>
			<td>Total</td>
		</tr>
		<?php
		for ($i=0; $i < $jmlh; $i++) { 
		?>
		<tr>
			<td><?php echo $i+1 ?></td>
			<td><?php echo $jenis[$i]?></td>
			<td><?php echo $nama[$i]?></td>
			<td><?php echo $harga[$i]?></td>
			<td><?php echo $jumlah[$i]?></td>
			<td><?php echo $total[$i]?></td>
		</tr>
		<?php	
		}
		?>
		<tr>
			<td colspan="5" align="right">Sub Total</td>
			<td >
				<?php  echo $sub;?>
			</td>
		</tr>
		<tr>
			<td colspan="5" align="right">Diskon</td>
			<td >
				<?php  echo ($ds*100).'%' ;?>
			</td>
		</tr>
		<tr>
			<td colspan="5" align="right">Grand Total</td>
			<td >
				<?php  echo $grand;?>
			</td>
		</tr>
		<tr>
			<td colspan="5" align="right">Bayar</td>
			<td >
				<?php  echo $bayar;?>
			</td>
		</tr>
		<tr>
			<td colspan="5" align="right">Kembali</td>
			<td >
				<?php  echo $kem;?>
			</td>
		</tr>
	</table>
</form>
<?php
	}else{
?>
<table>
	<tr align="center">
		<td>Form Pembayaran Barang</td>
	</tr>
	<tr>
		<td>Maaf uang yang anda bayarkan kurang dari <?php echo abs($kem)?> yang harus di bayarkan sejumlah <?php echo $grand ?> uang anda hanya <?php echo $bayar ?></td>
	</tr>	
</table>
<?php		
	}
}
?>