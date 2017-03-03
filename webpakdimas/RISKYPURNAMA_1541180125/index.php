<?php 
	include 'config.php';
	include 'Model_Buku.php';

	$user = new Model_Buku();
	$hasil = $user->getdata($koneksi);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>CRUD Buku</h1>
	<h3>Data Buku</h3>
	<a href="form.php?aksi=tambah">Input Data</a>
	<table>
		<tr>
			<td>No</td>
			<td>judul</td>
			<td>penulis</td>
			<td>tanggal</td>
			<td>Aksi</td>
		</tr>
		<?php
		for($i = 1; $i <=count($hasil); $i++){
	 	?>
 		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $hasil[$i]['judul'] ?></td>
			<td><?php echo $hasil[$i]['penulis'] ?></td>
			<td><?php echo $hasil[$i]['tanggal'] ?></td>
			<td>
				<a href="form.php?id=<?php echo $hasil[$i]['id']?>&aksi=update">Edit</a>
				<a href="proses.php?id=<?php echo $hasil[$i]['id']?>&aksi=delete">Delete</a>
			</td>
		</tr>
		<?php 	} ?>
	</table>
</body>
</html>