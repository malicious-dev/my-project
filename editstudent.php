<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
* {
    margin: 0px;
    padding: 0px;
}

body {
    margin: 0;
    padding: 0;
    font-size: 120%;
	background: url(kazbyq.jpg) no-repeat;
	background: ;
    display: inline-block;
   vertical-align: middle;
}


.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: green;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
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
	<img src="image.jpg" alt="SRMS" style="width:40%; margin-left:375px;">
	<div class="header">
		<h2>Edit Student Details</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('stafferror.php'); ?>

		<div class="input-group">
		<label>Registration ID</label>
			<input type="text" name="ID" value="<?php echo $ID; ?>">	
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg">Register</button>
		</div>
		
	</form>
</body>
</html>
