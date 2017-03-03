<?php
if(isset($_POST['Unggah'])){
	$saran = nl2br($_POST['saran']);
	echo "Kritik/saran anda adalah<br/><b><font color ='blue'><b>$saran</b><font><br/>";
}
?>