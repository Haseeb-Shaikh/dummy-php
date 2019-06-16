<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<meta charset="utf-8" name="viewport" content="width=device-width" initial-scale=1>
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
		<br>
		<form action="logic.php" method="post" enctype="multipart/form-data">
			<div class="form-group labels">
				<label>Name</label>
				<input type="text" name="name" placeholder="USERNAME">
			</div>
			<div class="form-group labels">
				<label>Email</label>
				<input type="text" name="Email" placeholder="EMAIL">
			</div>
			<div class="form-group labels">
				<label>Password</label>
				<input type="text" name="Password" placeholder="PASSWORD">
			</div>
			<div class="form-group labels">
				<label>Image</label>
				<input type="file" name="image">
			</div>
			<div class="form-group labels">
				<button type="submit" name="login" class="btn">Submit</button>
			</div>
		</form>
	</body>
</html>
