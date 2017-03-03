<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="jquery/jquery-ui.css">
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="jquery/jquery-ui.js"></script>
	<script type="text/javascript">
		$("document").ready(function(){
			$("#tanggal").datepicker({});
		});
	</script>
</head>
<body>
<?php 
	include 'config.php';
	include 'Model_Buku.php';

	$user = new Model_Buku();
	
	$aksi = $_GET['aksi'];
	
	if ($aksi == 'update') {
		$id = $_GET['id'];
		$hasil = $user->getdataWhere($koneksi,$id);
		for($i = 1; $i <= count($hasil); $i++){
			$id = $hasil[$i]['id'];
		 	$judul = $hasil[$i]['judul'];
		 	$penulis = $hasil[$i]['penulis'];
		 	$tanggal = $hasil[$i]['tanggal'];
		} 

		function ubahTanggal($tanggal){
			$pisah = explode('-', $tanggal);
			$array = array($pisah[1],$pisah[2],$pisah[0]);
			$satukan = implode('/', $array);
			return $satukan;
		}

		$tanggal_terbit = ubahTanggal($tanggal);
	}
	
 ?>
	<h1>CRUD Buku</h1>
	<h3>Data Buku</h3>
	<form action="<?php 
	if($aksi== 'update'){
		echo "proses.php?id=$id&aksi=update";
		}else{ 
			echo "proses.php?aksi=tambah";
			}
	?>" method="POST">
		<table>
			<tr>
				<td><label>Judul</label></td>
				<td><input type="text" name="judul" value="<?php if($aksi == 'update'){ echo $judul; } ?>" required></td>
			</tr>
			<tr>
				<td><label>Penulis</label></td>
				<td><input type="text" name="penulis" value="<?php if($aksi == 'update'){ echo $penulis; } ?>" required></td>
			</tr>
			<tr>
				<td><label>Tanggal</label></td>
				<td><input type="text" name="tanggal" id = "tanggal" value="<?php if($aksi == 'update'){ echo $tanggal_terbit; } ?>" required></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>		
	</form>
</body>
</html>