<?php

include("gopakaian.php");

$koneksi=new koneksi_basis_data();
$koneksi->host_name="localhost:3307";
$koneksi->database="1541180125";
$koneksi->pengguna="root";
$koneksi->password="";

$m = $koneksi->buka_koneksi();

$jp = new jenis_pakaian();
$result = $jp->get_jenis_pakaian($m);

echo "<table>";

for($i = 0;$i <count ($result); $i++){
	echo "<tr>";
	echo "<td>".$result[$i]["id_jenis_pakaian"]."</td>";
	echo "<td>".$result[$i]["jenis_pakaian"]."</td>";
}
?>