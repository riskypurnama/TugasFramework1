<?php

class database{

	var $host = "localhost:3307";
	var $uname = "root";
	var $pass = "";
	var $db = "1541180125";

	function _construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data(){
		$data = mysql_query("select * from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function input ($nama,$alamat,$usia)
	{
		mysql_query("insert into user values('','$nama','$alamat','$usia')");
	}

	function hapus($id)
	{
		mysql_query("delete from user where id='$id'");
	}

	function edit($id)
	{
		$data = mysql_query("select * from user whwrw id='$id'");
		while ($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update ($id,$nama,$alamat,$usia)
	{
		mysql_query("update user set nama='$nama', alamat='$alamat', usia='$usia', where id='$id'");
	}
}

?>