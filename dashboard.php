<style type="text/css">
	
	table {
  width: 100%;
}
th, td {
  width: 25%;
  text-align: left;
  border: 1px solid #000;
}
a{text-decoration: none;}
</style>
<a  style="margin-left: 1200px;" href="myreview.php">myreviews</a>
<table>
<tr><td>Product id</td><td>Product name</td><td>Price</td><td>Details</td><td>Reviewproduct</td> </tr>
<?php 
include_once("sessionforlogin.php");
include_once("db/config.php"); 
$id =  $_SESSION['userid'];
 $sql="SELECT * FROM product" ;
$result1=mysqli_query($mysqli,$sql);
  $ress=mysqli_fetch_assoc($result1);
 $id1 = $ress['productid'];
   $result=mysqli_query($mysqli,$sql);
  while($res = mysqli_fetch_assoc($result)) 
{  
 ?>
 <tr> <td><?php echo $res['productid']  ?></td> 
 <td><?php echo $res['productname']  ?></td> 
  <td><?php echo $res['price']  ?></td> 
  <td><a href='moredetails.php?id=<?= $res['productid']?>'>Moredetails</a></td>
  <td><a href='reviewproduct.php?productid=<?= $res['productid']?>'>givereview</a></a></td>
</tr>
<?php
}

?>
</table>
<center><a href="shoppingcartlogout.php">logout</a></center>
