<?php 
if (isset($_POST['ubah'])) {
	include("kon.php");

	$NIS = $_POST['NIS'];
	$NamaLengkap = $_POST['NamaLengkap'];
	$Kelas = $_POST['Kelas'];
	$Jurusan = $_POST['Jurusan'];

	$sql = "update 1541180125_data_siswa set NamaLengkap = '$NamaLengkap',Kelas = '$Kelas',Jurusan='$Jurusan' where NIS = '$NIS'";

	if ($mysql->query($sql)) {
		echo 'data telah berhasil di update<a href="awal.php">back</a>';
	}else{
		echo "Edit data gagal: ". $mysql->error;
	}	
}
?>