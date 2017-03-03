<form action="check box.php" method="POST">
<h2>Pilih Band Favorit Anda: </h2>
<input type="checkbox" name='band01' value="Padi" checked>
Padi<br/>
<input type="checkbox" name='band02' value="Sheila on 7">
Sheila on 7<br/>
<input type="checkbox" name='band03' value="Dewa 19">
Dewa 19<br/>
<input type="checkbox" name='band04' value="Ungu">
Ungu<br/>
<input type="submit" name="Pilih" value="Pilih">
</form>
<?php
if(isset($_POST['Pilih'])){
	echo "Band favorit anda adalah<br/>";
	if(isset($_POST['band01'])){
		echo "+ ".$_POST['band01']."<br/>";
	}
	if(isset($_POST['band02'])){
		echo "+ ".$_POST['band02']."<br/>";
	}
	if(isset($_POST['band03'])){
		echo "+ ".$_POST['band03']."<br/>";
	}
	if(isset($_POST['band04'])){
		echo "+ ".$_POST['band04']."<br/>";
	}
}
?>