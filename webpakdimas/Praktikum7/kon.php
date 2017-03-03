<?php //memulai dokumen php
$mysql = new mysqli("localhost:3307","root","","1541180125"); //mengoneksikan database lokal , user root dan database yang ingin dituju

if ($mysql->connect_error) { //seleksi kondisi apabila database tidak dapat dihubungkan 
echo "koneksi gagal : ". $mysql->connect_error; //menampilkan pesan error
}
?>