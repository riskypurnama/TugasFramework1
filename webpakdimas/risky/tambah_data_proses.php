<?php

if(isset($_POST['tambah']))
{
$_mysqli = new mysqli("localhost","root","","1541180113");
$no_ktp = $_POST['no_ktp'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$masukkan = $_mysqli->query("INSERT INTO 1541180113_dyahdyana VALUES('$no_ktp','$nama','jenis_kelamin','$agama','$alamat','$no_telp')");
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