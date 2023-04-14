<?php
session_start();

if(!isset($_SESSION["email"]))
{
    header("location:Alogin.php");
}

require_once("connect.php");
$query = "select * from customerprofile";
$result = mysqli_query($con,$query);

?>

<!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>viewcustomerpropfile</title>
        <style>
         .container {
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
        table,
        th,
        td{
            padding: 10px;
            border: 1px solid black;
            border-collapse: colllapse;
            
        }
    </style>
    </head>
    <body class="bg-dark">
         <div class="container">
            <h1 align="center">Customer Details:</h1>
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
        <table class="table table-bordered">
            <tr>
                <td style="background-color:#CC0033"><font color="white"><b>First Name</b></font></td>
                <td style="background-color:#CC0033"><font color="white"><b>Last Name</b></font></td>
                <td style="background-color:#CC0033"><font color="white"><b>Email</b></font></td>
                <td style="background-color:#CC0033"><font color="white"><b>Phone Number</b></font></td>
            </tr>

            <?php

            while($row=mysqli_fetch_assoc($result))
            {
                $fname = $row['firstName'];
                $lname = $row['lastName'];
                $email = $row['email'];
                $phnum = $row['phoneNumber'];
?>
                <tr>
                <td><?php echo $fname ?></td>
                <td><?php echo $lname ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $phnum ?></td>
                </tr>
            <?php 
        }

            ?>
        </table>
    </div>
</div>
</div>
</div>

            </body>
            </html>