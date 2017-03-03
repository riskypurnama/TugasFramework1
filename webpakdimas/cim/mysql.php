<?php
$_mysqli = new mysqli("localhost", "root", "", "1541180125");
$hasil = $_mysqli->query("SELECT * FROM 1541180125_jenis_pakaian");
$baris = $hasil-> fetch_assoc();
print_r($baris);
?>