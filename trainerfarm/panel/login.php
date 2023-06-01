<?php 
session_start ();
if(isset($_SESSION["login"])) header("location:index.php"); 
include("config.php"); 
?>
<!doctype html>
<html lang="en">
  <head>
	<link rel="icon" href="assets/images/logo/tf-icon.ico" type="image/tf-icon.ico" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/panel/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/panel/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/panel/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/panel/css/style.css">

    <title>Trainerfarm | Panel</title>
  </head>
  <body>  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/panel/images/login-bg.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <a href="../index.php"><img style="width:120px;" src="assets/panel/images/TF.png" alt="logo"></a>
              <br><br>
              <h4 style="color: var(--blue-primary);" class="text-center">Sign In</h4>
            </div>

            <form action="loginprocess.php" method="POST">
              <div class="form-group first mb-4">
                <label for="username">Username <b class="text-danger">*</b></label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password <b class="text-danger">*</b></label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password?</a></span> 
              </div>

              <?php if(isset($_REQUEST["err"]) && $_REQUEST["err"] == 1) $msg="Invalid Username or Password"; ?>
              <?php if(isset($_REQUEST["err"]) && $_REQUEST["err"] == 2) $msg="Fields can't be empty"; ?>
              <p style="color:red;"><b>
                <?php if(isset($msg)){ echo $msg; } ?>
              </b></p>

              <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">

              <br>
              <p class="text-center">New Here?</p>
              <a href="register.php" class="btn btn-block btn-primary text-light" style="text-decoration: none; padding-top: 12px;">Register</a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="assets/panel/js/jquery-3.3.1.min.js"></script>
    <script src="assets/panel/js/popper.min.js"></script>
    <script src="assets/panel/js/bootstrap.min.js"></script>
    <script src="assets/panel/js/main.js"></script>
  </body>
</html>