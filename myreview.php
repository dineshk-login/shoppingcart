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
<table>
<tr><td>name</td><td>Comments</td></tr>
<?php 
include_once("sessionforlogin.php");
include_once("db/config.php");
$id =  $_SESSION['userid'] ;
 //$sql="SELECT * FROM review.comment , user.name WHERE productid = $id AND status = 1";
$sql = "SELECT * FROM review WHERE userid=$id;";
   $result=mysqli_query($mysqli,$sql);
  while($res = mysqli_fetch_assoc($result)) 
{  
 
 ?>  	
 <tr> <td><?php echo $res['productname']  ?></td> 
  <td><?php echo $res['comments']  ?></td></tr>
<?php
}

?>
</table>
<center><a href="dashboard.php">back</a></center>
