<?php
	if(isset($_POST['email'])){
		$email = $_POST['email'];
	}
	else{
		$email = 0;
	}
	$inputEmail = false; // Has user entered an email?
	$validEmail = false; // Has user entered a VALID email?
	$duplicateEmail = false; // Has the user tried to input a DUPLICATE email?
	
	// MYSQL CONNECT
	// Create intial conneciton
	$con = mysqli_connect("localhost", "root", "onyxmotion2014", "signups");
	// Check for errors
	if (mysqli_connect_errno()){
		echo "Failed to connect to database: " . mysqli_connect_error();
	}

	// PROCEDURAL LOGIC
	if($email != 0){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // If email is valid
			$dup = mysqli_query($con, "SELECT * FROM `signups` WHERE `Email` LIKE '".$email."'");
			if(mysqli_num_rows($dup) > 0){ // Duplicate
				$inputEmail = true; // The user tried to input an email
				$duplicateEmail = true; // Unfortunately, he/she put in a duplicate one
				echo "Duplicate email" . mysqli_connect_error();
			}
			else{ // No duplicates
				mysqli_query($con, "INSERT INTO signups (Email, Version) VALUES ('".$email."', 0)"); // Add entry into database
				$inputEmail = true; // The user entered an email
				$validEmail = true; // and the user did it successfully!
				echo "Thanks.  You're already an all-star to us." . mysqli_connect_error();
			}
		}
		else{ // If email is invalid
			$inputEmail = true; // The user tried to input an email, but it wasn't valid
			echo "Invalid email." . mysqli_connect_error();
		}
	}
	
	// Close database connection
	mysqli_close($con);
?>