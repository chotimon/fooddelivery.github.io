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
$sql = "SELECT id, name, price, img FROM menu";
$result = $conn->query($sql);

$id = intval($_GET['id']);
$sql = "DELETE FROM menu WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    
	header("location:AdminSetting.php");
} else {
    echo "Error creating AdminSetting: " . $conn->error;
}

$conn->close();
?>