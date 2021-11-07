<?php
//connecion for mySQL database
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'aasnotes';
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
//create database 
$sql = 'CREATE DATABASE aasnotes';
$result = mysqli_query($conn, $sql);
if ($result === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
*/
// create database table user
/*
$sql = "CREATE TABLE notesuser ( usr INT(6) AUTO_INCREMENT PRIMARY KEY ,firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30)NOT NULL ,dob DATE NOT NULL ,username VARCHAR(30) NOT NULL UNIQUE , password VARCHAR(30) NOT NULL)";
$result = mysqli_query($conn, $sql);
if ($result === TRUE) {
    echo "Database table created successfully";
} else {
    echo "Error creating database table: " . $conn->error;
}
*/

// create database table note
/*
$sql = "CREATE TABLE notes ( nsr INT(6) AUTO_INCREMENT PRIMARY KEY,title VARCHAR(30) NOT NULL, description VARCHAR(300)NOT NULL ,time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP  ,usr int(6), FOREIGN KEY (usr) REFERENCES notesuser(usr) )";
$result = mysqli_query($conn, $sql);
if ($result === TRUE) {
    echo "Database table created successfully";
} else {
    echo "Error creating database table: " . $conn->error;
}
*/