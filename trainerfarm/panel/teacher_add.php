<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
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

        $user_name_check = mysqli_query($conn, "SELECT * FROM users u WHERE u.user_name = '$user_name' AND u.user_type_id = '2'");
        if (mysqli_num_rows($user_name_check) > 0){
            $msg = 'This Username Already Exist.';
        }else{
            $insert = "INSERT INTO `users` (`user_name`, `user_password`, `user_fullname`, `phone`, `email`, `linkedin`, `country`, `city`, `user_type_id`, `user_status`)
			VALUES ('$user_name', '$user_password', '$user_fullname', '$phone', '$email', '$linkedin', '$country', '$city', '2', '1')";
            if(mysqli_query($conn, $insert)){
                $msg = "Teacher Inserted Successfully.";
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
					<li>Add New Teacher</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add New Teacher</h4>
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
											<input class="form-control" type="text" name="user_fullname" value="">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Userame</label>
										<div>
											<input class="form-control" type="text" name="user_name" value="">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Phone/Cell</label>
										<div>
											<input class="form-control" type="text" name="phone" value="">
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
											<input class="form-control" type="text" name="email" value="">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Teacher Password</label>
										<div>
											<input class="form-control" type="text" name="user_password" value="">
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
											<input class="form-control" type="text" name="linkedin" value="">
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
											<input class="form-control" type="text" name="country" value="">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">City</label>
										<div>
											<input class="form-control" type="text" name="city" value="">
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