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

	$name = $_POST['name'];
	$price = $_POST['price'];
	$img = $_FILES['img']['name'];
	
var_dump($_POST); 
$sql = "INSERT INTO menu (name, price, img)
		VALUES ('$name', '$price', '$img')";




if ($conn->query($sql) === TRUE) {
	if (copy($_FILES['img']['tmp_name'],$Upload_Dir."image/".$_FILES['img']['name'])){
			echo "picture upload success";
			
		}else{
			echo "error".$_FILES["img"]["error"];
		}
    
	header("location:AdminSetting.php");
} else {
    echo "Error creating AdminSetting: " . $conn->error;
}

$conn->close();
?>