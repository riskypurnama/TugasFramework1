<?php
  include 'koneksi.php';

  $koneksi = new koneksi();
  $koneksi->namahost = "localhost:3307";
  $koneksi->username = "root";
  $koneksi->password = "";
  $koneksi->database = "1541180125";

  $m = $koneksi->buka_koneksi();

  $data = new dataKTP();
  $data->no_KTP = "12345";
  $data->nama="risky";
  $data->agama="Islam";
  $data->alamat="malang";
  $ins = $data->insert_dataKTP($m);
  echo $ins;

  $jp = new dataKTP();
  $result = $jp->get_1541180125_risky($m);

  echo "<table border=1>";
  for($i = 0; $i < count($result); $i++)
  {
    echo "<tr>";
    echo "<td>".$result[$i]["No_KTP"]."</td>";
    echo "<td>".$result[$i]["Nama"]."</td>";
    echo "<td>".$result[$i]["Agama"]."</td>";
    echo "<td>".$result[$i]["Alamat"]."</td>";
    echo "<td>".$result[$i]["No_Tlp"]."</td>";
    echo "</tr>";
  }
  echo "</table>";


 ?>
