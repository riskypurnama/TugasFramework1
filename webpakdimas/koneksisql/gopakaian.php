<?php
class koneksi_basis_data{
	public $host_name;
	public $database;
	public $pengguna;
	public $password;
	public $_mysqli;

	public function buka_koneksi(){
		$_mysqli = new mysqli($this->host_name,$this->pengguna,$this->password,$this->database);
		if ($_mysqli->connect_error){
			return '<font color ="red">Koneksi gagal</font>:<b>'.$_mysqli->connect_error.'</b>';
		}else{
			return $_mysqli;
		}

	}
}

class jenis_pakaian{
	public function get_jenis_pakaian($_mysqli){
		$query = $_mysqli->query("SELECT * FROM 1541180125_jenis_pakaian");
		$i = 0;
		$res = array();
		while($baris = $query->fetch_assoc()){
			$res[$i] = $baris;
			$i++;
		}
		return $res;
	}
}
?>