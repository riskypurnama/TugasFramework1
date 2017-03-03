<?php

$_mysqli = new mysqli("localhost:3307", "root", "", "coba");

if($_mysqli->connect_error){
	echo $_mysqli->connect_error;
}else{
	echo "berhasil";
}
?>