<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>Create menu</title>
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
	
		<div align="right"><a href="Login_form.php" class="text-secondary">Logout</a></div>
	
		<center><table style="width:20%">
			<tr>
				<th>
				<br><center><font size="5"><h1>Create menu</h1></font></center><br>
		
				<form action="create_menu.php" method="post" enctype="multipart/form-data" >
				<div class="form-group">
				<label for="exampleFormControlInput1">Name</label><a style="color:red;"> *</a>
				<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
				</div>
		
				<div class="form-group">
				<label for="exampleFormControlInput2">Price</label><a style="color:red;"> *</a>
				<input type="text" name="price" class="form-control" id="exampleFormControlInput2" placeholder="Price">
				</div>
			
		
				<label>Image menu</label>
				<input type="file" name="img" class="form-control"/>
		
				<br><center><button type="submit" class="btn btn-success">Create menu</button></center><br><br><br>
		</form>
		</th>
		</tr>
		</table></center>
	</body>
</html>