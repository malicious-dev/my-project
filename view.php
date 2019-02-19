<?php

 
require('db.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<img src="image.jpg" alt="SRMS" style="width:30%; margin-left:500px;">
<div class="form">

<h2>Students Record</h2>

<table width="100%" border="1">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>batch</strong></th><th><strong>branch</strong></th><th><strong>phone</strong></th><th><strong>dateofbirth</strong></th><th><strong>fathername</strong></th><th><strong>father phone number</strong></th><th><strong>mother name</strong></th><th><strong>address</strong></th><th><strong>aadhar</strong></th><th><strong>pancard</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from student ORDER BY id asc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center" ><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["batch"]; ?></td><td align="center"><?php echo $row["branch"]; ?></td><td align="center"><?php echo $row["phone"]; ?></td><td align="center"><?php echo $row["dateofbirth"]; ?></td><td align="center"><?php echo $row["fname"]; ?></td><td align="center"><?php echo $row["fpnumber"]; ?></td><td align="center"><?php echo $row["mname"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["aadhar"]; ?></td><td align="center"><?php echo $row["pancard"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<br /><br /><br /><br />



</body>
<style>
* {
    margin: 0px;
    padding: 0px;
}

h2 {
color: red;
text-align: center;
}

body {
    margin: 0;
    padding: 0;
    font-size: 120%;
    background
    background-size: cover;
    background-repeat: no-repeat, repeat;
    background-color: white;
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
