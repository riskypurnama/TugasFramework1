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

		class Data_KTP{

		}
		
		public function tampil_data(){
			$query = $this -> $_mysqli -> query("SELECT*FROM 1541180125_risky");
			$i=1;
			$res=array();
			while ($baris = $query -> fetch_assoc ()){
				$res[$i]=$baris;
				$i++;
			}
			return $res;
		}
	}

	$koneksi = new koneksi_basis_data();
	$koneksi->host_name="localhost:3307";
	$koneksi->database="1541180125";
	$koneksi->pengguna="root";
	$koneksi->password="";

	echo $koneksi->buka_koneksi();

	$m = $koneksi->buka_koneksi();
	$data = new Data_KTP();
	$result = $koneksi ->tampil_data();

	echo "<table>;"
	for($i=1,$i<count($result); $i++){
		echo"<tr>";
		echo "<td>.$result[$i]["No_KTP"]."</td>;
		echo "<td>.$result[$i]["Nama"]."</td>;
		echo "<td>.$result[$i]["Jenis_Kelamin"]."</td>;
		echo "<td>.$result[$i]["Agama"]."</td>;
		echo "<td>.$result[$i]["Alamat"]."</td>;
		echo "<td>.$result[$i]["No_Tlp"]."</td>;
	}
?>