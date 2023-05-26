<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
	$user_id = $_GET['id'];
	if(!empty($user_id)){
		$user_record = mysqli_query($conn, "SELECT * FROM users u WHERE u.user_id = '$user_id' AND u.user_type_id = '2'");
		$u_row = mysqli_fetch_assoc($user_record);
	}

	if(!empty($_POST)){
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $user_fullname = $_POST['user_fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $linkedin = $_POST['linkedin'];
        $user_status = $_POST['user_status'];

        $user_name_check = mysqli_query($conn, "SELECT * FROM users u WHERE u.user_id != '$user_id' AND u.user_name = '$user_name' AND u.user_type_id = '2'");
        if (mysqli_num_rows($user_name_check) > 0){
            $msg = 'This Username Already Exist.';
        }else{
            $insert = "UPDATE `users` SET `user_name` = '$user_name',`user_password` = '$user_password',`user_fullname`=  '$user_fullname',`phone` = '$phone',`email` = '$email',`linkedin`='$linkedin',`country`='$country',`city`='$city', `user_status`='$user_status' WHERE `user_id` = '$user_id'";
            if(mysqli_query($conn, $insert)){
                $msg = "Teacher Updated Successfully.";
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
				<h4 class="breadcrumb-title">Teacher Management</h4>

				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Edit Teacher</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Teacher Profile</h4>
						</div>
						<div class="widget-inner">
                        <?php if($msg != ''){ ?>
                            <div class='alert-success' style="padding:10px;"><?php echo $msg; ?></div><br>
                        <?php } ?>
						<a href="teacher_list.php" class="btn btn-primary text-light">Teacher List</a><br><br>

							<form class="edit-profile m-b30" action="" method="post">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic Info</h3>
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Full Name</label>
										<div>
											<input class="form-control" type="text" name="user_fullname" value="<?php echo $u_row['user_fullname']; ?>">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Userame</label>
										<div>
											<input class="form-control" type="text" name="user_name" value="<?php echo $u_row['user_name']; ?>" <?php echo !empty($u_row['user_name']) ? 'readonly' : ''; ?>>
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Phone/Cell</label>
										<div>
											<input class="form-control" type="tel" name="phone" value="<?php echo $u_row['phone']; ?>">
										</div>
									</div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Login Info</h3>
										</div>
									</div>
									
									<div class="form-group col-6">
										<label class="col-form-label">Teacher Email</label>
										<div>
											<input class="form-control" type="email" name="email" value="<?php echo $u_row['email']; ?>">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Password</label>
										<div>
											<input class="form-control" type="text" name="user_password" value="<?php echo $u_row['user_password']; ?>">
										</div>
									</div>

									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>3. Social Links</h3>
										</div>
									</div>
									
									<div class="form-group col-6">
										<label class="col-form-label">LinkedIn URL</label>
										<div>
											<input class="form-control" type="text" name="linkedin" value="<?php echo $u_row['linkedin']; ?>">
										</div>
									</div>

									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>4. Address</h3>
										</div>
									</div>
									
									<div class="form-group col-6">
										<label class="col-form-label">Country</label>
										<div>
											<input class="form-control" type="text" name="country" value="<?php echo $u_row['country']; ?>">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">City</label>
										<div>
											<input class="form-control" type="text" name="city" value="<?php echo $u_row['city']; ?>">
										</div>
									</div>

									<div class="form-group col-6 mb-2">
										<div class="form-check">
											<input type="radio" class="form-check-input" name="user_status" value="1" <?php echo $u_row['user_status'] == 1 ? 'checked' : ''; ?>>Active
											<label class="form-check-label" for="radio1"></label>
										</div>
										<div class="form-check">
											<input type="radio" class="form-check-input" name="user_status" value="2" <?php echo $u_row['user_status'] == 2 ? 'checked' : ''; ?>>Inactive
											<label class="form-check-label" for="radio2"></label>
										</div>
									</div>

									<div class="col-12">
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