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

	$id = $_POST["id"];
	$name = $_POST["name"];
	$price = $_POST["price"];
	$img = $_FILES['img']['name'];

$id = intval($_GET['id']);
$sql = "UPDATE menu SET 
		name='$name' ,
		price='$price' ,
		img='$img'
		WHERE id='$id' ";
 
if ($conn->query($sql) === TRUE) {
    
	header("location:AdminSetting.php");
} else {
    echo "Error creating AdminSetting: " . $conn->error;
}
$conn->close();
?>