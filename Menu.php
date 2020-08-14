<!DOCTYPE html>

<?php
session_start();
?>

<html lang="en">
	<head>
		<title>Menu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			/* พื้นหลัง */
			body {
			background-color: #FF9933;
			}
			
			 /* กรอบสินค้า */ 
			  .thumbnail {
				padding: 0 0 30px 0;
				border: none;
				border-radius: 10;
			  }
			  .thumbnail p {
				margin-top: 30px;
				color: #555;
			  }
			  
			  /* ปุ่มbuy*/
			  .btn {
				padding: 10px 20px;
				background-color: #333;
				color: #f1f1f1;
				border-radius: 0;
				transition: .2s;
			  }
			  .btn:hover, .btn:focus {
				border: 1px solid #333;
				background-color: #fff;
				color: #000;
			  }

			    /* แถบเมนู */
			  .navbar {
				margin-bottom: 0;
				background-color: #2d2d30;
				border: 0;
				font-size: 13px !important;
				letter-spacing: 4px;
				opacity: 0.9;
			  }
			  .navbar li a, .navbar .navbar-brand { 
				color: #d5d5d5 !important;
			  }
			  .navbar-nav li a:hover {
				color: #fff !important;
			  }
			  .navbar-nav li.active a {
				color: #fff !important;
				background-color: #29292c !important;
			  }
			  .navbar-default .navbar-toggle {
				border-color: transparent;
			  }
			  .nav-tabs li a {
				color: #777;
				}
			  
			   .open .dropdown-toggle {
				color: #fff;
				background-color: #555 !important;
			  }
			  .dropdown-menu li a {
				color: #000 !important;
			  }
			  .dropdown-menu li a:hover {
				background-color: red !important;
			  }
			  
			/* พื้นหลังวิดีโอ */
			.overlay {
			  position: absolute;
			  width: 100%;
			  background: rgba(0,0,0,0);
			}

		</style>
			</head>
	
				<body>
					<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container-fluid">
					<div class="navbar-header">
					<a class="navbar-brand"><h4>Food Delivery</h4></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				    </button>
					</div>
					
					<div class="collapse navbar-collapse" id="myNavbar">
				
					<ul class="nav navbar-nav navbar-right">
					<li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
					</ul>
				
					<br><div align="center"><form name="form1" method="post" action="Menu.php"> 
					<input type="text" name="search" size="40px" placeholder="Search">
					<input type="submit" name="Submit" value="Search" class="btn btn-success">
					</form></div>
				
				
					</div>
					</div>
					</nav>
		
				<header class="hero-video row middle-xs offset-next-above" style="background-image: url(/Upload/HJ/Media/Home/hero-mobile_2.jpg);">
				<div class="video-container">
				<div class="overlay">
				<br><br><br><br>

				<div align="right" ><h5 style="color:white">TEL : 094-2186530, 099-2137441<br><br>FACEBOOK : Food Delivery</h5>
				</div>
				<br><br><br><br><br><br>
				
				<center><font color="#FFFFFF" size="15"><strong>MENU</strong></font></center>
				<center><font color="#FFFFFF" size="5">Set menu</font></center>
				<br>
				<br>
				</div>
				<video class="background-video" muted="true" autoplay="true" loop="true" width="100%" height="100%">
                <source src="video\HeroAnimation-Products5.mp4" type="video/mp4">
				</video>
				</div>
				<br>
<?php
error_reporting (E_ALL ^ E_NOTICE);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Fooddelivery";
	$search = $_POST['search'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>
<?php  

    $query = "SELECT * from menu where name like '%$search%'"; 
    $result = mysqli_query($conn, $query);  
        if(mysqli_num_rows($result) > 0)  {  
            while($row = mysqli_fetch_array($result))  {  
?>  
	<form method="post" action="Menu.php?action=add&id=<?php echo $row['id'];?>" >
		<div class="row-tr text-center">
		<div class="col-sm-3">
		<div class="thumbnail">
				
		<img src="image/<?php echo $row["img"];?>" width="200" height="200">
		<h5>Name : <?php echo $row['name'];?></h5>
		<h5>Price : ฿ <?php echo $row["price"];?></h5>
		<h5>Quantity : </h5> 
		<center><table width="50%">
		<tr>
		<th>
		<input type="text" name="quantity" class="form-control" value="1"/>
		</tr>
		</th>
		</table></center>
		<input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>"/>
		<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
		<br><br>
		<button type="submit" name="add_menu" class="btn">Buy</button>
		</div>
		</div>
		</div>
		</form>
<?php 
	}
	}
?>
		
<?php	if(isset($_POST["add_menu"])){
			if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'		=>		$_GET["id"],
				'item_name'		=>		$_POST["hidden_name"],
				'item_price'		=>		$_POST["hidden_price"],
				'item_quantity'		=>		$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else//มีข้อมูลอยู่ในอาเรย์แล้ว
		{
			echo '<script>alert("The product has been added") </script>';
			echo '<script>window.location="Menu.php" </script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'		=>		$_GET["id"],
			'item_name'		=>		$_POST["hidden_name"],
			'item_price'		=>		$_POST["hidden_price"],
			'item_quantity'		=>		$_POST["quantity"]
		);
			$_SESSION["shopping_cart"][0] = $item_array;
	}
}
		if(isset($_GET['action'])){
			if($_GET['action']=="delete"){ //ตัวเช็คactionว่าเป็นdeleteไหมสถานะเป็นดีรีสรึเปล่าถ้าเป้นดีรีสจะวนลูปเช็คชั่นนี้
			foreach ($_SESSION['shopping_cart'] as $key => $value){ //รับค่าไอดีที่จุดนี้
				if($value['item_id']==$_GET['id']){ //เป็นการเก็บค่าkeyที่ส่งผ่านurlถ้าตรงกันให้ส่งไอดีมากถ้าค่าที่ได้รับตรงกับที่มีอยู่
					unset($_SESSION['shopping_cart'][$key]); //ไม่ทำงานตัวkeyตรงนีคือkeyไอเทมไอดีที่ตรงกับรหัสสินค้าที่ส่งมาผ่านทางยูอาร์แอล
					echo '<script>alert("Item removed")</script>'; // แสดงลบเรียบร้อย
					echo '<script>window.location="Menu.php"</script>';
				}
			}
		}
		}
?>


	<h6 style ="color: #FF9933">.</h6>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<a class="navbar-brand"><nav class="navbar navbar-default navbar-fixed-bottom">
	<div class="container-fluid">
	<div class="navbar-center">
	<center><table style="width:70%">
		<tr>
			<th>
				<div style="clear:both;"></div>
				<br>
				<div class="table-responsive"><!--สร้างการแสดงผลในรูปแบบของตาราง-->
				<table class="table table-bordered"><!--สร้างการแสดงผลในรูปแบบของตารางที่มีขอบ-->	
		<tr>
			<th>Menu</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total menu</th>
			<th>Tool</th><!--บรรจุส่่วนการลบข้อมูล-->
		</tr>
<?php
	if(!empty($_SESSION["shopping_cart"])){ //ทำการเช็คตัวเองที่sessionว่ามันมีค่าว่างรึเปล่า มันมีการกำหนดค่าsession ชื่่อ shopping_cartขึ้นรึเปล่า
		$total=0; //สร้างตัวแปรเก็บราคารวมทั้งหมด
		foreach($_SESSION['shopping_cart'] as $key => $value) { ?> <!--ลูปข้อมูลในsessionเข้าผ่านค่าkeyกับvalue-->
							
		<tr>
			<td><?php echo $value['item_name'];?></td>
			<td><?php echo $value['item_quantity'];?></td>
			<td>฿ <?php echo $value['item_price'];?></td>
			<td>฿ <?php echo number_format($value['item_price']*$value['item_quantity'], 2);?></td><!--ราคารวมของสินค้าแต่ละประเภท-->
			<td><a href="Menu.php?action=delete&id=<?php echo $value['item_id'];?>" style="color:white;">Delete menu</td>
		</tr>
<?php
	$total=$total+($value['item_price']*$value['item_quantity']);//การหาราคารวมราคารวมพร้อมที่จะทำการเช็คบิล
	}
?>
		<tr>
			<td colspan="3" align="right">Total</td>
			<td align="right">฿ <?php echo number_format($total, 2); ?></td>
			<td></td>
		</tr>

<?php
	}
?>
						
	<ul class="nav navbar-nav navbar-right">
	<li><a href="Select.php"><span class="glyphicon glyphicon-shopping-cart"></span> Select menu</a></li>
	</ul>
		</table>
			</div>
	</div>
		<th>
		<tr>
						
		</table></center>
						
	</div>
	</div>
			</nav></a>
<br>
<br>
	</body>
</html>