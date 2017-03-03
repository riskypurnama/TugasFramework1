<!DOCTYPE html>
<html> <!--untuk memulai dokumen html-->
<head>
<title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Simpele CRUD</h1>
<a href="awal.php"> Beranda </a>/<a href="data.php">Tambah Data</a> <!--untuk mengoneksikan ke link ubah.php -->
<h3>Tambah Data Siswa</h3>
<?php 
include("kon.php"); // menghubungkan ke form selanjutnya

$NIS = $_GET['nis']; // mengambil nis dari link

$sql = "select * from 1541180125_data_siswa where nis = '$NIS'";//membuat query untuk menampilkan data dari tabel data siswa dengan nis yang sesuai dari link
$data = $mysql->query($sql);//memasukan query ke dalam variable data
if ($data->num_rows > 0) { //jika jumlah baris dalam db lebih dari 1
	while ($ambil = $data->fetch_assoc()) { // melakukan perulangan untuk menampilkan data (query select) dari tabel satu per satu
?>
<form action="edit.php" method="POST"> <!--membuat form yang berhubungan dengan edit.php-->
<table>
<tr>
	<td>NIS</td>
	<td> : </td>
	<td><input type="text" name="NIS" value="<?php echo $ambil["NIS"]?>" readonly></td> <!--membuat textbox dengan nama NIS dgn value yang sesuia dngan baris yang di inginkan dan hanya bisa dilihat-->
</tr>
<tr> <!--baris-->
	<td>NamaLengkap</td>
	<td> : </td>
	<td><input type="text" name="NamaLengkap" value="<?php echo $ambil["NamaLengkap"] ?>"></td> <!--membuat textbox nama lengkap dengan value yang sesuai dengan baris yang di inginkan-->
</tr>
<tr>
	<td>Kelas	</td>
	<td> : </td>
	<td> <!--kolom-->
		<select name="Kelas" required> 
			<option value="X" <?php if($ambil['Kelas'] == 'X'){ echo 'selected'; } ?>>X</option>	
			<option value="XI" <?php if($ambil['Kelas'] == 'XI'){ echo 'selected'; } ?>>XI</option>
			<option value="XII" <?php if($ambil['Kelas'] == 'XII'){ echo 'selected'; } ?>>XII</option>
		</select>
	</td>
</tr>
<tr>
	<td>Jurusan</td>
	<td> : </td>
	<td>
	<select name="Jurusan">
		<option value="mipa" <?php if($ambil['Jurusan'] == 'mipa'){ echo 'selected'; } ?>>MIPA</option>	
		<option value="ips" <?php if($ambil['Jurusan'] == 'ips'){ echo 'selected'; } ?>>IPS</option>
		<option value="bahasa" <?php if($ambil['Jurusan'] == 'bahasa'){ echo 'selected'; } ?>>BAHASA</option>
	</select>
	</td>
</tr>
<tr>
	<td colspan="2" align="right"></td>
	<td><input type="submit" name="ubah"></td>
</tr>
</table>
</form>
<?php 
}
}
?>
</body>
</html>