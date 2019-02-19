<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect("localhost", "malware", "harshit", "student");
    
    // mysql search query
    $query = "SELECT `name`, `batch`, 'branch', `phone`, 'dateofbirth', 'fname', 'fpnumber', 'mname', 'address', 'pancard', 'aadhar' FROM `student` WHERE `id` = $id LIMIT 1";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_array($result))
      {
        $name = $row['name'];
        $batch = $row['batch'];
        $branch = $row['branch'];
        $phone = $row['phone'];
        $dateofbirth = ['dateofbirth'];
        $fname = $row['fname'];
        $fpnumber = $row['fpnumber'];
        $mname = $row['mname'];
        $address = $row['address'];
        $pancard = $row['pancard'];
        $aadhar = $row['aadhar'];

      }  
    }
    
    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Id is not registered";
            $name = "";
            $batch = "";
            $branch = "";
            $phone = "";
            $dateofbirth = "";
            $fname= "";
            $fpnumber = "";
            $mname = "";
            $address = "";
            $pancard = "";
            $aadhar = "";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
            $name = "";
            $batch = "";
            $branch = "";
            $phone = "";
            $dateofbirth = "";
            $fname= "";
            $fpnumber = "";
            $mname = "";
            $address = "";
            $pancard = "";
            $aadhar = "";
}


?>

<!DOCTYPE html>

<html>

    <head>

        <title> FIND STUDENT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <img src="image.jpg" alt="SRMS" style="width:50%; margin-left:375px;">
<div class="header">
		<h2>ENTER THE STUDENT ID NUMBER</h2>
	</div>
	
	<form method="post" action="find.php">

        <div class="input-group">
        <label>ID</label>
            <input type="text" name="id"><br>

		<div class="input-group">
		<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">	
		</div>
		<div class="input-group">
			<label>Batch</label>
			<input type="text" name="batch" value="<?php echo $batch; ?>">

			</div>
		<div class="input-group">
			<label>Branch</label>
			<input type="text" name="branch" value="<?php echo $branch; ?>">
		
		
		<div class="input-group">
		<label>Phone Number</label>
			<input type="text" name="phone" value="<?php echo $phone; ?>">	
		</div>		

		<div class="input-group">
		<label>Date Of Birth</label>
			<input type="text" name="dateofbirth" value="<?php echo $dateofbirth; ?>">	
		</div>

		<div class="input-group">
		<label>Father Name</label>
			<input type="text" name="fname" value="<?php echo $fname; ?>">	
		</div>

		<div class="input-group">
		<label>Father Phone Number</label>
			<input type="text" name="fpnumber" value="<?php echo $fpnumber; ?>">	
		</div>

		<div class="input-group">
		<label>Mother Name</label>
			<input type="text" name="mname" value="<?php echo $mname; ?>">	
		</div>

		<div class="input-group">
		<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">	
		</div>

		<div class="input-group">
		<label>Pan card</label>
			<input type="text" name="pancard" placeholder="(optional)" value="<?php echo $pancard; ?>">	
		</div>	

		<div class="input-group">
		<label>Aadhar Card Number</label>
			<input type="text" name="aadhar" value="<?php echo $aadhar; ?>">	
		</div>
		<div class="input-group">
			<label>password</label>
			<input type="text" name="password" value="<?php echo $password;?>"><br><br>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="search" value="find">find</button>
		</div>
		
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
    background-image: url(black1.png), url(kazbyq.jpg);
    background-size: cover;
    background-repeat: no-repeat, repeat;
    display: inline-block;
   vertical-align: middle;
}


.header {
    width: 30%;
   margin-left: 500px;

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
   margin-left: 500px;
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
