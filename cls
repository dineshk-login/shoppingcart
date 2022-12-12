[1mdiff --git a/addproducts.php b/addproducts.php[m
[1mindex bf4b839..8dce6e5 100644[m
[1m--- a/addproducts.php[m
[1m+++ b/addproducts.php[m
[36m@@ -1,10 +1,5 @@[m
 <?php [m
[31m-session_start();[m
[31m-$id = $_SESSION["userid"];[m
[31m-if ( $id == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
     include_once("db/config.php"); [m
 if($_GET ){[m
     [m
[36m@@ -18,7 +13,7 @@[m [mif($_GET ){[m
   //echo $result;[m
   //die();[m
   }[m
[31m-}?>[m
[32m+[m[32m?>[m
 [m
 [m
 <!DOCTYPE html>[m
[1mdiff --git a/dashboard.php b/dashboard.php[m
[1mindex c1d04f6..96ac7d5 100644[m
[1m--- a/dashboard.php[m
[1m+++ b/dashboard.php[m
[36m@@ -14,12 +14,7 @@[m [ma{text-decoration: none;}[m
 <table>[m
 <tr><td>Product id</td><td>Product name</td><td>Price</td><td>Details</td><td>Reviewproduct</td> </tr>[m
 <?php [m
[31m-session_start();[m
[31m-$id = $_SESSION["userid"];[m
[31m-if ( $id == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
 include_once("db/config.php"); [m
 $id =  $_SESSION['userid'];[m
  $sql="SELECT * FROM product" ;[m
[36m@@ -38,7 +33,7 @@[m [m$result1=mysqli_query($mysqli,$sql);[m
 </tr>[m
 <?php[m
 }[m
[31m-}[m
[32m+[m
 ?>[m
 </table>[m
 <center><a href="shoppingcartlogout.php">logout</a></center>[m
[1mdiff --git a/moredetails.php b/moredetails.php[m
[1mindex 481e676..a8ccde4 100644[m
[1m--- a/moredetails.php[m
[1m+++ b/moredetails.php[m
[36m@@ -11,12 +11,7 @@[m [mth, td {[m
 <table>[m
 <tr><td>name</td><td>Comments</td></tr>[m
 <?php [m
[31m-session_start();[m
[31m-$id1 = $_SESSION["userid"];[m
[31m-if ( $id1 == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
   if($_GET){[m
 include_once("db/config.php");[m
 $id = $_GET['id'] ;[m
[36m@@ -32,6 +27,6 @@[m [m$sql = "SELECT user.name , review.comments FROM user LEFT JOIN review ON user.us[m
 <?php[m
 }[m
 }[m
[31m-}[m
[32m+[m
 ?>[m
 </table>[m
[1mdiff --git a/myreview.php b/myreview.php[m
[1mindex 9a4f963..9582611 100644[m
[1m--- a/myreview.php[m
[1m+++ b/myreview.php[m
[36m@@ -11,12 +11,7 @@[m [mth, td {[m
 <table>[m
 <tr><td>name</td><td>Comments</td></tr>[m
 <?php [m
[31m-session_start();[m
[31m-$id = $_SESSION["userid"];[m
[31m-if ( $id == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
 include_once("db/config.php");[m
 $id =  $_SESSION['userid'] ;[m
  //$sql="SELECT * FROM review.comment , user.name WHERE productid = $id AND status = 1";[m
[36m@@ -30,7 +25,7 @@[m [m$sql = "SELECT * FROM review WHERE userid=$id;";[m
   <td><?php echo $res['comments']  ?></td></tr>[m
 <?php[m
 }[m
[31m-}[m
[32m+[m
 ?>[m
 </table>[m
 <center><a href="dashboard.php">back</a></center>[m
[1mdiff --git a/reviewapprove.php b/reviewapprove.php[m
[1mindex 0d36c47..4d74484 100644[m
[1m--- a/reviewapprove.php[m
[1m+++ b/reviewapprove.php[m
[36m@@ -1,10 +1,5 @@[m
 <?php[m
[31m-session_start();[m
[31m-$id = $_SESSION["userid"];[m
[31m-if ( $id == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
 if($_GET){[m
 include_once("db/config.php");[m
 	$userid = $_GET['userid'];[m
[36m@@ -17,5 +12,4 @@[m [mif($value==1){[m
 [m
 	header("Location:shoppingcartadmindashboard.php");[m
 }[m
[31m-}[m
 ?>[m
[1mdiff --git a/reviewproduct.php b/reviewproduct.php[m
[1mindex bfeecd1..db867ab 100644[m
[1m--- a/reviewproduct.php[m
[1m+++ b/reviewproduct.php[m
[36m@@ -1,10 +1,5 @@[m
 <?php [m
[31m-session_start();[m
[31m-$id = $_SESSION["userid"];[m
[31m-if ( $id == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
     include_once("db/config.php"); [m
 if($_POST ){[m
     $comment = $_POST['comments'];[m
[36m@@ -39,7 +34,7 @@[m [mif($_POST ){[m
   //echo $result;[m
   //die();[m
   }[m
[31m-}?>[m
[32m+[m[32m?>[m
   <form action="" method="post">[m
   your comments<input type="text" name="comments">[m
   <input type="submit" value="submit">[m
[1mdiff --git a/shoppingcartadmindashboard.php b/shoppingcartadmindashboard.php[m
[1mindex 802070d..96d46ad 100644[m
[1m--- a/shoppingcartadmindashboard.php[m
[1m+++ b/shoppingcartadmindashboard.php[m
[36m@@ -13,12 +13,7 @@[m [mth, td {[m
 <table>[m
 <tr><td>userid</td><td>productid</td><td>name</td><td>Comments</td><td>approve/regect</td></tr>[m
 <?php [m
[31m-session_start();[m
[31m-$id = $_SESSION["userid"];[m
[31m-if ( $id == "")[m
[31m-{[m
[31m-  header("Location:shoppingcartsignin.php"); [m
[31m-}else{[m
[32m+[m[32minclude_once("sessionforlogin.php");[m
 include_once("db/config.php");[m
 //$userid = $_SESSION['userid'];[m
 [m
[36m@@ -40,7 +35,7 @@[m [m$sql = "SELECT * FROM review WHERE status = 0 ";[m
 [m
 <?php[m
 }[m
[31m-}[m
[32m+[m
 ?>[m
 </table>[m
 <center><a href="dashboard.php">back</a></center>[m
[1mdiff --git a/signup.php b/signup.php[m
[1mindex a0ab290..e0faf7e 100644[m
[1m--- a/signup.php[m
[1m+++ b/signup.php[m
[36m@@ -2,7 +2,6 @@[m
 include_once("db/config.php"); [m
 $response = "";[m
 if($_GET){[m
[31m-	[m
   $name=$_GET['name'];[m
   $password=$_GET['password'];[m
   $city = $_GET['city'];[m
