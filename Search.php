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
?>

 <!DOCTYPE html> 
  <html>  
      <head>  
			<meta charset =utf-8>
           <title>Menu</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
		
	  <body> 	
		<form name="form1" method="post" action="Search.php"> <!--ผมกำหนดให้ส่งข้อมูลที่ค้นหามาที่ไฟล์ Search-->
			<div align="right"><input type="text" name="search">
			<input type="submit" name="search" value="Search"></div>
		</form>
		
        
           <div class="container" style="width:1200px;">  
                <div class="p-3 mb-2 bg-info text-white"><br> <h3 align="center" class="text-success" style="font-weight: bold"> Menu Product </h3> <br /> </div> <br /> 
				<?php  
                $query = "select * from menu where name like '%$search%'"; //คำสั่ง Sql ที่ใช้ 
                $result = mysqli_query($conn, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
				<div class="col-md-4">  
                     <form method="post" action="cart.php?action=add&p_id=<?php echo $row['idp']; ?>">  <!--ส่งidสินค้าไปหน้าตะกร้า -->
                          <div style="border:1px solid #333; background-color:66FF99; border-radius:5px; padding:16px;" align="center">  <!-- -->
                               <img src="Img/<?php echo $row["p_img"]; ?>" class="img-responsive" width="260" /> <br /> <!--ครอบด้วยแท็กimg -->
                               <h4 class="text-dark"> <?php echo $row["p_name"]; ?> </h4>  
                               <h4 class="text-success"> <?php echo $row["p_price"]; ?> บาท </h4>  
                               <input type="number" name="quantity"  value="1" />  <br/>
                               <input type="hidden" name="name" value="<?php echo $row["p_name"]; ?>" /> 
                               <input type="hidden" name="price" value="<?php echo $row["p_price"]; ?>" />  
                               <a href="Detail_Pro.php?P_id=<?php echo $row['idp']; ?>" style="margin-top:5px;" class="btn btn-warning" role="button">Detail</a><!--สร้างปุ่ม-->
							   <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-secondary" value="Add to Cart" /> 
					
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
			</body>	
			</html>