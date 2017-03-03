<html>
<title>Beranda</title>
<body>
<h1>Data Member</h1>
<br>
<a href="beranda.php">Data Member</a> / <a href="data.php">Tambah Data Member</a>
<br>
<h4> </h4>

<?php

$_mysqli = new mysqli("localhost:3307","root","","1541180125");

$perintah = $_mysqli -> query("SELECT * FROM 1541180125_risky");

$baris = $perintah -> fetch_all();

echo "<table border=1>";
echo "<tr>
		<td>No.</td>
	  	<td align='center'>No KTP</td>
	  	<td align='center'>Nama</td>
	  	<td align='center'>Jenis Kelamin</td>
	  	<td align='center'>Agama</td>
	  	<td align='center'>Alamat</td>
	  	<td align='center'>No Telp</td>
	  	<td align='center'>Opsi</td>
	  	</tr>";

	  for($i=0;$i<count($baris);$i++)
	  {
	  	$no = $i + 1;
	  	echo"<tr><td align='center'>$no</td>";

	  	for($j=0;$j<count($baris[$i]);$j++)
	  	{
	  		echo "<td>";
	  		echo $baris[$i][$j];
	  		if($j == (count($baris[$i]) - 1 ))
	  		{
	  			echo "<br/>";
	  		}
	  		echo "</td>";
	  		
	  	}
	  	$id= $baris[$i][0];
	  	echo "</td>
	  	<td><a href='ubah.php?no_ktp=$id'>Edit</a> / <a href='hapus.php?no_ktp=$id'>Hapus</a></td>";
	  }
	  echo "</table>";




?>
</body>
</html>