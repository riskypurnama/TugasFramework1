<?php //memulai dokumen php
if (isset($_POST['simpan'])) { //untuk mengecek isi dari variable dari post 
	include('kon.php');//untuk menghubungkan dengan database yang telah dibuat

$NIS = $_POST['NIS']; // menginputkan nis yang kemudian disimpan pada nilai nis pada  database
$NamaLengkap = $_POST['NamaLengkap'];
$Kelas = $_POST['Kelas'];
$Jurusan = $_POST['Jurusan'];

	$sql = "Insert into 1541180125_data_siswa values('$NIS','$NamaLengkap','$Kelas','$Jurusan')"; //membuat query insert

if ($mysql->query($sql)) { //untuk memastikan apakah data berhasil ditambah , menampilkan query atasnya
	echo 'data telah berhasil ditambah <a href="awal.php">back</a>'; //jika berhasil akan muncul data telah berhasil ditambah 
}else{
	echo "Tambah data gagal: ". $mysql->error; //jika gagal akan muncul tambah data gagal
}
}
 ?>