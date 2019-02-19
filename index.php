<?php 
	session_start(); 

	if (!isset($_SESSION['registration'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['registration']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>

</head>
<body>
<img src="image.jpg" alt="SRMS" style="width:30%;">
	<div class="header">
		<h2>Student Details</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['registration'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['registration']; ?></strong></p>
			<p>Email ID: <strong><?php echo $_SESSION['email']; ?></strong></p>
			<p>Phone Number: <strong><?php echo $_SESSION['phone']; ?></strong></p>
						<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>

		

		<?php endif ?>
		
	</div>
<h1 style="color:red; font-size:100px; text-align:center; margin-left:100px; margin-top:120px; font-family:Comic sans ms;">UNDER CONSTRUCTION</h1>
		
</body>
		

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
    display: inline-block;
   vertical-align: middle;
	margin: inline;
}




.header {
    width: 30%;
    margin-left: 900px;
    margin-top: px;
    color: white;
    background: green;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
	margin: inline;
    
    
}

form,
.content {
    width: 30%;
   margin-left: 900px;
   margin-top: 0px;
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


</html>
