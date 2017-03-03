<?php

include 'koneksi.php';

if(isset($_GET['id_pemesan'])):
	$status = mysql_query("DELETE FROM pesan where id_pemesan=".$_GET['id_pemesan']);
	if($status): echo '<script>location.href="list_pemesan.php";</script>';
	else : echo '<script>alert("gagal");location.href="list_komentar.php";</script>'; endif;
endif;
?>	