<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("location:login.php");
}

require_once("connect.php");
$email = ($_SESSION["email"]);
$query = "select * from customerprofile where email='".$email."'";
$result = mysqli_query($con,$query);

while ($row=mysqli_fetch_assoc($result))
{
                $customerId = $row['customerId'];
                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $email = $row['email'];
                $phnum = $row['phoneNumber'];
}

?>

<!doctype html>
    <html>
    <head>
        <title>customer profile</title>
        <style>
        .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: #white;
  background-color: #dc143c;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button: a:hover{
    opacity:  0.7;
}

a:link{color: white;}

a:visited{color: white;}

a:hover{color: #c0c0c0;}

a:active{color: #0000ff;}

</style>
</head>
        <body>
            <h1 style="font-size:40px;">Hello, <?php echo $fname ?> !</h1>
            <div class="card">
            <h1 style="text-align:center">My Profile</h1>
            <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="img" border="0" alt="img" style="width:50%">
            <table>
                <tr>
                    <td align="left">CustomerID:</td><td align="left"><b><?php echo $customerId ?></b></td>
                </tr>
                <tr>
                    <td align="left">Firstname:</td><td align="left"><b><?php echo $fname ?></b></td>
                </tr>
                <tr>
                <td align="left">Lastname:</td><td align="left"><b><?php echo $lname ?></b></td>
            </tr>
            <tr>
                <td align="left">Email:</td><td align="left"><b><?php echo $email ?></b></td>
            </tr>
            <tr>
                <td align="left">Phone-number:</td><td align="left"><b><?php echo $phnum ?></b></td>
            </tr>
            </table>

        <button class="btn btn-primary" name="edit"><a href="editprofile.php?GetID=<?php echo $email ?>">Edit Profile</a></button>
        <button><a href="delete.php?Del=<?php echo $email ?>" onclick="return confirm('Are you sure?')">Delete Profile</a></button>
</div>
            </body>
            </html>
 