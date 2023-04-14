                    <?php

$host="localhost";
$user="root";
$password="";
$db="e-post";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $Password=$_POST["Password"];

    $sql="select * from admin where email='".$email."' AND Password='".$Password."'";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    $count=mysqli_num_rows($result);

    if($count>0)
    {
     $_SESSION["email"]=$email;

        header("location:admin.php");
  
}
      else
{
    header("location:eposterror.php");
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
                     <span onclick="Login()">Admin Login</span>
                  </div>
                 
                  <form id="RegForm" action="#" method="POST">
                    <div class="email">
                    <input type="text" placeholder="email" name="email" required>
                </div>
                <div class="password">
                    <input type="password" placeholder="password" name="Password" required>
                </div>
                <div>
                    <input type="submit" class="btn" value="Login">
                </div>
                    <a href="">Forgot password</a>
           </div>
       </form>
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

