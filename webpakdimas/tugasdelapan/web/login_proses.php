<?php 
	if (isset($_POST['login'])) {
		include('config.php');
		session_start();

		$username = $_POST['username'];
		$password = $_POST['password'];

		

		$query = "select * from pengguna where username = '$username' && pswd = '$password'";
		$data = $mysql->query($query);
		
		$hasil = $data->fetch_assoc();
		$status = $hasil['status'];

		if ($hasil == true) {
			if ($status != 1) {
				header("location: index.php");
				$_SESSION['ket'] = "Akun Telah di Non Aktifkan";	
			}else{
				$_SESSION['username'] = $username;
				$_SESSION['nama'] = $hasil['nama'];
				
				header("location: beranda.php");
			}
		}else{
			header("location: index.php");
			$_SESSION['ket'] = "Username Atau Password Salah";
		}
	}
 ?>