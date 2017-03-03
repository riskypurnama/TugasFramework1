<?php
include 'database.php';
$db = new database();

 $aksi = $_GET['aksi'];
 //disini terdapat object input
 //yang digunakan untuk mengirim
 //data nama,alamat dll
 //yang diinput untuk saya kirim
 //ke class database dengan
 //menggunakan method input
 if($aksi == "tambah")
 {
 	$db->input($_POST['nama'],$_POST['alamat'],
  $_POST['usia']);
 	header("location:tampil.php");
 }

 elseif($aksi == "hapus")
 {
 	$db->hapus($_GET['id']);
	header("location:tampil.php");
 }

  elseif($aksi == "update")
  {
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	header("location:tampil.php");
 }
?>
