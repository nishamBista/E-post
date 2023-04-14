  <?php

    include 'connection.php';

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
      <style>
          .message {
              width: 100%;
              height: 100px;
              text-align: center;
          }

          .close {
              width: 50px;
          }
      </style>
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
                      <li><a href="products.html">Products</a></li>
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="registration.html">Account</a>
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
      <!--------contact us -->
      <div class="contact"></div>
      <?php
        if (isset($_POST['insert'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $sql = "insert into contact(name,email,phone,subject,message) 
            VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $subject . "','" . $message . "')";

            $query = mysqli_query($con, $sql);
            if ($query) {
                echo '<div class="message">
                        <div class="alert alert-success alert-dismissible fade show">
                        <strong> Contact submit successfully. </strong>We will contact you shortly.</div>
                    </div>';
            } else {
                echo '<div class="message">
                        <div class="alert alert-danger alert-dismissible fade show">
                        <strong> Error </strong>submitting form.</div>
                    </div>';
            }
        }
        ?>
      <br />
      <h2>Connect With Us</h2>
      <div class="contact-box">
          <div class="contact-left">
              <h3>Send your request</h3>
              <form method="post" enctype="multipart/form-data">
                  <div class="input-row">
                      <div class="input-group">
                          <label>Name</label>
                          <input type="text" name="name" placeholder="Kent Institute" required>
                      </div>
                      <div class="input-group">
                          <label>Phone</label>
                          <input type="text" name="phone" placeholder="+61 412 520 3231" required>
                      </div>
                  </div>
                  <div class="input-row">
                      <div class="input-group">
                          <label>Email</label>
                          <input type="email" name="email" placeholder="kentinstitute@gmail.com" required>
                      </div>
                      <div class="input-group">
                          <label>Subject</label>
                          <input type="text" name="subject" placeholder="Delivery status" required>
                      </div>

                  </div>
                  <label>Message</label>
                  <textarea rows="5" name="message" placeholder="Your Message" required></textarea>
                  <button type="submit" name="insert">SEND</button>
              </form>
          </div>
          <div class="contact-right">
              <h3>Reach Us</h3>

              <table>
                  <tr>
                      <td>Email</td>
                      <td>epost@gmailcom</td>
                  </tr>
                  <tr>
                      <td>Phone</td>
                      <td>+61 412 345 6789</td>
                  </tr>
                  <tr>
                      <td>Address</td>
                      <td>Level 11, 10 Barrack Street;
                          Sydney NSW 2000, Australia
                      </td>
                  </tr>

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
                          <li>Twitter
                          <li>
                          <li>Instagram</li>
                          <li>YouTube</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </body>

  </html>