<?php
session_start();
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

$sql = "SELECT * FROM user WHERE email = '".$_POST['email']."'
		and password = '".$_POST['password']."'";
$sqlquery = mysqli_query($conn,$sql);
if (mysqli_num_rows($sqlquery) == 1)
{
$chkrow = mysqli_fetch_array($sqlquery);
}

if (!$chkrow)
{
	header("location:Login_form.php");
}
else{
	$_SESSION["id"] = $chkrow["id"];
	$_SESSION["status"] = $chkrow["status"];
	
	session_write_close();
	
	if($chkrow["status"] == "admin")
	{
		header("location:AdminSetting.php");
	}
	else
	{
		header("location:Menu.php");
	}
}
	



if ($conn->query($sql) === TRUE) {
    echo "Table menu created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>