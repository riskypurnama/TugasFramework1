<?php

include 'database.php';

$name= $_POST['name']; //get the nama value from form
$q=mysql_query("SELECT * from user where nama like '%$nama%'"); //query to get the search result
$result = mysql_query($q); //execute the query $q
/*
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>No</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
<td>usia</td>
</tr>";
*/
if($result===false){
  die(mysql_error());
}
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['id']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['usia']."</td>
</tr>";
}
echo "</table>";
?>
