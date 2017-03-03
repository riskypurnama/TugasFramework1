<?php 
	session_start();
	
if (isset($_SESSION['username'])) {
	include('config.php');

	$nama = $_SESSION['nama'];
	$username = $_SESSION['username'];

	$query = "select * from pengguna where username = '$username'";
	$data = $mysql->query($query);
			
	$hasil = $data->fetch_assoc();

	for ($i=0; $i < $data->num_rows ; $i++) { 
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
	<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Data User</h3>
	</div>
	<div class="panel-body">
	<?php 
	if (isset($_SESSION['ket'])) {
		echo $_SESSION['ket'];
		unset($_SESSION['ket']);
		echo("<br>");
	}
 ?>
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>Nama</th>
					<th><?php echo $nama ?></th>
				</tr>		
				<tr>
					<th>Tanggal Lahir</th>
					<th><?php echo $tanggal ?></th>
				</tr>
				<tr>
					<th>Alamat</th>
					<th><?php echo $alamat ?></th>
				</tr>	
				<tr>
					<th>Profesi</th>
					<th><?php echo $profesi ?></th>
				</tr>		
			</table>
		</div>
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