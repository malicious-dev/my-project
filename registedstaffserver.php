<?php 
	session_start();

	// variable declaration
	$faculty = "";
	$email    = "";
	$phone = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'malware', 'harshit', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_use'])) {
		// receive all input values from the form
		$faculty = mysqli_real_escape_string($db, $_POST['faculty']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($faculty)) { array_push($errors, "Faculty ID is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phone)) { array_push($errors, "Phone Number is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO registedstaff (faculty, email, phone, password) 
					  VALUES('$faculty', '$email', '$phone', '$password')";
			mysqli_query($db, $query);

			$_SESSION['faculty'] = $faculty;
			
			$_SESSION['success'] = "You are now logged in";
			header('location: staffindex.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_use'])) {
		$faculty = mysqli_real_escape_string($db, $_POST['faculty']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($faculty)) {
			array_push($errors, "Faculty ID is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM registedstaff WHERE faculty='$faculty' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['faculty'] = $faculty;
				
				$_SESSION['success'] = "You are now logged in";
				header('location: staffindex.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
