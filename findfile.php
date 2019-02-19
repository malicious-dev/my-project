<!Doctype html>
<html>
<head>
	<title>EDIT STUDENT DETAILS</title>
	<style>
	body {
    margin: 0;
    padding: 0;
    font-size: 120%;
    background-image: url(kazbyq.jpg);
    background-size: cover;
    background-repeat: no-repeat, repeat;
    display: inline-block;
   vertical-align: middle;
	}
	
	#custom {
		font-family: "comic sans ms", Arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	#custom td, #custom th {
		border: 1px solid #ddd;
		padding: 3px;
	}

	#custom tr:nth-child(even){background-color: #f2f2f2;}

	#custom tr:hover {background-color: #ddd;}

	#custom td {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #4CAF50;
		color: white;
	}
	</style>
</head>
<body>
<img src="image.jpg" alt="SRMS" style="width:30%; margin-left:500px;">
<table id="custom">
	<tr>
		<th>Id</th>
		<th>name</th>
		<th>batch</th>
		<th>branch</th>
		<th>phone</th>
		<th>dateofbirth</th>
		<th>fname</th>
		<th>fpnumber</th>
		<th>mname</th>
		<th>address</th>
		<th>pancard</th>
		<th>aadhar</th>
	</tr>
</table>



<?php
$conn = mysqli_connect("localhost", "malware", "harshit", "student");
if ($conn-> connect_error) {
	die("Connection failed:". $conn-> connect_error);

}

$sql = "SELECT id, name, batch, branch, phone, dateofbirth, fname, fpnumber, mname, address, pancard, aadhar from student";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["batch"] ."</td><td>". $row["branch"] ."</td><td>". $row["phone"] ."</td><td>". $row["dateofbirth"] ."</td><td>". $row["fname"] ."</td><td>". $row["fpnumber"] ."</td><td>". $row["mname"] ."</td><td>". $row["address"] ."</td><td>". $row["pancard"] ."</td><td>". $row["aadhar"] ."</td></tr>";
	}
	echo "</table>";
}
	else {
		echo "0 result";

	}

$conn-> close();
?>

</body>
</html>
