<?php
session_start();
?>
<html lang="en">
	<head>
	
		<title>Login</title>
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
		
		<div align="right"><a href="Register.php" class="text-secondary">Register</a> 
		
		<center><table style="width:20%">
		<tr>
		<th>
		<center><img src="image\logofood.png" width="150px" height="150px"></center><br>
		<center>
		
		<form action="check_login.php" method="post">
			<div class="form-group">
			<div align="left"><label for="exampleInputEmail1">Email address</label></div>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			
			<div class="form-group">
			<div align="left"><label for="exampleInputPassword1">Password</label></div>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			
			
			
			<br><center><button type="submit" class="btn btn-danger">Login</button></center>
		</form>
		</th>
		</tr>
		</table></center>
			
	</body>
</html>