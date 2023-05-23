<?php 
session_start ();
if(isset($_SESSION["login"])) header("location:index.php"); 
include("config.php"); 
?>
<!doctype html>
<html lang="en">
  <head>
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
                            <h4 style="color: var(--blue-primary);" class="text-center">Register as a Student</h4>
                            </div>

                            <?php if(isset($_REQUEST["err"])){
                                $msg = '';
                                if($_REQUEST["err"] == 1) $msg .= 'Username shouldn\'t contain space or any special charater'; 
                                if($_REQUEST["err"] == 2) $msg .= 'This Username isn\'t available'; 
                            }?>

                            <?php if(isset($_REQUEST["suc"])){
                                $succ = '';
                                if($_REQUEST["suc"] == 1) $succ .= 'Registered Successfully.'; 
                                $succ .= '<br>You can login to your account'; 
                            }?>


                            <p style="color:red;"><b>
                                <?php if(isset($msg)){ echo $msg; } ?>
                            </b></p>

                            <p class="text-success"><b>
                                <?php if(isset($succ)){ echo $succ; } ?>
                            </b></p>

                            <form action="registerprocess.php" method="POST">

                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group mb-4">
                                        <label for="user_fullname">Full Name</label>
                                        <input type="text" class="form-control" id="user_fullname" name="user_fullname">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="user_name">Username</label>
                                        <input type="text" class="form-control" id="user_name" name="user_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="user_password">Password</label>
                                        <input type="password" class="form-control" id="user_password" name="user_password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="phone">Phone (optional)</label>
                                        <input type="tell" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label for="linkedin">LinkedIn Account URL (optional)</label>
                                        <input type="url" class="form-control" id="linkedin" name="linkedin">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" name="submit" value="Register" class="btn btn-block btn-primary">

                            <br>
                            <p class="text-center">Already have an account?</p>
                            <a href="login.php" class="btn btn-block btn-primary text-light" style="text-decoration: none; padding-top: 12px;">Login Here</a>
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