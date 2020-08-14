<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="test2.php?name=<?php echo $_GET["name"];?>" name="frmEdit" method="post">
<?php

if(!$objResult)
{
	echo "Not found name=".$_GET["name"];
}
else
{
?>
<table width="600" border="1">
  <tr>
    <th width="160"> <div align="center">Name </div></th>
    <th width="198"> <div align="center">Lastname</div></th>

  </tr>
  <tr>
    <td><div align="center">
    <td><input type="text" name="name" size="20" value="<?php echo $objResult["Name"];?>"></td>
    <td><input type="text" name="lastname" size="20" value="<?php echo $objResult["lastname"];?>"></td>
    
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  <?php
  }
  mysql_close($objConnect);
  ?>
  </form>
</body>
</html>