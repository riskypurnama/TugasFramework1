<?php
	include('Crud.php');
	$obj=new Crud("localhost:3307","root","","1541180125");
	if(isset($_REQUEST['id'])){
		$obj->delete($_REQUEST['id']);
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Hapus Data</title>
</head>
<body>
Menghapus data.....
</body>
</html>