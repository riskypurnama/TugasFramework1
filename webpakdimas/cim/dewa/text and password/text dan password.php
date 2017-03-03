<form action = "text dan password.php" method="POST">
username : <input type = "text" name="username" /><br/>
password: <input type ="password" name="password" /><br/>
<input type="submit" name="Login" value="Login">
<input type ="reset" name="Reset" value="Reset" >
</form>

<?php
if(isset($_POST['Login'])){
	$user = $_POST['username']; $pwd = $_POST['password'];
	if($user == "admin" && $pwd = "admin"){
		echo "Selamat datang, $user";
		}else{
			echo "Login <b>GAGAL</b>";}}
	?>