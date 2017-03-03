<?php 
$mysql = new mysqli("localhost:3307","root","","1541180125");

if ($mysql->connect_error) {
echo "koneksi gagal : ". $mysql->connect_error;
}
?>