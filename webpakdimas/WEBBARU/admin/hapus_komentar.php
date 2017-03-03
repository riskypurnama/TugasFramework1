<?php

include 'koneksi.php';

if(isset($_GET['id_komentar'])):
	$status = mysql_query("DELETE FROM komentar where id_komentar=".$_GET['id_komentar']);
	if($status): echo '<script>location.href="list_komentar.php";</script>';
	else : echo '<script>alert("gagal");location.href="list_pemesan.php";</script>'; endif;
endif;
?>	