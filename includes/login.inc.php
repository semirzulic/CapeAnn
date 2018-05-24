<?php
session_start();


if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	
	$email = $_POST['form-email'];
	$pwd = $_POST['form-password'];

					
	//Error handlers
	

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
					$_SESSION['u_role'] = $row['role'];
					
					$role = $_SESSION['u_role'];
					if (isset($role) && $role == 'Admin' ) {
						header("Location: ../admin.php?login=success");
						exit();
					}elseif (isset($role) && $role == 'Client'){
						header("Location: ../client.php?login=success");
						exit();
					}

					
				}
			}
		}
	
} else {
	header("Location: ../login.php?login=error");
	exit();
}