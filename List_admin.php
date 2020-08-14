<?php
session_start();
?>
<html lang="en">

						<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "Fooddelivery";

						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql = "SELECT firstname, lastname, Tel, address FROM list"; 
						$result = $conn->query($sql);
						
						echo "<center>";
						echo "<table width = 70%>";
						echo"<tr>
								
								<th>firstname</th>
								<th>lastname</th>
								<th>Tel</th>
								<th>address</th>
								
								
							</tr>";
						if ($result->num_rows > 0) {
							// output data of each row

							while($row = $result->fetch_assoc()) {
								echo "<tr>"; 
								echo "<td>",$row["firstname"]."</td>";
								echo "<td>",$row["lastname"]."</td>"; 
								echo "<td>",$row["Tel"]."</td>"; 
								echo "<td>",$row["address"]."</td>"; 
								echo "</tr>"; 
								}
							} else {
								echo "No order";
							}
								
						$conn->close();
						?>






	<head>
	
		<title>List admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	
	
	<div class="p-3 mb-2 bg-dark text-white"><h1>Food Delivery</h1></div>
		<div class="p-3 mb-2 bg-warning text-dark"></div>
		
		<div align="right"><a href="AdminSetting.php" class="text-secondary">Menu</a> |
		<a href="Logout.php" class="text-secondary">Logout</a><br><br>
		
		<br><center><font size="5"><h1>List menu</h1></font></center><br>
				
					<center><table style="width:70%">
					<tr>
					<th>
					<br><br><br>
						
						<?php
						if(!empty($_SESSION["shopping_cart"])){ //ทำการเช็คตัวเองที่sessionว่ามันมีค่าว่างรึเปล่า มันมีการกำหนดค่าsession ชื่่อ shopping_cartขึ้นรึเปล่า
							$total=0; //สร้างตัวแปรเก็บราคารวมทั้งหมด
							foreach($_SESSION['shopping_cart'] as $key => $value) { ?> <!--ลูปข้อมูลในsessionเข้าผ่านค่าkeyกับvalue-->
							
							<tr>
							
								<td><b>Menu : </b><?php echo $value['item_name'];?></td>
								<td><b>Quantity : </b><?php echo $value['item_quantity'];?></td>
								<td><b>Price : </b>฿ <?php echo $value['item_price'];?></td>
								<td><b>Total menu : </b>฿ <?php echo number_format($value['item_price']*$value['item_quantity'], 2);?></td><!--ราคารวมของสินค้าแต่ละประเภท-->
								
							</tr>
							<?php
							$total=$total+($value['item_price']*$value['item_quantity']);//การหาราคารวมราคารวมพร้อมที่จะทำการเช็คบิล
							}
						?>
						<tr>
							<td colspan="4" align="right">Total</td>
							<td align="left">฿ <?php echo number_format($total, 2); ?></td>
							
						</tr>

							
						<?php
						}
				
						?>

					
						</table>
						</div>
						</div>
						
						
						<th>
						<tr>
						
						</table></center>
						<br>
								
						<form action="list_order.php" method="post">
						<center><button type="submit" name="add_user"class="btn btn-success">Confirm</button>
						</form>
	
	</body>
					
</html>