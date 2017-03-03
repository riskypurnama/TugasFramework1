<?php
//****Silahkan atur konfigurasi database sesuai dengan kebutuhan dan keadaan server dan sistem****//

//Silahkan ganti nama server dibawah ini sesuai dengan nama server anda//
//Default untuk server lokal komputer adalah "localhost";
$SERVER = "localhost:3307";

//Silahkan ganti nama user atau username dibawah ini sesuai dengan nama user pada server anda//
//Default untuk nama user pada localhost atau server komputer lokal adalah "root"//
$NAMAUSER = "u332990493_risky";

//Silahkan isi password username anda, apabila tidak ada password kosongkan saja//
//Default password pada instalasi server lokal pertama adalah "Tidak ada" atau "kosong"//
$PASSWORDUSER = "1234567";

//Silahkan isi database sesuai dengan databse yang taelah adan buat pada server anda//
$DATABASE = "u332990493_hotel";


//Dibawah ini adakn dipanggil deklarasi dalam koneksi ke server dan databasa//
//Jika anda tidak paham atau tidak mengerti pemrograman php, saya sarankan jangan mengganti sedikitpun kode dibawah ini//
mysql_connect ($SERVER, $NAMAUSER) or die ("<h1>Tidak terkoneksi ke server</h1>");
mysql_select_db ($DATABASE) or die ("<h1>Database tidak ditemukan</h1>");

?>

