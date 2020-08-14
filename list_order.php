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

$sql = "SELECT id, firstname, lastname, Tel, address FROM list";
$result = $conn->query($sql);

// sql to delete a record
$id = intval($_GET['id']);
$sql = "DELETE FROM list WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("ยืนยันออเดอร์เรียบร้อยแล้ว") </script>';
	echo '<script>window.location="AdminSetting.php" </script>';
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
