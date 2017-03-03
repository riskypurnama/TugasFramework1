<?php

include "koneksi.php";

if(isset($_POST['komen']) && isset($_POST['namak'])):

	$send= mysql_query("INSERT INTO komentar(`namak`,`komen`)
						VALUES ('$_POST[namak]', '$_POST[komen]')");
	
	if($send):
		echo '<script>location.href="testimonials.php"; </script>';
		else: echo '<script>alert("gagal"); location.href="index.php";</script>'; endif;
	endif;

?>