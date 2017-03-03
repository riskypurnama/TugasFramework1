<?php
	class koneksi_basis_data{
		public $host_name;
		public $database;
		public $pengguna;
		public $password;
		public $_mysqli;

		public function buka_koneksi(){
			$_mysqli = new mysqli($this->host_name,
				$this->pengguna,
				$this->password,
				$this->database);
			if($_mysqli->connect_error){
				return '<font color="red">Koneksi gagal</font> : <b>'. $_mysqli->connect_error.'</b>';	
			}else{
				return "Koneksi berhasil";
			}
		}

		public function tutup_koneksi(){
			$_mysqli->close();
		}
	}

	$koneksi = new koneksi_basis_data();
	$koneksi->host_name="localhost:3307";
	$koneksi->database="1541180125";
	$koneksi->pengguna="root";
	$koneksi->password="";

	echo $koneksi->buka_koneksi();
?>