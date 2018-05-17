<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	
	$email = mysqli_real_escape_string($conn, $_POST['form-email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['form-password']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($email) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM libusers WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['id'];
					$_SESSION['u_first'] = $row['firstname'];
					$_SESSION['u_last'] = $row['lastname'];
					$_SESSION['u_email'] = $row['email'];
					
					header("Location: ../welcome.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error");
	exit();
}