<?php 
	session_start();

	// variable declaration
	$registration = "";
	$email    = "";
	$phone = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'malware', 'harshit', 'registration');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$registration = mysqli_real_escape_string($db, $_POST['registration']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($registration)) { array_push($errors, "Registration Number is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phone)) { array_push($errors, "Phone Number is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (registration, email, phone, password) 
					  VALUES('$registration', '$email', '$phone', '$password')";
			mysqli_query($db, $query);

			$_SESSION['registration'] = $registration;
			$_SESSION['email'] = $email;
			$_SESSION['phone'] = $phone;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$registration = mysqli_real_escape_string($db, $_POST['registration']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($registration)) {
			array_push($errors, "Registration Number is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE registration='$registration' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['registration'] = $registration;
				$_SESSION['email'] = $email;
				$_SESSION['phone'] = $phone;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			
		


			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
