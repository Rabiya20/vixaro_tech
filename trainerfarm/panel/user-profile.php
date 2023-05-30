<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = $err = '';
	$user_id = $_SESSION['user_id'];
	if(!empty($user_id)){
		$user_record = mysqli_query($conn, "SELECT * FROM users u WHERE u.user_id = '$user_id'");
		$u_row = mysqli_fetch_assoc($user_record);
	}

	if(!empty($_POST)){
		$old_pass = $u_row['user_password'];
		// echo '<pre>'; print_r($_POST);
		if($old_pass === $_POST['current_pass']){
			$user_password = $_POST['user_password'];
			$user_fullname = $_POST['user_fullname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$country = $_POST['country'];
			$city = $_POST['city'];
			$linkedin = $_POST['linkedin'];			
			
			$insert = "UPDATE `users` SET `user_password` = '$user_password',`user_fullname`=  '$user_fullname',`phone` = '$phone',`email` = '$email',`linkedin`='$linkedin',`country`='$country',`city`='$city' WHERE `user_id` = '$user_id'";

			if(mysqli_query($conn, $insert)){
				$msg .= "Profile Updated Successfully.";
				echo $msg;
				// exit($insert);
			} else{
				echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
				exit($insert);
			}
		}
		else{
			$err .= "Current password doesn't match.";
			// exit($err);
		}
    }
?>
<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">My Profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>My Profile</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Edit My Profile</h4>
						</div>
						<div class="widget-inner">
							<?php if($msg != ''){ ?>
								<div class='alert alert-success alert-dismissible mt-3' style="padding:10px;">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php echo $msg; ?>
								</div>
							<?php } ?>
							<?php if($err != ''){ ?>
								<div class='alert alert-danger alert-dismissible mt-3' style="padding:10px;">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<?php echo $err; ?>
								</div>
							<?php } ?>
							<form class="edit-profile m-b30" method="POST">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
										<input name="user_fullname" class="form-control" type="text" value="<?php echo $u_row['user_fullname']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Designation</label>
										<div class="col-sm-7">
											<input name="user_name" readonly class="form-control" type="text" value="<?php echo $u_row['user_name']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input name="phone" class="form-control" type="tel" value="<?php echo $u_row['phone']; ?>">
										</div>
									</div>
									
									<div class="seperator"></div>
									
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. Address</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Country</label>
										<div class="col-sm-7">
											<input name="country" class="form-control" type="text" value="<?php echo $u_row['country']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">City</label>
										<div class="col-sm-7">
											<input name="city" class="form-control" type="text" value="<?php echo $u_row['city']; ?>">
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
											<input name="linkedin" class="form-control" type="text" value="<?php echo $u_row['linkedin']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email Address</label>
										<div class="col-sm-7">
											<input name="email" class="form-control" type="email" value="<?php echo $u_row['email']; ?>">
										</div>
									</div>
								</div>
								
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>4. Password</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Current Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="" name="current_pass">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">New Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" value="" name="user_password">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2">
									</div>
									<div class="col-sm-7">
										<button type="submit" class="btn btn-primary">Save changes</button>
										<button type="reset" class="btn-secondry">Cancel</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include('includes/footer.php'); ?>