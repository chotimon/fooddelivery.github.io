<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Fooddelivery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table user
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
Tel VARCHAR(12) NOT NULL,
status enum('admin','user') NOT NULL default 'user'
)";



if ($conn->query($sql) === TRUE) {
    echo "Table menu created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>