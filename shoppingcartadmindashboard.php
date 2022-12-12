<style type="text/css">
	table {
  width: 100%;
}

th, td {
  width: 25%;
  text-align: left;
  border: 1px solid #000;
}a.text-decoration: none";
</style>
<a href="addproducts.php">Add new products</a>
<table>
<tr><td>userid</td><td>productid</td><td>name</td><td>Comments</td><td>approve/regect</td></tr>
<?php 
session_start();
$id = $_SESSION["userid"];
if ( $id == "")
{
  header("Location:shoppingcartsignin.php"); 
}else{
include_once("db/config.php");
//$userid = $_SESSION['userid'];

$sql = "SELECT * FROM review WHERE status = 0 ";
   $result=mysqli_query($mysqli,$sql);
  while($res = mysqli_fetch_assoc($result)) 
{  

 ?>  	


 <tr>
  <td><?php echo $res['userid']  ?></td>
  <td><?php echo $res['productid']  ?></td> 
  <td><?php echo $res['productname']  ?></td> 
  <td><?php echo $res['comments']  ?></td>
<td><a href="reviewapprove.php?userid=<?= $res['userid']?>&productid=<?= $res['productid']?>&status=1">approve</a><!-- /<a href="reviewapprove.php?productid=<?= $res['productid']?>&status=0">reject</a> --></td>
</tr>

<?php
}
}
?>
</table>
<center><a href="dashboard.php">back</a></center>
