
<?php
$dbhost  = 'localhost';
$dbuser  = 'root';
$dbpass  = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('SERVER CONNECTION FAILED...\n: ' . mysqli_error());
}

$sql    = 'CREATE DATABASE IF NOT EXISTS myDB';
$retval = mysqli_query( $conn, $sql);
if (!$retval) {
    die('DATABASE CREATION FAILED\n: ' . mysqli_error());
}

mysqli_select_db($conn,'myDB');

//Crete Tabele
$sql = "CREATE TABLE IF NOT EXISTS libusers (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(256) NOT NULL,
        lastname VARCHAR(256) NOT NULL,
        email VARCHAR(256) NOT NULL,
        password VARCHAR(256) NOT NULL,
        role VARCHAR(256) NOT NULL
        )";

$retval = mysqli_query( $conn, $sql);
if (!$retval) {
    die('COULD NOT CREATE TABLE\n: ' . mysqli_error());
}


// Create another Table
$sql = "CREATE TABLE IF NOT EXISTS books (
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(256) NOT NULL,
author VARCHAR(256) NOT NULL,
genre VARCHAR(256) NOT NULL
)";

$retval = mysqli_query( $conn, $sql);
if (!$retval) {
    die('COULD NOT CREATE TABLE\n: ' . mysqli_error());
}



?>













