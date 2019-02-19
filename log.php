<?php include('registedstaffserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>STUDENT REGISTRATION PORTAL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="image.jpg" alt="SRMS" style="width:40%; margin-left:375px;" >
	
	<div class="header">
		<h2>Staff Login</h2>
	</div>
	
	<form method="post" action="log.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Faculty ID</label>
			<input type="text" name="faculty" placeholder="Enter your Faculty ID" value="<?php echo $faculty; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Enter your Password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_use">Login</button>
		</div>
		<p>
			Not yet a member? <a href="registedstaff.php">Sign up</a>
			
		</p>
	</form>


</body>
</html>
