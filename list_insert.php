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
$sql = "INSERT INTO list (firstname, lastname, Tel, address)
		VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['Tel']."', '".$_POST['address']."')";

if ($conn->query($sql) === TRUE) {
	echo '<script>alert("รับออเดอร์เรียบร้อยแล้ว") </script>';
	echo '<script>window.location="Menu.php" </script>';
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>