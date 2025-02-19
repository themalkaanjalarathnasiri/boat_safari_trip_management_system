<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Testing</title>
        <link rel="stylesheet" href="../css/Booking.css">
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet"  href="BoatSafariHeader1.css">
    </head>
    <body bgcolor="#34495e">
        <!-- Header Section -->
    
  
       <br><br> <br>
<div class="cont-log">

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
			
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		</div>
    <br><br>
	         <!-- Footer Section -->
					 <footer>
        <div class="container">
          <div class="section about">
            <h3>About Us</h3>
            <p>
              Hikka Travels established in 2020 as a company who provides boat
              safaris around Hikkaduwa area for local and foreign travelers. We
              are a well established and well known organization in industry with
              more than 2 years experience.
            </p>
  
            <!-- Social Media Links -->
            <ul class="social-media">
              <li>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-airbnb"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
              </li>
            </ul>
          </div>
          <div class="section links">
            <!-- Quick Links -->
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#packages">Packages</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="#bookus">BookUs</a></li>
            </ul>
          </div>
          <!-- Contact Us Details -->
          <div class="section contact">
            <h3>Contact Us</h3>
            <ul class="info">
              <li>
                <span><i class="fa-solid fa-location-dot"></i></span
                ><span
                  ><p>
                    No 759, Galle Road,<br />
                    Thiranagama,<br />
                    Hikkaduwa.
                  </p></span
                >
              </li>
              <li>
                <span><i class="fa-solid fa-phone"></i></span
                ><span>
                  <p>+94 719154661</p>
                  <p>+94 778729586</p>
                </span>
              </li>
              <li>
                <span><i class="fa-solid fa-envelope"></i></span
                ><span> <p>wearehikkatravels@gmail.com</p></span>
              </li>
            </ul>
          </div>
        </div>
      </footer>
  
      <!-- Copyright Claim -->
      <div class="copyright-text">
        <p>Copyright © 2022 Hikka Travels. All Rights Reserved</p>
      </div>
</body>
</html>