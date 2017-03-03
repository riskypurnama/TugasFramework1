<?php

	include('kon.php');
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
$sql = "select*from 1541180125_pengguna where Username = '$Username' and Password = '$Password'";
$result = $mysql->query($sql);

if(!$row = $result->fetch_assoc()){
	echo"Your Username or Password is incorrect!";
}else{
	echo"You are logged in!";
}
?>