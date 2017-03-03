<?php 
	include 'config.php';
	include 'Model_Buku.php';

	$user = new Model_Buku();
	$aksi = $_GET['aksi'];
	
	$tanggal = $_POST['tanggal'];

	function ubahTanggal($tanggal){
		$pisah = explode('/', $tanggal);
		$array = array($pisah[2],$pisah[0],$pisah[1]);
		$satukan = implode('-', $array);
		return $satukan;
	}

	$tanggal_terbit = ubahTanggal($tanggal);

	switch ($aksi) {
		case 'tambah':
			$user->insert($koneksi,$_POST['judul'],$_POST['penulis'],$tanggal_terbit);
			header("location:index.php");
			break;
		case 'update':
			echo $user->update($koneksi,$_GET['id'],$_POST['judul'],$_POST['penulis'],$tanggal_terbit);
			header("location:index.php");
			break;
		case 'delete':
			$user->delete($koneksi,$_GET['id']);
			header("location:index.php");
			break;
		
		default:
			echo "Pilihan Tidak ada";
			header("location:index.php");
			break;
	}
 ?>