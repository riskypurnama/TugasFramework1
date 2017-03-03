<!DOCTYPEhtml>
<body>
		<h1>DATA SISWA</h1>
		<table><cellpading="2" border="1" width="70%">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $_POST['nama']; ?></td>
		</tr>
		<tr>
			<td>Jenis KElamin</td>
			<td>:</td>
			<td><?php $jk = $_POST['jk'];
			echo $jk; ?></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><?php $kelas = $_POST['kelas'];
			echo $kelas; ?></td>
		</tr>
			<td>Keterangan</td>
			<td>:</td>
			<td><?php $keterangan = nl2br($_POST['keterangan']);
			echo $keterangan; ?></td>
		</tr>
	</table>
</body>				