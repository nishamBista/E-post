<?php 

    require_once("connect.php");

    if(isset($_GET['Del']))
    {
        $email = $_GET['Del'];
        $query = "DELETE FROM customerprofile where email = '".$email."'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            
            header("location:login.php");
        }
        else{
            echo 'Please Check Your Query';
        }
    }
    else
    {
        header("location:login.php");
    }