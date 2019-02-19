<?php

 
require('db.php');

$id=$_REQUEST['id'];
$query = "SELECT * from student where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<img src="image.jpg" alt="SRMS" style="width:30%; margin-left:500px;">
<div class="form">

<div class="header">
		<h2>Update Record</h2>
	</div>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)

{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$batch =$_REQUEST['batch'];

$branch =$_REQUEST['branch'];
$phone=$_REQUEST['phone'];
$dateofbirth =$_REQUEST['dateofbirth'];
$fname =$_REQUEST['fname'];
$fpnumber =$_REQUEST['fpnumber'];
$mname =$_REQUEST['mname'];

$address =$_REQUEST['address'];
$pancard =$_REQUEST['pancard'];

$aadhar =$_REQUEST['aadhar'];





$update="update student set name='".$name."', batch='".$batch."', branch='".$branch."', phone='".$phone."', dateofbirth='".$dateofbirth."', fname='".$fname."', fpnumber='".$fpnumber."', mname='".$mname."', address='".$address."', pancard='".$pancard."', aadhar='".$aadhar."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'><b>View Updated Record<b></a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<label>Name</label>
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>"  /></p>
<label>Batch</label>
<p><input type="text" name="batch" placeholder="Enter batch" required value="<?php echo $row['batch'];?>" /></p>
<label>Branch</label>
<p><input type="text" name="branch" placeholder="Enter branch" required value="<?php echo $row['branch'];?>" /></p>
<label>Contact</label>
<p><input type="text" name="phone" placeholder="Enter phone" required value="<?php echo $row['phone'];?>"  /></p>
<label>Date Of Birth</label>
<p><input type="text" name="dateofbirth" placeholder="Enter date of birth" required value="<?php echo $row['dateofbirth'];?>" /></p>
<label>Father Name</label>
<p><input type="text" name="fname" placeholder="Enter father name" required value="<?php echo $row['fname'];?>" /></p>
<label>Father's Phone Number</label>
<p><input type="text" name="fpnumber" placeholder="Enter father phone number" required value="<?php echo $row['fpnumber'];?>"  /></p>
<label>Mother Name</label>
<p><input type="text" name="mname" placeholder="Enter mother name" required value="<?php echo $row['mname'];?>"/></p>
<label>Address</label>
<p><input type="text" name="address" placeholder="Enter address" required value="<?php echo $row['address'];?>"  /></p>
<label>Pancard</label>
<p><input type="text" name="pancard" placeholder="Enter pancard" required value="<?php echo $row['pancard'];?>"/></p>
<label>Aadhar</label>
<p><input type="text" name="aadhar" placeholder="Enter aadhar"  required value="<?php echo $row['aadhar'];?>"/></p>

<p><input name="submit" type="submit" class="btn" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />

</div>
</div>
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
    
   vertical-align: middle;
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
    margin-left: 20px;
    margin-top: 160px;
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










form,
.content {
    width: 30%;
   margin-left: 20px;
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
    padding: 5px;
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
















