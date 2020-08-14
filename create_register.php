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

var_dump($_POST);
$sql = "INSERT INTO user (firstname, lastname, email, password, tel, img_user)
		VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['tel']."', '".$_FILES['img_user']['name']."')";




if ($conn->query($sql) === TRUE) {
    if (copy($_FILES['img_user']['tmp_name'],$Upload_Dir."image/".$_FILES['img_user']['name'])){
			echo "picture upload success";
			
		}else{
			echo "error".$_FILES["img_user"]["error"];
		}
	header("location:Login_form.php");
} else {
    echo "Error creating user: " . $conn->error;
}

$conn->close();
?>