<?php include('registedstaffserver.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system</title>
	
</head>
<body>
	<img src="image.jpg" alt="SRMS" style="width:30%;">
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="registedstaff.php">

		<?php include('errors.php'); ?>

		 <div class="form-text">
	<label>Faculty ID</label>
	
      <input type=text placeholder="Enter your registration number" id="youridhere" name="faculty" value="<?php echo $faculty; ?>">
      <label for="youridhere" class="static-value">T/69</label>
    </div> 



		<div class="input-group">
		<label>Email</label>
			<input type="email" name="email" placeholder="Enter your Email ID" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Contact Number</label>
			<input type="text" name="phone" max="10" placeholder="Enter your Contact number" value="<?php echo $phone; ?>">
		</div>
		
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Enter your Password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" placeholder="Enter your Password Again" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_use">Register</button>
		</div>
		<p>
			Already a member? <a href="log.php">Sign in</a>
		</p>
	</form>
	<style>
	* {
    margin: 0px;
    padding: 0px;
}

body {
    margin: 0;
    padding: 0;
    font-size: 120%;
    background-image: url(srmsbuild.jpg), url(kazbyq.jpg);
    background-size: cover;
    background-repeat: no-repeat, repeat;
    
   vertical-align: middle;
}







.form-text{
	position:relative;
}
input{
	padding:5px 5px 5px 150px;
margin: 10px 0px 10px 0px;
height: 30px;
    width: 60%;
    
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.static-value{
	position: absolute;
	
	left:15px;
	font-weight:bold;
	font-size:1em;
	color:#444;
	top:40px;
}









.header {
    width: 30%;
   margin-top: 50px;
    color: white;
    background: green;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
    
    
}

form,
.content {
    width: 30%;
   margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
    display: inline-grid;
}

.input-group {
    margin: 10px 0px 10px 0px;
}

.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}

.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}

.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: green;
    border: none;
    border-radius: 5px;
}

.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}

.success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}

</style>
</body>
</html>
