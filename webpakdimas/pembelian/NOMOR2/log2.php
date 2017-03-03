<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Sukses</title>
</head>
<body>
<p>ANDA TELAH MELAKUKAN LOGIN, dan informasi Anda berikut ini tersimpan di objek session.<br>
<table border="1" width="30%">
	<tr>
		<td>Nama</td>
		<td><?php
			$_SESSION["nama"] = $_POST["user"];
			echo $_SESSION["nama"];
			?>
		</td>
	</tr>
	<tr>
		<td>Profesi</td>
		<td>Dosen</td>
	</tr>
</table>
<br>
<br>
<a href="logout.php">LOGOUT</a>
<br>
<br>
APABILA ANDA TELAH LOGIN ANDA DAPAT MENGKLIK <a href="link.php">link</a> INI UNTUK 
MELAKUKAN CEK SESSION.
<br>
<br>
APABILA ANDA TELAH LOGOUT ANDA TIDAK DAPAT MELAKUKAN CEK SESSION
</p>
</body>
</html>