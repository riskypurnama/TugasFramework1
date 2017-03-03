<?php
include "koneksi.php";

$result = mysql_query("insert into pesan(`tgl1`, `bln1`, `thn1`, `tgl2`, `bln2`, `thn2`, `type`, `jumlah`, `nama`)
											values('$_POST[tgl1]',
											'$_POST[bln1]', '$_POST[thn1]', '$_POST[tgl2]', '$_POST[bln2]', '$_POST[thn2]', '$_POST[type]', '$_POST[jumlah]', '$_POST[nama]')										
											");

if($result):
	echo "<script>alert('Berhasil di simpan!');</script>";
	echo "<script>location.href='index.php';</script>";
	
else:
	echo"<script>alert('Gagal disimpan!');</script>";
	echo"<script>location.href='booking.php';</script>";
endif;

?>