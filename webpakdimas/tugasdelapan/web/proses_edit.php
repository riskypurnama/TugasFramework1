<?php 
session_start();
if (isset($_SESSION['username'])) {
	include('config.php');

	$pass = $_POST['password'];
	$rePass = $_POST['re_password'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$alamat = $_POST['alamat'];
	$profesi = $_POST['profesi'];
	$status = $_POST['status'];

	if ($pass == $rePass) {
		$query = "update pengguna set pswd = '$rePass', nama = '$nama',tanggal_lahir='$tanggal',alamat='$alamat',provesi='$profesi',status = '$status'";
		
		if ($mysql->query($query)) {
			$_SESSION['ket'] = "Data Telah di Ubah";
			header("location: beranda.php");
		}else{
			die("Error : ". $mysql->error);
		}	

	}else{
		$_SESSION['ket'] = "Password Tidak Sama";
		header("location: edit.php");
	}
}else{
 header("location: index.php");
}
?>