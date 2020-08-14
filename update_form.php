<!DOCTYPE html>
<html lang="en">
<html>
<head>
		<title>Update menu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
<body>

<form action="update.php?id=<?php echo $_GET["id"];?>" method="POST" enctype="multipart/form-data">
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
$sql = "SELECT * FROM menu WHERE id = '".$_GET["id"]."' ";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
?>

<div class="p-3 mb-2 bg-dark text-white"><h1>Food Delivery</h1></div>
		<div class="p-3 mb-2 bg-warning text-dark"></div>
	
		<div align="right"><a href="Login_form.php" class="text-secondary">Logout</a></div>
	
	<center><table style="width:20%">
		<tr>
		<th>
		<br><center><font size="5"><h1>Update menu</h1></font></center><br>
		
		<div class="form-group">
		<label for="exampleFormControlInput1">ID</label><a style="color:red;"> *</a>
		<input type="hidden" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="<?php echo $result["id"];?>"/>
		</div>
		
		<div class="form-group">
		<label for="exampleFormControlInput1">Name</label><a style="color:red;"> *</a>
		<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="<?php echo $result["name"];?>"/>
		</div>
		
		<div class="form-group">
		<label for="exampleFormControlInput2">Price</label><a style="color:red;"> *</a>
		<input type="text" name="price" class="form-control" id="exampleFormControlInput2" placeholder="Price" value="<?php echo $result["price"];?>"/>
		</div>
			
		
			<label>รูปภาพสินค้า</label>
			<input type="file" name="img" value="<?php echo $result["img"]["name"];?>"/>
		
		<br><center><button type="submit" class="btn btn-success">Update</button></center><br><br><br>
		</form>
		</th>
		</tr>
		</table></center>

	</body>
	</html>
