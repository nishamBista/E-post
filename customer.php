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
<title>customer</title>
</head>
<body>
    <p><strong>Welcome</strong></p>
 <a href="customerprofile.php">My profile</a>
 <br><br>
 <a href="epostlogout.php">Logout</a>
</div>
</body>
</html>