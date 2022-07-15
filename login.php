<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="images/icon.jpeg">

    <!--Goodle fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!---font awesome-->
    <script src="https://kit.fontawesome.com/094eaba97f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
  <!---------------------------navbar-------------------------------->
    <section class="nav-container">
        <div class="container">
            <nav class=" border border-dark navbar navbar-expand-lg navbar-light bg-light ">
              <img src="images/icon.jpeg" alt="brand logo" class="logo"><a class="navbar-brand" href="Home.html">Attire World</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                  <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Bookdresses.html">Book dress</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="login" href="login.php">Account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="ContactUs.php">Contact Us</a>
                      </li>
                

                  <li class="nav-item">
                    <a class="nav-link" id="cart" href="login.html"><i style="color:black;" class="fa-solid fa-cart-shopping"></i></a>
                  </li>
                </ul>
               
            </div>
              </nav>
    
    </div>
</section>    
<!-----------------------------------login form----------------------->
<div class="form-container">
  <div class="circle">
    <i class="fas fa-circle-notch fa-10x"></i>
    <i class="fas fa-circle-notch fa-10x second-circle " ></i>
  </div>

<form class="c-form form1" method="POST" action="productdetails.php">
<center><h2 class="acc1"><span >Login</span></h2></center>
        <label for="email">Email Address</label><br>
        <input type="email" nam="email" size="42" required autofocus Placeholder="Enter Email"><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"   required size="42" placeholder="Enter Password"><br><br>
       <center> <input type="button" class="send" id="login" value="Login" 
onClick="window.location.href ='productdetails.php';">
      </div></center>
  </form>
  <!-- <form class="c-form form2" name="form">
 <center> <h2 class="acc2"><span >Sign up</span></h2></center>
    <label for="">Username</label><br>
    <input type="text" size="40"><br><br>
    <label for="email">Email Address</label><br>
    <input type="text" id="registeremail" size="40" autofocus Placeholder="Enter Email"><br><br>
    <label for="password">Password</label><br>
    <input type="password" id="registerpassword" size="40"placeholder="Enter Password"><br><br>
    <label for="password">Confirm Password</label><br>
    <input type="password" id="signuppassword" size="40"placeholder="Enter Password"><br><br>
    <input type="checkbox">&nbsp;&nbsp;Remember Me! <a href="#" style="color:blue">Forgot Password?</a><br><br>
    <center><button class="send" id="signup">Signup</button><br><br>
  <div class="signup-link"  >Already have an account? <a id="login" style="color:blue" href="#">Login now</a>
  </div></center> -->
</form>
</div>

</div>
  </div>
<!---------------------------------footer--------------------------->
        <footer class="linked-footer">
          <div class="container py-5">
            <div class="row py-4">
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                
                <h6 class="text-uppercase font-weight-bold mb-4">Get in Touch</h6>
                <i class="fa fa-map-marker"></i>&nbsp;&nbsp;Sahiwal Punjab, Pakistan<br><br>
                <li>Operational Hours: 11am to 8pm</li><br>
                <i class="far fa-envelope"></i>&nbsp;&nbsp;abc@gmail.com<br><br>
                <i class="fa-solid fa-mobile-screen-button"></i>&nbsp;&nbsp;0124-393848
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><a href="ContactUs.html" link-white text-muted>Contact Us</a></li>
                  <li class="mb-2"><a href="#" >FAQs</a></li>
                  <li class="mb-2"><a href="#features" >About</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2" ><a href="login.html" >Login</a></li>
                  <li class="mb-2"><a href="#" >Register</a></li>
                  <li class="mb-2"><a href="#">Wishlist</a></li>
                  <li class="mb-2"><a href="Bookdress.html">Our Products</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
                <p class=" mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
                <div class="p-1 rounded border">
                  <div class="input-group">
                    <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                    <div class="input-group-append">
                      <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </footer>
        <footer id="footer">
          <a href="https://twitter.com/login?lang=en" style="color:blue" class="link-primary fa-duotone fa-brands fa-twitter footer-icons "></a>
         <a href="https://www.facebook.com/" style="color:blue"class=" link-primary fa-brands fa-facebook footer-icons "></a>
          <a href="https://www.instagram.com/" style="color:red" class="fa-duotone fa-brands fa-instagram footer-icons "></a>
          <a href="www.gmail.com" style="color:black" class="fa-duotone fa-regular fa-envelope footer-icons "></a>
          <p>© Copyright Sadaf❤</p>
        
        </footer>
      </section>
            <!--Bootstrap scripts--->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName ="rental";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



if(count($_POST)>0) {

	

$email=$_POST["email"];
$password=$_POST["password"];


$sql = "INSERT INTO login_detail (email, password) VALUES ('$email','$password')";
					if (mysqli_query($conn, $sql)) {
							  echo '<script language="javascript">';
                               echo 'alert("Successfull login")';
                                echo '</script>';
						
						} else {
							echo "ERROR: (: " . $sql . "<br>" . mysqli_error($conn);
						}  
						
			
}

?>