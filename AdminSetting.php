<?php
session_start();
?>
<html lang="en">
		<head>
			<title>Setting</title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		</head>

	<body>
		<div class="p-3 mb-2 bg-dark text-white"><h1>Food Delivery</h1></div>
		<div class="p-3 mb-2 bg-warning text-dark"></div>	

		<div align="right"><a href="List_admin.php" class="text-secondary">List menu</a> |
		<a href="logout.php" class="text-secondary">Logout</a>
		
		<br><center><font size="5"><h1>Welcome admin</h1></font></center><br>
		
		<center><table style="width:60%">
		<tr>
		<th>
			<form action="create_menu_form.php" method="post">
			<div align="right"><button type="submit" class="btn btn-success">Create menu</button></div><br>
			</form>
		
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

	$sql = "SELECT * FROM menu";
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
			while($row = $result->fetch_assoc()) {
?>


	


		
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">name</th>
				<th scope="col">price</th>
				<th scope="col">img</th>
				<th scope="col">Update</th>
				<th scope="col">Delete</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td>฿ <?php echo $row["price"];?></td>
				<td><img src="image/<?php echo $row["img"];?>" width="80px" height="80px"></td>
<?php		
	echo "<td><a href='update_form.php?id={$row['id']}''>Update</a></td>";
	echo "<td><a href='delete.php?id={$row['id']}''>delete</a></td>";
?>
		</tr>
		</tbody>
  </table>
<?php		
	}
		} else {
			echo "0 results";
	}
$conn->close();
?>	
		
		
		
		</th>
		</tr>
		</table>
	</body>
</html>