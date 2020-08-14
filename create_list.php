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

// sql to create table list
$sql = "CREATE TABLE list (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
Tel VARCHAR(12) NOT NULL,
address VARCHAR(200) NOT NULL
)";



if ($conn->query($sql) === TRUE) {
    echo "Table list created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>