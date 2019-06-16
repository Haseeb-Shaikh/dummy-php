<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="assets/img/logo.png">
		<title>Sign Up</title>
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
				

					<!-- <form>
						<h1 class="main text-center">Registration Form</h1>
						<input class="form-control" type="text" name="Username" placeholder="Username">
						<input class="form-control" type="text" name="email" placeholder="Email">
						<input class="form-control" type="password" name="Password" placeholder="Password">
						<input class="form-control" type="password" name="Confirm Password" placeholder="Confirm Password">
						<button class="button btn btn-brand bg-dark" type="button">Sign Up</button>
					</form> -->
				<div class="offset-md-4 col-md-4 main col-xs-12 custom">
					<h2 class="text-center m-1">REGISTER YOURSELF!<br><br>
					<img src="assets/img/client.jpg"></h2>

					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" name="Username" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="Email" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="text" name="Password" placeholder="Password">
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input class="form-control" type="text" name="Confirm Password" placeholder="Confirm Password">
					</div>
					<div class="form-group">
						<button  class="button-btn btn btn-brand" name="submit_signup" type="submit">Sign Up</button>
					</div>
					<p class="text-right"><b>Already Account</b> <a href="../login-form/index.php">Login?</a></p>
				</div>
				</form>
			</div>
		</div>
			

	</body>
</html>