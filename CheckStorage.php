<!DOCTYPE html>
<html>
	<head>
		<title>Check storage</title>
					<style>
			body {
			background-color: #FFFACD;
			}
			
			/* พื้นหลังFrom */
			input[type=texttoo]:focus {
			background-color: #FDF5E6;
			}
			
			/* พื้นหลังFrom */
			input[type=textyou]:focus {
			background-color: #FDF5E6;
			}

			/* แถบเมนู */
			* {
			  box-sizing: border-box;
			}

			body {
			  margin: 0;
			}

			/* Style the top navigation bar */
			.topnav {
			  overflow: hidden;
			  background-color: #333;
			}

			/* Style the topnav links */
			.topnav a {
			  float: right;
			  display: block;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}

			/* Change color on hover */
			.topnav a:hover {
			  background-color: #ddd;
			  color: black;
			}
			
			/* กล่องFrom */
			input[type=texttoo] {
			  width: 300px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  font-size: 16px;
			  background-color: white;
			  background-position: 10px 10px; 
			  background-repeat: no-repeat;
			  padding: 12px 20px 12px 16px;
			}

			/* กล่องFrom */
			input[type=textyou] {
			  width: 200px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  font-size: 12px;
			  background-color: white;
			  background-position: 10px 10px; 
			  background-repeat: no-repeat;
			  padding: 12px 20px 12px 16px;
			}
		</style>
	</head>
	
	<body>
		<div class="topnav">
		<a href="Login.html">Logout</a>
		<a href="CheckStorage.html">Check storage</a>
		<a href="Checkdelivery.html">Check delivery</a>
		</div>
		<br>
		<center><font size="5"><h1>Check storage</h1><div></center>
		
		<form>
			<center><input type="texttoo" name="Code" placeholder="Search code"></center>
		</form>
		
		<br><table border=1 align=center width=500 height=200>
			<tr>
				<th>Product code</th>
				<th>Product name</th>
				<th>Price</th>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table><br>
			
		<table border=1 align=center width=800 height=300>	
			<tr>
				<th>
					<form>
						<br><div align="left"><input type="textyou" name="ProductCode" placeholder="กรอกProduct code"><div>
						<br>
						<div align="left"><input type="textyou" name="ProductName" placeholder="กรอกProduct name"><div>
						<br>
						<div align="left"><input type="textyou" name="Price" placeholder="กรอกPrice"><div>
					</form>
		
					<h4>Category of foods</h4>
						<input type ="checkbox" name="RecommendedMenu"><a>Recommended menu</a><br>
						<input type ="checkbox" name="FastFood"><a>FastFood</a><br>
						<input type ="checkbox" name="Pasta"><a>Pasta</a><br>
						<input type ="checkbox" name="Desert"><a>Desert</a><br>
						<input type ="checkbox" name="Snack"><a>Snack</a><br>
						<input type ="checkbox" name="Drink"><a>Drink</a><br><br>
				</th>
		
				<th>
					<center><br><img src="pic2.png" alt="Food"><br>
					<button>Download</button><br><br>
					<button>Edit</button>
					<button>Add</button>
					<button>Delete</button></center>
				</th>
			</tr>
		</table>
	</body>
</html>