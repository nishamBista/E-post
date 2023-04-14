<?php

$email="";
$errors=array();
$status="";
$db = mysqli_connect("localhost","root","","e-post");

if (isset($_POST['reg_user'])){
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
    $password_2=mysqli_real_escape_string($db,$_POST['password_2']);

    if (empty($email)){array_push($errors,"Email is required");}
    if (empty($password_1)){array_push($errors,"Password is required");}
    if ($password_1 != $password_2){
    array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM customerprofile WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user){
    if ($user['email'] === $email){
    array_push($errors, "Email already exists");
    }
    }
    if (count($errors) == 0){
    $password = ($password_1);
    $query = "INSERT INTO customerprofile (email, password) VALUES ('$email', '$password')";
    mysqli_query($db, $query); 
    $status="Account created successfully";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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
               <li><a href="index.html">Home</a></li>
                   <li><a href="About.html">Services</a></li>
                   <li><a href="products.html">Products</a></li>
                   <li><a href="contact.html">Contact</a></li>
                   <li><a href="D/registration.php">Account</a>
                    <ul>
                        <li><a href="registration.html">Register</a></li>
                        <li><a href="Alogin.html">Admin Login</a></li>
                        <li><a href="login.html">User Login</a></li>

                    </ul>
                   </li>
               </ul>
              </nav>
              <img src="img/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
          
          
       </div>
       
       
<!--------------Cart Items details--------------->
<div class="accout-page">
    <div class="container">
  
       <div class="row">
         
          <div class="col-2">
             <img src="img/12.JPG" width="100%">
          </div>
          
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
        
                     <span onclick="register()">Register</span>
                  </div>
                 
                  <form id="RegForm" action="#" method="POST">
                    <?php include('errors.php');?>
                   <input type="text" placeholder="email" name="email" value="<?php echo $email;?>" required>
                   <input type="password" placeholder="password" name="password_1" required>
                   <input type="password" placeholder="confirm password" name="password_2" required>
                   <button type="submit" class="btn" name="reg_user">Register</button>
               </form>
               <p><?php echo $status; ?></p>
              </div>
           </div>
       </div>
</div>
</div>

<!----------Footer---------------> 
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




<!-------------js for toggle menu-------------->

<script>
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
     
</script>
<!------------------- form toggle ----------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("indicator");
        
        function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
            };
        function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)"
            };
            
    </script>
    
    
    
</body>
</html>

