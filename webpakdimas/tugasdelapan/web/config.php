<?php 
	$host = "localhost:3307";
	$user = "root";
	$pass = "";
	$db="1541180125";

	$mysql = new mysqli ($host,$user,$pass,$db);

	if ($mysql->connect_error) {
		die("Koneksi gagal ".$mysql->connect_error);
	}
 ?>