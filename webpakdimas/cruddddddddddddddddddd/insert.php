<?php
	include('Crud.php');
	if(isset($_REQUEST['submit'])){
		$obj = new Crud("localhost:3307","root","","1541180125");
		extract($_REQUEST);
		$obj->insert($id, $nama, $alamat, $usia);	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
<form method="post" action="insert.php">
	<table border="1" cellpadding="5" cellspacing="0">
	  <tr>
	  	<td>ID</td>
	    <td><input type="text" name="id" size="50" /></td>
	  </tr>
	  <tr>
	    <td>Nama</td>
	    <td><input type="text" name="nama" size="50" /></td>
	  </tr>
	  <tr>
	    <td>Alamat</td>
	    <td><input type="text" name="alamat" size="50" /></td>
	  </tr>
	  <tr>
	    <td>Usia</td>
	    <td><input type="text" name="usia" size="50" /></td>
	  </tr>
	  <tr>
	   	<td colspan="2" align="center"><input type="submit" name="submit" value="Simpan" /></td>
	  </tr>
	</table>

</form>

</body>
</html>