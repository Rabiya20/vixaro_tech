<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
    // posting data (insert)
    if(!empty($_POST)){
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $user_fullname = $_POST['user_fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $linkedin = $_POST['linkedin'];

        $user_name_check = mysqli_query($conn, "SELECT * FROM users u WHERE u.user_name = '$user_name' AND u.user_type_id = '3'");
        if (mysqli_num_rows($user_name_check) > 0){
            $msg = 'This Username Already Exist.';
        }else{
            $insert = "INSERT INTO `users` (`user_name`, `user_password`, `user_fullname`, `phone`, `email`, `linkedin`, `country`, `city`, `user_type_id`, `user_status`)
			VALUES ('$user_name', '$user_password', '$user_fullname', '$phone', '$email', '$linkedin', '$country', '$city', '3', '1')";
            if(mysqli_query($conn, $insert)){
                $msg = "Student Inserted Successfully.";
            } else{
                echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
            }
        }
    }
?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Student Management</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Student</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Student Profile</h4>
						</div>
						<div class="widget-inner">
						<?php if($msg != ''){ ?>
                            <div class='alert-success' style="padding:10px;"><?php echo $msg; ?></div><br>
                        <?php } ?>
						<a href="students_list.php" class="btn btn-primary text-light">Students List</a><br><br>

							<form class="edit-profile m-b30" action="" method="post">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input name="user_fullname" class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-7">
											<input name="user_name" class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input name="phone" class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email Address</label>
										<div class="col-sm-7">
											<input name="email" class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-7">
											<input name="user_password" class="form-control" type="text" value="">
										</div>
									</div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. Address</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Country</label>
										<div class="col-sm-7">
											<input name="country" class="form-control" type="text" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">City</label>
										<div class="col-sm-7">
											<input name="city" class="form-control" type="text" value="">
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3 class="m-form__section">3. Social Links</h3>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Linkedin</label>
										<div class="col-sm-7">
											<input name="linkedin" class="form-control" type="text" value="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
									</div>
									<div class="col-sm-7">
										<button type="submit" class="btn"><span class="ttr-icon"><i class="ti-save"></i></span> Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include("includes/footer.php"); ?>