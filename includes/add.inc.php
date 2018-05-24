<?php
require 'dbh.inc.php' ;
if (isset($_POST['submit'])) {


	$name = mysqli_real_escape_string($conn, $_POST['book-name']);
	$author =  mysqli_real_escape_string($conn, $_POST['author-name']);
	$genre =  mysqli_real_escape_string($conn, $_POST['genre-book']);

	// Error handlers
	// Check for empty fields
	if (empty($name) || empty($author) || empty($genre)) {
		header("Location: ../add.php?add=empty");
		exit();
	} else {
			// Check if input characters are valid
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
				header("Location: ../add.php?add=invalid");
				exit();
			} else {
					$sql = "SELECT * FROM books WHERE title='$name'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if ($resultCheck > 0) {
						header("Location: ../add.php?add=titleexists");
						exit();
					} else {
						$sql = "INSERT INTO books (title, author, genre) VALUES ('$name', '$author','$genre')";
						mysqli_query($conn, $sql);
						header("Location: ../add.php?add=success");
						exit();
					}
				}
			}
	}else {
	header("Location: ../add.php");
	exit();
	}
 	