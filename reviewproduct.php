<?php 
include_once("sessionforlogin.php");
    include_once("db/config.php"); 
if($_POST ){
    $comment = $_POST['comments'];
	$userid = $_SESSION['userid'];
    //echo $userid;
    //die();
  $product=$_GET['productid'];
  $sql="SELECT * FROM product";
  $result=mysqli_query($mysqli,$sql);
  $row=mysqli_fetch_assoc($result);
  $sql1 = "SELECT * FROM user WHERE userid = $userid ";
  $result1=mysqli_query($mysqli,$sql1);
  $row1=mysqli_fetch_assoc($result1);
  
  
  //$userid = $row1['userid'];
  $username = $row1['name'];
  //echo$username;
  //die();
  $productid = $row['productid'];
  $productname = $row['productname'];
  //echo $productname;
  //die();
  $comments = $_POST['comments'];

  //echo $row['userid']; 
  //die();
  


  $result = mysqli_query($mysqli,"INSERT INTO review (`userid`,`username`, `productid`,`productname`,`comments`)VALUES ('$userid','$username','$productid','$productname','$comments')");
  //echo $result;
  //die();
  }
?>
  <form action="" method="post">
  your comments<input type="text" name="comments">
  <input type="submit" value="submit">

</form>
