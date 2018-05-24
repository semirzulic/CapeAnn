<?php
require 'dbh.inc.php' ;
if (isset($_POST['submit'])) {


	$first = mysqli_real_escape_string($conn, $_POST['form-first-name']);
	$last =  mysqli_real_escape_string($conn, $_POST['form-last-name']);
	$email =  mysqli_real_escape_string($conn, $_POST['form-email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['form-password']);
	$role = mysqli_real_escape_string($conn, $_POST['radio']);



     	
    // Error handlers

	// Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
			// Check if input characters are valid
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../signup.php?signup=invalid");
				exit();
			} else {
				//Check if email is valid
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ../signup.php?signup=invalidemail");
					exit();
				} else {
					$sql = "SELECT * FROM libusers WHERE email='$email'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if ($resultCheck > 0) {
						header("Location: ../signup.php?signup=emailexists");
						exit();
					} else {
						//Hashing the password
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						// Insert the user into the database
						$sql = "INSERT INTO libusers (firstname, lastname, email, password, role) VALUES ('$first', '$last','$email','$hashedPwd','$role')";
						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success");
						exit();
					}
				}
			}
	}
	
} else {
	header("Location: ../signup.php");
	exit();
	

}
 	


						
 
