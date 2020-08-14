<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<title>Register</title>
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
		
		<div align="right"><a href="Login_form.php" class="text-secondary">Login</a> 
		
		<center><table style="width:20%">
		<tr>
		<th>
		<br><center><font size="5"><h1>Register</h1></font></center><br>
		
		<form action="create_register.php" method="post">
		<div class="form-group">
		<label for="exampleFormControlInput1">Firstname</label><a style="color:red;"> *</a>
		<input type="text" name="firstname" class="form-control" id="exampleFormControlInput1" placeholder="Firstname">
		</div>
		
		<div class="form-group">
		<label for="exampleFormControlInput2">Lastname</label><a style="color:red;"> *</a>
		<input type="text" name="lastname" class="form-control" id="exampleFormControlInput2" placeholder="Lastname">
		</div>
		
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label><a style="color:red;"> *</a>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
			</div>
			
			<div class="form-group">
			<label for="exampleInputPassword1">Password</label><a style="color:red;"> *</a>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			
			<div class="form-group">
		<label for="exampleFormControlInput3">Tel.</label><a style="color:red;"> *</a>
		<input type="tel" name="tel" class="form-control" id="exampleFormControlInput3" placeholder="Tel.">
		</div>
		
		<label>Choose profile</label><a style="color:red;"> *</a>
		<input type="file" name="img_user" class="form-control"/>
			
		<br><center><button type="submit" class="btn btn-success">Create account</button></center><br><br><br>
		</form>
		</th>
		</tr>
		</table></center>
		
		
		
	
	</body>
</html>