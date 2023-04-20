<?php
	require('dbb.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['emailed'])){
		
		$emailed = stripslashes($_REQUEST['emailed']); // removes backslashes
		$emailed = mysqli_real_escape_string($conn,$emailed); //escapes special characters in a string
		$passworded = stripslashes($_REQUEST['passworded']);
		$passworded = mysqli_real_escape_string($conn,$passworded);
		
		
		
	//Checking is user existing in the database or not
    $query = "SELECT * FROM form_register WHERE emailed='$emailed' AND passworded=PASSWORD('$passworded')";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['emailed'] = $emailed;
			echo '<script type="text/javascript"> window.open("../dashboard/index.php","_self");</script>'; // Redirect user to index.php
            }{
    echo "<script>alert('Invalid Login Details')
	location.href='.../'</script>";
   }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/logo.png" rel="icon">
<title>ECTASY | Login</title>
<meta name="description" content="Login and Register Form Html Template">
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
========================= -->
<link rel='stylesheet' href='../../css.css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
========================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="css/color-orange.css">
</head>
<body>

<!-- Preloader -->
<!-- <div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div> -->
<!-- Preloader End -->

<div id="main-wrapper" class="oxyy-login-register">
  <div class="container-fluid px-0">
    <div class="row g-0 min-vh-100"> 
      <!-- Login Form
      ========================= -->
      <div class="col-md-6 col-lg-5 col-xl-4 d-flex flex-column bg-light shadow-lg order-2 order-md-1">
        <div class="container my-auto py-5">
          <div class="row g-0">
            <div class="col-10 col-md-9 mx-auto text-center">
              <div class="logo mb-4"> <a href="../../index.php" title="Ectasy"><img src="images/logo.png" alt="Ectasy"></a> </div>
              <form id="loginForm" class="form-border" method="post">
                <div class="mb-3">
                  <input type="email" class="form-control" name="emailed" id="emailAddress" required="" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="password" name="passworded" class="form-control" id="loginPassword" required="" placeholder="Password">
                </div>
                <!-- <a class="d-block text-2 my-4" href="forgot-password-13.html">Forgot Password?</a>  -->
                <div class="d-grid my-4">
					<button class="btn btn-primary text-uppercase" type="submit" name="submit" value="Sign In">Sign In</button>
				</div>
              </form>
              <!-- <p class="text-2">New to Oxyy? <a href="register-13.html">Sign Up!</a></p> -->
            </div>
          </div>
        </div>
        <div class="container py-2">
          <p class="text-2 text-muted text-center mb-0">Copyright © 2022 <a href="../../index.php">Ectasy</a>. All Rights Reserved.</p>
        </div>
      </div>
      <!-- Login Form End --> 
      
      <!-- Welcome Text
      ========================= -->
      <div class="col-md-6 col-lg-7 col-xl-8 order-1 order-md-2">
        <div class="hero-wrap h-100">
          <div class="hero-bg hero-bg-scroll" style="background-image:url('images/happy.jpg');"></div>
          <div class="hero-content w-100 h-100 d-flex flex-column">
            <div class="row g-0 my-auto py-5">
              <div class="col-10 col-lg-9 mx-auto text-center"> 
                <!--
				<p class="text-6 d-inline-block fw-500">Welcome back!</p>
                <h1 class="text-12 fw-600 mb-2">Join the largest Designer community in the world.</h1>
				--> 
              </div>
            </div>
          </div>
        </div>
        <!-- Welcome Text End --> 
      </div>
    </div>
  </div>
</div>

<!-- Styles Switcher -->
<div id="styles-switcher" class="right">
  <h5>Color Switcher</h5>
  <hr>
  <ul class="mb-0">
    <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="#"></li>
    <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
    <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
    <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
    <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
    <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
    <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
    <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
    <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
    <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
    <li class="brown" data-bs-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
  </ul>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script> 
<script src="js/theme.js"></script>
</body>
</html>