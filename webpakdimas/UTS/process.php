<?php

if(isset($_POST['tambah']))
{
$_mysqli = new mysqli("localhost:3307","root","","1541180125");
$No_ktp = $_POST['No_ktp'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Agama = $_POST['Agama'];
$Alamat = $_POST['Alamat'];
$No_Tlp = $_POST['No_Tlp'];

$masukkan = $_mysqli->query("INSERT INTO 1541180125_risky VALUES('$no_ktp','$nama','jenis_kelamin','$agama','$alamat','$no_telp')");
if($masukkan)
	{
		echo "Data Berhasil di Tambahkan !<br>";
		echo "<a href='beranda.php'>Kembali</a>";
	}
	else
	{
		echo "Gagal Menambahkan Data !<br>";
		echo "<a href='beranda.php'>Kembali</a>";
	}
}
	else
	{
		echo "<script>window.history.back()</script>";
	}

?>