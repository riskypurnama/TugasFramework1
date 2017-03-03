<?php 
	session_start();
	if (isset($_SESSION['username'])) {
	include('config.php');

	$username = $_SESSION['username'];

	$query = "select * from pengguna where username = '$username'";
	$data = $mysql->query($query);
			
	$hasil = $data->fetch_assoc();

	for ($i=0; $i < $data->num_rows ; $i++) { 
		$password = $hasil['pswd'];
		$nama = $hasil['nama'];
		$tanggal = $hasil['tanggal_lahir'];
		$alamat = $hasil['alamat'];
		$profesi =  $hasil['provesi'];
	}
		
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-default" role="navigation">
 	<div class="container-fluid">
 		<!-- Brand and toggle get grouped for better mobile display -->
 		<div class="navbar-header">
 			<a class="navbar-brand" href="beranda.php">Beranda</a>
 		</div>
 
 		<!-- Collect the nav links, forms, and other content for toggling -->
 		<div class="collapse navbar-collapse navbar-ex1-collapse">
 			<ul class="nav navbar-nav navbar-right">
 				<li class="dropdown">
 					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo $username  ?> <b class="caret"></b></a>
 					<ul class="dropdown-menu">
 						<li><a href="edit.php">Edit Data</a></li>
 						<li><a href="logout.php">Logout</a></li>
 					</ul>
 				</li>
 			</ul>
 		</div><!-- /.navbar-collapse -->
 	</div>
 </nav>
 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
 	
 </div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6	">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Edit User <?php echo $nama ?></h3>
	</div>
	<div class="panel-body">
		<form action="proses_edit.php" method="POST" role="form">
		<?php 
		if (isset($_SESSION['ket'])) {
			echo $_SESSION['ket'];
			unset($_SESSION['ket']);
			echo("<br>");
			}
		?>		
			<div class="form-group">
				<label for="">Password</label>
				<input type="Password" class="form-control" name="password" placeholder="Password" required value="<?php echo $password?>">
			</div>
			<div class="form-group">
				<label for="">Re-Password</label>
				<input type="Password" class="form-control" name="re_password" placeholder="Re-Password" required>
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control"  name = "nama" placeholder="Nama" value="<?php echo $nama?>" required>
			</div>
			<div class="form-group">
				<label for="">Tanggal Lahir</label>
				<input type="date" name="tanggal" id="input" class="form-control" value="<?php echo $tanggal?>" required>
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<textarea name="alamat" id="input" class="form-control" rows="3" required="required"><?php echo $alamat?></textarea>
			</div>
			<div class="form-group">
				<label for="">Profesi</label>
				<input type="text" class="form-control" name="profesi" placeholder="Profesi" value="<?php echo $profesi ?>" required>
			</div>
			<div class="form-group">
				<label for="">Status</label>
				<select name="status" id="input" class="form-control" required="required">
					<option value="1">Aktif</option>
					<option value="0">Non Aktif</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
</div>
</div>
<?php
}else{
	header("location: index.php");
}
?>
</body>
</html>