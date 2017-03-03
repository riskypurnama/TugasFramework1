<form action="radio.php" method="POST">
<h2>Pilih Jurusan Anda: </h2>

<input type="radio" name="jurusan" value="TI">
Teknik Informatika <br/>
<input type="radio" name="jurusan" value="SI">
Sistem Informasi <br/>
<input type="radio" name="jurusan" value="SK">
Sistem Komputer <br/>
<input type="radio" name="jurusan" value="KA">
Komputer Akuntansi <br/>
<input type="submit" name="Pilih" value="Pilih">
</form>

<?php
if(isset($_POST['Pilih'])){
	$jurusan = $_POST['jurusan'];
	echo $jurusan;
}
?>