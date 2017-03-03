<?php
  class koneksi
  {
    public $namahost;
    public $username;
    public $password;
    public $database;
    public $_mysqli;

    public function buka_koneksi()
    {
      $_mysqli = new mysqli($this->namahost,$this->username,$this->password,$this->database);
      if($_mysqli->connect_error)
      {
        die('<font color="red">Koneksi gagal</font> : <b>'
        .$mysqli->connect_error.'</b>');
      }
      else
      {
        return $_mysqli;
      }
    }

    public function tutup_koneksi()
    {
      $_mysqli->close();
    }
  }

  class dataKTP
  {
  	public $no_KTP;
  	public $nama;
  	public $agama;
  	public $alamat;
    public function get_1541180060_adnin($_mysqli)
    {
      $query = $_mysqli->query("SELECT * FROM 1541180060_adnin");
      $i = 0;
      $res = array();
      while($baris = $query->fetch_assoc())
      {
        $res[$i] = $baris;
        $i++;
      }
      return $res;
    }

    public function insert_dataKTP($_mysqli)
    {
      $no = $this->no_KTP;
      $nama = $this->nama;
      $agama = $this->agama;
      $alamat = $this->alamat;

      $query = $_mysqli->query("INSERT INTO 1541180125_risky (No_KTP,Nama,Agama,Alamat,No_Tlp) VALUES ('$no','$nama','$agama','$alamat,$no_tlp')");
      if($query === TRUE)
      {
        return "Insert Berhasil";
      }
      else
      {
        return "Gagal";
      }
    }
  }
 ?>
