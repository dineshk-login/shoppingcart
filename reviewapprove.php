<?php
include_once("sessionforlogin.php");
if($_GET){
include_once("db/config.php");
	$userid = $_GET['userid'];
	$productid= $_GET['productid'];
	$value= $_GET['status'];
	
if($value==1){
	$result = mysqli_query($mysqli, "UPDATE review SET status=$value WHERE userid= $userid");
}

	header("Location:shoppingcartadmindashboard.php");
}
?>
