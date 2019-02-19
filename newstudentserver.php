<?php 
	session_start();

	// variable declaration
	$name = "";
	$batch    = "";
    $branch = "";
    $phone = "";
    $dateofbirth = "";
    $fname = "";
    $fpnumber = "";
    $mname = "";
    $address = "";
    $pancard = "";
    $aadhar = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'malware', 'harshit', 'student');

	// REGISTER USER
	if (isset($_POST['regist'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$batch = mysqli_real_escape_string($db, $_POST['batch']);
		$branch = mysqli_real_escape_string($db, $_POST['branch']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $dateofbirth = mysqli_real_escape_string($db, $_POST['dateofbirth']);
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $fpnumber = mysqli_real_escape_string($db, $_POST['fpnumber']);
        $mname = mysqli_real_escape_string($db, $_POST['mname']);
        $address = mysqli_real_escape_string($db, $_POST['address']);
        $pancard = mysqli_real_escape_string($db, $_POST['pancard']);
        $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($batch)) { array_push($errors, "Batch is required"); }
		if (empty($branch)) { array_push($errors, "Branch is required"); }
        if (empty($phone)) { array_push($errors, "phone is required"); }
        if (empty($aadhar)) { array_push($errors, "aadhar is required"); }
        if (empty($address)) { array_push($errors, "address is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO student (name, batch, branch, phone, dateofbirth, fname, fpnumber, mname, address, pancard, aadhar, password) 
					  VALUES('$name', '$batch', '$branch', '$phone', '$dateofbirth', '$fname', '$fpnumber', '$mname', '$address', '$pancard', '$aadhar', password)";
			mysqli_query($db, $query);

			$_SESSION['name'] = $name;
			$_SESSION['batch'] = $batch;
			$_SESSION['branch'] = $branch; 
			$_SESSION['phone'] = $phone;
			$_SESSION['dateofbirth'] = $dateofbirth;
			$_SESSION['fname'] = $fname;
			$_SESSION['fpnumber'] = $fpnumber;
			$_SESSION['mname'] = $mname;
			$_SESSION['address'] = $address;
			$_SESSION['pancard'] = $pancard;
			$_SESSION['aadhar'] = $aadhar;
			$_SESSION['success'] = "You are now logged in";
			header('location: studentindex.php');
		}

	}

	// ... we wuwwwwwwq

	// LOGIN USER
	if (isset($_POST['login_use'])) {
		$faculty = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($faculty)) {
			array_push($errors, "Name is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM student WHERE name='$name' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['name'] = $name;
				
				$_SESSION['success'] = "You are now logged in";
				header('location: studentindex.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
