<?php 
session_start();
$id = $_SESSION["userid"];
if ( $id == "")
{
  header("Location:shoppingcartsignin.php"); 
}else{
    include_once("db/config.php"); 
if($_GET ){
    
  $productid = $_GET['productid'];
  $productname = $_GET['productname'];
  $price = $_GET['price'];

  

  $result = mysqli_query($mysqli,"INSERT INTO product (`productid`,`productname`, `price`)VALUES ('$productid','$productname','$price')");
  //echo $result;
  //die();
  }
}?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="get">
		Enter Product id :<input type="text" name="productid">
		Enter Product Name :<input type="text" name="productname">
		Enter Product Price :<input type="number" name="price">
		<input type="submit"  value="Add" name="">
	</form>

</body>
</html>