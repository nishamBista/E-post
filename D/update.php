<?php 

    require_once("connect.php");

    if(isset($_POST['update']))
    {
        $email = $_GET['ID'];
        $fname = $_POST['cfname'];
        $lname = $_POST['clname'];
        $email = $_POST['cemail'];
        $phnum = $_POST['cphnum'];

        $sql = "UPDATE customerprofile SET firstName = '".$fname."', lastName = '".$lname."', email ='".$email."', phoneNumber ='".$phnum."' where email ='".$email."'";
        
        if(mysqli_query($con,$sql))
        {
            header("location:customerprofile.php");
        }
        else
        {
            echo ' Please Check Your Query ';
            echo "ERROR: Could not execute $sql.";
        }
    }
    else
    {
        header("location:customerprofile.php");
    }


?>