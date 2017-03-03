	<!DOCTYPE html>
	<html> <!--untuk memulai dokumen html-->
	<head>
	<title>Beranda</title> <!--untuk membuat judul paada halaman html-->
	</head>
	<body>
	<h1>Simpele CRUD</h1>
	<a href="awal.php"> Beranda </a>/<a href="data.php">Tambah Data</a> <!-- untuk membuat link menuju beranda / tambah data-->
	<h3>Tambah Data Siswa</h3>
	<table border="1">
	<tr> <!-- membuat baris baru-->
	<td>No</td> <!-- membuat kolom-->
	<td>NIS</td>
	<td>NamaLengkap</td>
	<td>Kelas</td>
	<td>Jurusan</td>
	<td>Opsi</td>
	</tr>
	<?php //memulai dokumen php
	include("kon.php"); //untuk memanggil script kon.php yang berisi script untuk mengkoneksikan ke database

	$sql = "select * from 1541180125_data_siswa"; // membuat query untuk menampilkan tabel
	$data = $mysql->query($sql); //untuk mengkoneksikan  data pada sql, memasukkan query select ke dalam variable data

	if ($data->num_rows > 0) { // jika baris pada tabel lebih dari 0
		$nomor= 1; // maka inisialisasi nomor menjadi 1
		while ($ambil = $data->fetch_assoc()) { //melakukan perulangan untuk menampilkan data satu per satu, assoc mengambil dari nama kolom,  
	?>	
	<tr>
		<td><?php echo $nomor; ?></td> 
		<td><?php echo $ambil["NIS"] ?></td> <!-- menampilkan data dengan nama kolom NIS-->
		<td><?php echo $ambil["NamaLengkap"] ?></td>
		<td><?php echo $ambil["Kelas"] ?></td>
		<td><?php echo $ambil["Jurusan"] ?></td>
		<td><a href="ubah.php?nis=<?php echo $ambil['NIS'] ?>">EDIT</a> | <a href="delete.php?nis=<?php echo $ambil['NIS'] ?>">HAPUS</a></td>
		<!-- memilih data degan nis yang sesuai untuk diarahkan ke file ubah.php || memilih data dengan nis yang sesuai untuk diarahkan ke file delete.php-->
	</tr>
	<?php		
	$nomor++; //nomor itu nomor yang telah diinisialisasi akan bertambah 1
		}
	}else{ // apabila jumlah baris pada tabel 0 atau kurang maka
		?>
	<tr>
		<td colspan="6" align="center">Data Kosong !</td> <!--menampilkan ini-->
	</tr>
	<?php
	}
		?>

	</table>
	</body>
	</html>