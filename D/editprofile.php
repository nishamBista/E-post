<?php

    require_once("connect.php");
    $email = $_GET['GetID'];
    $query = "SELECT * FROM customerprofile WHERE email='".$email."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $fname = $row['firstName'];
        $lname = $row['lastName'];
        $email = $row['email'];
        $phnum = $row['phoneNumber'];
    }
?>



<!doctype html>
    <html>
<head>
    <title>Document</title>
    <style>
    .container {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
</style>
</head>
<body>
                        <div class="container">
                            <h2> Update Profile</h2>
                            <img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="img" border="0" alt="img" style="width:50%">
                            <form action="update.php?ID=<?php echo $email ?>" method="post">
                                <table>
                                    <tr>
                                <td align="left">Firstname:</td><td align="left"> <input type="text" class="form-control mb-2" placeholder=" First Name " name="cfname" value="<?php echo $fname ?>"></td>
                            </tr>
                            <tr>
                                <td align="left">Lastname:</td><td align="left"> <input type="text" class="form-control mb-2" placeholder=" Last Name " name="clname" value="<?php echo $lname ?>"></td>
                            </tr>
                            <tr>
                                <td align="left">Email:</td><td align="left"><input type="email" class="form-control mb-2" placeholder=" Email " name="cemail" value="<?php echo $email ?>"></td>
                            </tr>
                            <tr>
                                <td align="left">Phone-number:</td><td align="left"><input type="tel" class="form-control mb-2" placeholder=" Phone Number " name="cphnum" value="<?php echo $phnum ?>"></td>
                            </tr>
                        </table><br><br>
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
    </body>
    </html>