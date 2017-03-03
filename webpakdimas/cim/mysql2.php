<?php
$_mysqli = new mysqli
("localhost", "root", "", "1541180125");

$perintah = $_mysqli->query
("SELECT * FROM 1541180125_jenis_pakaian");

$baris = $perintah->fetch_all();

echo "<table border=1>";
echo "<tr><td>id_jenis_pakaian</td>
		<td>jenis_pakaian</td></tr>";
	for($i=0;$i<count($baris);$i++) {
		echo "<tr>";
		for($j=0;$j<count($baris[$i]);$j++){
		echo $baris[$i][$j];
		if($j == (count($baris[$i]) - 1)){
			echo "<br/>";
		}
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>