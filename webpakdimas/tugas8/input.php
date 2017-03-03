<?php 
if (isset($_POST['Submit'])) {
	include('kon.php');

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Nama = $_POST['Nama'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Alamat = $_POST['Alamat'];
$Profesi = $_POST['Profesi'];

	$sql = "Insert into 1541180125_pengguna values('$Username','$Password','$Nama','$Tanggal_Lahir','$Alamat','$Profesi')";

if ($mysql->query($sql)) {
	echo 'data telah berhasil ditambah <a href="awal.php">back</a>';
}else{
	echo "Tambah data gagal: ". $mysql->error;
}
}
 ?>