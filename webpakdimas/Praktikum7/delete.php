<?php //memulai dokumen php
include("kon.php"); //memanggil file kon.php untuk koneksi 
$NIS= $_GET['nis']; //mengambil nilai nis dari link 
$sql = "delete from 1541180125_data_siswa where NIS = '$NIS'"; //membuat query delete
if ($mysql->query($sql)) { // apabila query di atas berhasil dijalankan 
	echo 'data telah berhasil dihapus <a href="awal.php">back</a>'; //maka muncul ini
}else{ //jika tidak 
	echo "Hapus data gagal: ". $mysql->error; //maka muncul ini
}
?>