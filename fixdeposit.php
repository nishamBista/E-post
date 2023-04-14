<?php
$insert = false;
if(isset($_POST['customerId'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $customerId = $_POST['customerId'];
    $depositAmount = $_POST['depositAmount'];
    
    
    $sql = "INSERT INTO `E-Post`.`fixDepositDetail` (`customerId`,  `depositAmount`, `date`) VALUES ('$customerId',  '$depositAmount', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Post</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="img/logo.jpg" width="125px"></a>
            </div>
            <nav>
             <ul id="MenuItems">
                 <li><a href="#">Profile</a></li>
                 <li><a href="apply telegram.php">Apply Telegram</a></li>
                 <li><a href="eLetter.php">Apply E-letter</a></li>
                 <li><a href="fixdeposit.php">Fix Deposit</a></li>
             </ul>
            </nav>
            <img src="img/menu.png" onclick="menutoggle()" class="menu-icon">
        </div>
        
     </div>
<!--------contact us -->
<div class="contact"></div>

        <div class="contact-box">
            <div class="contact-left">
                <h3>Create Your Fix Deposit</h3>
                <form action="fixdeposit.php" method="POST">
                    <?php
        if($insert == true){
        echo "<p class='submitMsg'>Fix Deposit sucessfull!.</p>";
        }
    ?>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Customer ID</label>
                            <input type="text" placeholder="Your Customer ID "name="customerId">
                        </div>
                        <div class="input-group">
                            <label>Deposit Amount</label>
                            <input type="text" placeholder="In AUD."name="depositAmount">
                        </div>
                        
                   
                        
                    </div>
                    
                
                    
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
            <div class="contactt-right">
               <img src="img/93.jpeg" alt="">
                </table>
                
                
            </div>
        </div>
    </div>
<!--------footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="img/play-store.png">
                    <img src="img/app-store.png">
                </div>
            </div>
            <div class="footer-col2">
               <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter<li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
    </div>
    
</div>
    
</body>
</html>
