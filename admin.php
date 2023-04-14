<?php
session_start();

if(!isset($_SESSION["email"]))
{
      die("Only logged in users can access this page!");
}

?>


<?doctype html>
<html>
<head>
<title>admin</title>
</head>
<body>
<?php 
echo "Welcome"."<br>";
 ?>
 <br>
 <a href="viewcustomerprofiles.php">View customer profiles</a>
 <br><br>
 <a href="aepostlogout.php">Logout</a>
</body>
</html>