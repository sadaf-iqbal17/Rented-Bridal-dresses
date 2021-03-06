<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product details</title>
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

</head>
<body>
    
    <section>
        <div class="container">
            <nav class=" border border-dark navbar navbar-expand-lg navbar-light bg-light ">
              <img src="images/icon.jpeg" alt="brand logo" class="logo"><a class="navbar-brand" href="Home.html">Attire World</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                  <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                      <a class="nav-link" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Bookdresses.html">Book dress</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.html">Account</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link"  href="ContactUs.html">Contact Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="cart" href="login.html"><i style="color:black;" class="fa-solid fa-cart-shopping"></i></a>
                      </li>
                  </ul>
               
            </div>
              </nav>
    
    </div>
    
    </section>
<!------------single product details---->
<form class="col-lg-12 col-md-12 c-form border-dark" action="productdetails.php"method="POST" class="col-lg-2">
  <h2>Order data</h2><br>
  <label >Name</label><br>
  <input type="text" name="pname"size="40" required><br><br>
  <label >Date</label><br>
  <input type="date" name="pdate" size="40" required><br><br>
  <label>Phone #</label><br>
  <input type="text" size="40" name="phone" required><br><br>
  <label >Address</label><br>
  <textarea  cols="42" rows="5" name="address" required></textarea><br><br>
  <center><button class="send" name="send-btn">Send</button></center>

</form>
<br>
<br>



  <!---footer-->

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
            <li class="mb-2"><a href="#" link-white text-muted">Contact Us</a></li>
            <li class="mb-2"><a href="#" >FAQs</a></li>
            <li class="mb-2"><a href="#features" >About</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-2" ><a href="#" >Login</a></li>
            <li class="mb-2"><a href="#" >Register</a></li>
            <li class="mb-2"><a href="#">Wishlist</a></li>
            <li class="mb-2"><a>Our Products</a></li>
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
    <p>?? Copyright Sadaf???</p>
  
  </footer>
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

	
$pname=$_POST["pname"];
$pdate=$_POST["pdate"];
$phone=$_POST["phone"];
$address=$_POST["address"];


$sql = " INSERT INTO order (pname, pdate, phone, address) VALUES ('$pname','$pdate','$phone' ,  '$address')";
					if (mysqli_query($conn, $sql)) {
							  echo '<script language="javascript">';
                               echo 'alert("Successfully order placed")';
                                echo '</script>';
						
						} else {
							echo "ERROR: (: " . $sql . "<br>" . mysqli_error($conn);
						}  
						
			
}

?>