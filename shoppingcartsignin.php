<?php 
session_start();
include_once("db/config.php"); 
//$response = "";
if($_GET){
$name=$_GET['username'];
$password=$_GET['password'];
//$city = $_GET['city'];
$sql="SELECT * FROM user WHERE name='$name' AND password='$password'";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_assoc($result);
//echo $row['userid']; 
//die();
if(!empty($row) && $row['position'] == 1 ){
$_SESSION['userid'] = $row['userid'] ;
//echo   $_SESSION['userid'];
//die(); 
header("Location:shoppingcartadmindashboard.php"); 
}elseif (!empty($row) && $row['position'] == 2) {
$_SESSION['userid'] = $row['userid'] ;
//echo   $_SESSION['userid'];
//die(); 
header("Location:dashboard.php"); 
}else{
$response = "error in password or incorrect name";
}
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Shopping cart</title>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<div id="bg"></div>
<form action="" method="get">
<h1>Welcome to shopping</h1>
<div class="form-field">
<input type="text" placeholder="Email / Username" required/ name="username">
</div>
<div class="form-field">
<input type="password" placeholder="Password" required/ name="password">                        
</div>
<div class="form-field">
<button class="btn" type="submit">Log in</button><span><?php if($_GET){ echo $response; }?></span>
</div>
<div style="margin: 50px 10px 0px 0px ;"><a style="text-decoration: none; color: white;" href="signup.php">New user</a></div>
</form>
</body>
</html>
