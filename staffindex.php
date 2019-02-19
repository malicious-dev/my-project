<?php 
	session_start(); 

	if (!isset($_SESSION['faculty'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: log.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['faculty']);
		header("location: log.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>
<img src="image.jpg" alt="SRMS" style="width:40%; float:left;">
	<div class="header">
		<h2>Welcome</h2>
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
		<?php  if (isset($_SESSION['faculty'])) : ?>
			<p>Hello <strong><?php echo $_SESSION['faculty']; ?><?php echo $_SESSION['email']; ?></strong></p>
			<p></p>
			<p> <a href="staffindex.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

	<a href="newstudent.php"><button type="submit" class="btn" >Add New Student</button></a>
		
		<a href="view.php"><button type="submit" class="btn" >Edit Student Detail</button></a>
		
		<a href="log.php"><button type="submit" class="btn" >Find Student Detail</button></a>	
	
		<a href="/hlo/fee/index.php"><button type="submit" class="btn" >Submit FEE</button></a>
	
	

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
    

}


.header {
    width: 30%;
	margin-left: 900px;
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
	margin-left: 900px;
	
	

    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
    
}



.btn {
	padding: 25px;
	font-size: 20px;
	font-family: Comic Sans MS;
	color: white;
	background: blue;
	border: none;
	border-radius: 10px;
    
    margin-left: 1000px;
    margin-top: 30px;
    width: 15%;
}



</style>

</body>
</html>
