<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		header("location: beranda.php");
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

</head>
<body>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Login</h3>
		</div>
		<div class="panel-body">
			<form action="login_proses.php" method="POST" role="form">			
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="Password" class="form-control" name="password" id="password" placeholder="Password" required>
				</div>

				<?php 
					if (isset($_SESSION['ket'])) {
						echo $_SESSION['ket'];
						unset($_SESSION['ket']);
						echo("<br>");
					}
				 ?>
				<button type="submit" class="btn btn-primary" name="login">Login</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php
	}
 ?>
