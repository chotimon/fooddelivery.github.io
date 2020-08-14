<!DOCTYPE html>
<html>
	<head>
		<title>Check delivery</title>
			<style>
			
			/* พื้นหลัง */
			body {
			background-color: #FFFACD;
			}
			
			/* พื้นหลังFrom */
			input[type=texttoo]:focus {
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
			  width: 400px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  font-size: 16px;
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
		<font size="5"><br><br><center><h1>Check delivery</h1></center></font>
		
		<form>
			<center><input type="texttoo" name="Telephone number" placeholder="Telephone number"><br></center>
		</form>
		
		<br><center><button>Show</button></center><br>
		
		<table border=1 align=center width=500 height=200>
			<tr>
				<th>Status</th>
				<th>Check products</th>
			</tr>
			<tr>
				<td>Order</td>
				<td><center><input type="checkbox" name="check"><a>claim &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
					<input type="checkbox" name="check"><a>dismiss </a></center></td> 
			</tr>
			<tr>
				<td>Cooking</td>
				<td><center><input type="checkbox" name="check"><a>claim &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
					<input type="checkbox" name="check"><a>dismiss</a></center></td>
			</tr>
			<tr>
				<td>Delivery</td>
				<td><center><input type="checkbox" name="check"><a>claim &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					<input type="checkbox" name="check"><a>dismiss</a></center></td>
			</tr>
			<tr>
				<td>Successfully</td>
				<td><center><input type="checkbox" name="check"><a>claim &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					<input type="checkbox" name="check"><a>dismiss</a></center></td>
			</tr>
		</table>
	</body>
</html>