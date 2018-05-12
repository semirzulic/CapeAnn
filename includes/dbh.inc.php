<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
} 


// Create Table

$mysql = "CREATE TABLE IF NOT EXISTS myDB.users (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(256) NOT NULL,
lastname VARCHAR(256) NOT NULL,
email VARCHAR(256) NOT NULL,
password VARCHAR(256) NOT NULL,
role VARCHAR(256) NOT NULL
)";

if ($conn->query($mysql) === FALSE) {
  	echo "Error creating table: " . $conn->error;
	}


// Create another Table
$mysql = "CREATE TABLE IF NOT EXISTS myDB.books (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(256) NOT NULL,
author VARCHAR(256) NOT NULL,
genre VARCHAR(256) NOT NULL
)";

if ($conn->query($mysql) === FALSE) {
  	echo "Error creating table: " . $conn->error;
	}

	

$conn->close();
?>













