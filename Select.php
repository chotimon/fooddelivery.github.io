<?php
session_start();
?>
<html lang="en">
	<head>
	
		<title>Selected menu</title>
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
		
		<div align="right"><a href="Menu.php" class="text-secondary">Menu</a> |
		<a href="Logout.php" class="text-secondary">Logout</a><br><br>
		
		<br><center><font size="5"><h1>Selected menu</h1></font></center><br>
				
		<center><table style="width:70%">
		<tr>
		<th>

		<div style="clear:both;"></div>
		<br>
		<div class="table-responsive"><!--สร้างการแสดงผลในรูปแบบของตาราง-->
		<table class="table table-striped table-dark"><!--สร้างการแสดงผลในรูปแบบของตารางที่มีขอบ-->
			<thead>
				<tr>
					<th></th>
					<th scope="col">Menu</th>
					<th scope="col">Quantity</th>
					<th scope="col">Price</th>
					<th scope="col">Total menu</th>
				</tr>
			</thead>
			<tbody>
					<?php
						if(!empty($_SESSION["shopping_cart"])){ //ทำการเช็คตัวเองที่sessionว่ามันมีค่าว่างรึเปล่า มันมีการกำหนดค่าsession ชื่่อ shopping_cartขึ้นรึเปล่า
							$total=0; //สร้างตัวแปรเก็บราคารวมทั้งหมด
							foreach($_SESSION['shopping_cart'] as $key => $value) { ?> <!--ลูปข้อมูลในsessionเข้าผ่านค่าkeyกับvalue-->
							
							<tr>
							<th scope="row"></th>
								<td><?php echo $value['item_name'];?></td>
								<td><?php echo $value['item_quantity'];?></td>
								<td>฿ <?php echo $value['item_price'];?></td>
								<td>฿ <?php echo number_format($value['item_price']*$value['item_quantity'], 2);?></td><!--ราคารวมของสินค้าแต่ละประเภท-->
							</tr>
					<?php
							$total=$total+($value['item_price']*$value['item_quantity']);//การหาราคารวมราคารวมพร้อมที่จะทำการเช็คบิล
							}
					?>
							<tr>
								<td colspan="4" align="right">Total</td>
								<td align="left">฿ <?php echo number_format($total, 2); ?></td>
							</tr>
			<tbody>
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
		<center><table width="500" >
			<tr>
				<td><br>
					<form action="list_insert.php" method="post">
					
						<div class="form-group">
						<label form="exampleFormControlInput2">Firstname</label><a style="color:red;"> *</a>
						<input type="text" name="firstname" class="form-control" id="exampleFormControlInput2" placeholder="Name">
						</div>
						
						<div class="form-group">
						<label form="exampleFormControlInput2">Lastname</label><a style="color:red;"> *</a>
						<input type="text" name="lastname" class="form-control" id="exampleFormControlInput2" placeholder="Lastname">
						</div>
		
						<div class="form-group">
						<label form="exampleFormControlInput2">Tel</label><a style="color:red;"> *</a>
						<input type="tel" name="Tel" class="form-control" id="exampleFormControlInput2" placeholder="Tel">
						</div>
						
						<div class="form-group">
						<label form="exampleFormControlTextarea1">Address</label><a style="color:red;"> *</a>
						<textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Address"></textarea>
						</div>
		
					<div align="right"><button type="submit" name="add_user"class="btn btn-success">Confirm</button>
					</form>
					
		
				
					
					<br><br><br><br><br><br>
				</td>
			</tr>
		</table></center>
	</body>
</html>