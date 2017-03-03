<?php 
	class Config 
	{
		public $host_name = "localhost:3307";
		public $username = "root";
		public $password = "";
		public $databases = "1541180125";

		function buka()
		{
			$mysql = new mysqli(
				$this->host_name,
				$this->username,
				$this->password,
				$this->databases
				);

			if ($mysql->connect_error) {
				return die("Koneksi gagal ".$mysql->connect_error);
			}else{
				return $mysql;
			}
		}

		function tutup(){
			$mysql->close();
		}
	}

	$kon = new Config();
	$koneksi = $kon->buka();
		
 ?>