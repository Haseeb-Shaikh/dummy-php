<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="icon" type="image/png" href="assets/img/logo.png">
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body>
		<?php
			require_once('connection.php');
		?>
		<nav class="navbar navbar-expand-lg custom-navbar navbar-light">
			<a href="../wheretogojs1/index.php" class="navbar-brand"><img src="assets/img/logo3.jpeg" class="img-fluid custom-logo"></a>
		</nav>
		<div class="container-fluid">
			<form action="logic.php" method="post" enctype="multipart/form-data">
			<div class="row">
			<div class="offset-md-4 col-md-4 main col-xs-12 custom">
					<h2 class="text-center m-1">LOGIN!<br><br>
					<img src="assets/img/client.jpg"></h2>

					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" name="Username" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="text" name="Password" placeholder="Password">
					</div>
					<div class="form-group">
						<button class="button-btn btn btn-brand" name="submit_login" type="submit">Login</button>
					</div>
					<div class="form-group">
						<button class="button-btn1 btn btn-brand" type="button">Forget Password</button>
					</div>
					<div class="row text-center">
					<div class=" col-md-12 col-xs-12 col-sm-12 social-icons">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square fb"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-google g"></i></a></li>
						</ul>
					</div>
	     		</div>
					<p class="text-right"><b>New Account</b> <a href="../signup-form/index.php">Sign Up?</a></p>
				
				</div>
			</form>

			</div>
		</div>
			

	</body>
</html>