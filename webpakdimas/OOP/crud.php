<?php
	class Database{
		var $host = "localhost:3307";
		var $username = "root";
		var $pass = "";
		var $db = "1541180125";

		function _construct(){
			mysql_connect($this->host, $this->username, $this->pass);
			mysql_select_db($this->db);
		}

		function tampilData(){
			$data = mysql_query("SELECT * FROM user");
			while ($d=mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($nama, $alamat, $usia){
			mysql_query("INSERT INTO user VALUES('', '$nama', '$alamat', '$usia')");
		}

		function hapus($id){
			mysql_query("DELETE FROM user WHERE id='$id'");
		}

		function edit($id){
			$data = mysql_query("SELECT * FROM user WHERE id='$id'");
			while($d = mysql_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($id, $nama, $alamat, $usia){
			mysql_query("UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id='$id' ");
		}
	}
?>