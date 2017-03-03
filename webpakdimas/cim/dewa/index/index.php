<!DOCTYPE html>
<body>
	<form method="POST" name="inputForm1">
		Nama: <input type="text" name="nama" /> <br/>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
<?php
	if(isset ($_POST['submit'])){
		echo $_POST['nama']; echo "<br/>";
	}		
	?>