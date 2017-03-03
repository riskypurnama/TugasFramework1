<?php

if (isset($_POST['submit'])) {
	session_start();
	$jmlh = $_SESSION["jmlh"];
	$sub = 0;


	for ($i=0; $i < $jmlh; $i++) { 
		$jenis[$i] = $_POST["jenis$i"];
		$nama[$i] = $_POST["nama$i"];
		$harga[$i] = $_POST["harga$i"];
		$jumlah[$i] = $_POST["tot$i"];
		$total[$i] = $harga[$i] * $jumlah[$i];
		$sub = $sub + $total[$i];

		$_SESSION["jenis$i"] = $jenis[$i];
		$_SESSION["nama$i"] = $nama[$i];
		$_SESSION["harga$i"] = $harga[$i];
		$_SESSION["jumlah$i"] = $jumlah[$i];
		$_SESSION["total$i"] = $total[$i];
		$_SESSION["sub"] = $sub;

	}

	if($sub >= 500000){
		$ds = 35/100;
	}elseif ($sub >= 400000 && $sub < 500000) {
		$ds = 25/100;
	}elseif ($sub >= 300000 && $sub < 400000) {
		$ds = 20/100;
	}elseif ($sub >= 200000 && $sub <300000) {
		$ds = 15/100;
	}elseif ($sub > 100000 && $sub <200000) {
		$ds = 10/100;
	}elseif ($sub > 0 && $sub <=100000) {
		$ds = 0/100;
	}
	$dstot = $sub * $ds;
	$grand = $sub - $dstot;
	$_SESSION["ds"] = $ds;
	$_SESSION["grand"] = $grand;
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
				<input type="text" name="byr">
			</td>
		</tr>
		<tr>
			<td colspan="5" align="right">
				<input type="submit" name="submit" value="Hitung">
			</td>
		</tr>
	</table>
</form>

<?php
}

?>