<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_SESSION["nama"]))
{
	echo $_SESSION["nama"];
}
else
{
	echo "ANDA MELIHAT HALAMAN ERROR INI KARENA ANDA TELAH MELAKUKAN LOGOUT
	";
	echo '<a href="login.php">klik disini</a>';
}			
?>
</body>
</html>