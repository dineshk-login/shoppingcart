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
  if($_GET){
include_once("db/config.php");
$id = $_GET['id'] ;
 //$sql="SELECT * FROM review.comment , user.name WHERE productid = $id AND status = 1";
$sql = "SELECT user.name , review.comments FROM user LEFT JOIN review ON user.userid = review.userid WHERE review.status = 1 AND productid = $id";
   $result=mysqli_query($mysqli,$sql);
  while($res = mysqli_fetch_assoc($result)) 
{  
 
 ?>  	
 <tr> <td><?php echo $res['name']  ?></td> 
  <td><?php echo $res['comments']  ?></td></tr>
<?php
}
}

?>
</table>
