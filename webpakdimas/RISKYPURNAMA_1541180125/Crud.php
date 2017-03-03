<?php
class Crud{
	public $mysqli;
	public $data;

	public function __construct($host, $username, $password, $db_name){
		$this->mysqli = new mysqli($host, $username, $password, $db_name);
		if(mysqli_connect_errno()) {
			echo "Error: Koneksi gagal.";
 		exit;
 		}
	}
	
	public function read(){
		$query = "SELECT * FROM user";
		$result = $this->mysqli->query($query);
		$num_result = $result->num_rows;
		if($num_result>0){
			while($rows = $result->fetch_assoc()){
				$this->data[] = $rows;			
			}						
			return $this->data;
		}
	}
	
	public function insert($id, $nama, $alamat, $usia){
		$query = "INSERT INTO user (id, nama, alamat, usia)  VALUES ('$id', '$nama', '$alamat', '$usia')";
		$result = $this->mysqli->query($query) or die(mysqli_connect_errno()."Tambah data gagal");
		if($result){
			header('location:read.php');	
		}
	}
	
	public function update($id, $nama, $alamat, $usia){
		$query = "UPDATE user SET nama = '$nama', alamat = '$alamat', usia = '$usia' WHERE id = '$id'";
		$result = $this->mysqli->query($query) or die(mysqli_connect_errno()."Edit data gagal");
		if($result){
			header('location:read.php');	
		}
	}
	
	public function delete($id){
		$query = "DELETE FROM user WHERE id = '$id'";
		$result = $this->mysqli->query($query) or die(mysqli_connect_errno()."Hapus data gagal");
		if($result){
			header('location:read.php');	
		}
	}
}
?>