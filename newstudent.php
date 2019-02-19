
<?php include('newstudentserver.php')

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="newstudent.css">
</head>
<body>
	<img src="image.jpg" alt="SRMS" style="width:50%; margin-left:375px;">
	<div class="head">
		<h2>New Student Registration</h2>
	</div>
	
	<form method="post" action="newstudent.php">

		<?php include('stafferrors.php'); ?>

		<div class="input-grp">
		<label>Name</label>
			<input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name; ?>">	
		</div>
		<div class="input-grp">
			<label>Batch</label>
			<input type="text" name="batch" placeholder="Enter Your Batch" value="<?php echo $batch; ?>">

			</div>
		<div class="input-grp">
			<label>Branch</label>
			<input type="text" name="branch" placeholder="Enter Your Branch" value="<?php echo $branch; ?>">
		
		
		<div class="input-grp">
		<label>Phone Number</label>
			<input type="text" name="phone" placeholder="Enter Your Contact Number" value="<?php echo $phone; ?>">	
		</div>		

		<div class="input-grp">
		<label>Date Of Birth</label>
			<input type="text" name="dateofbirth" placeholder="Enter Your Date of Birth" value="<?php echo $dateofbirth; ?>">	
		</div>

		<div class="input-grp">
		<label>Father Name</label>
			<input type="text" name="fname" placeholder="Enter Your Father Name" value="<?php echo $fname; ?>">	
		</div>

		<div class="input-grp">
		<label>Father Phone Number</label>
			<input type="text" name="fpnumber" placeholder="Enter Your Father's Contact Number" value="<?php echo $fpnumber; ?>">	
		</div>

		<div class="input-grp">
		<label>Mother Name</label>
			<input type="text" name="mname" placeholder="Enter Your Mother Name" value="<?php echo $mname; ?>">	
		</div>

		<div class="input-grp">
		<label>Address</label>
			<input type="text" name="address" placeholder="Enter Your Address" value="<?php echo $address; ?>">	
		</div>

		<div class="input-grp">
		<label>Pan card</label>
			<input type="text" name="pancard" placeholder="Enter Your Pancard (optional)" value="<?php echo $pancard; ?>">	
		</div>	

		<div class="input-grp">
		<label>Aadhar Card Number</label>
			<input type="text" name="aadhar" placeholder="Enter Your Aadhar Card Number" value="<?php echo $aadhar; ?>">	
		</div>

		

		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Enter Your Password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" placeholder="Enter Your Password Again" name="password_2">
		</div>
<br>
			<a href="studentindex.php"><button type="submit" class="btn" name="regist">Register</button></a>
		</div>
		
	</form>
	
</body>
</html>
