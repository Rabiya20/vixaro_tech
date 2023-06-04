<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

    $teacher_res = "SELECT * FROM users u
    INNER JOIN user_type ut ON ut.user_type_id = u.user_type_id
    WHERE ut.user_type_id = 2 AND u.user_status = 1 AND ut.user_type_status = 1";
    $teacher_list = mysqli_query($conn, $teacher_res);

	$teacher_id = $_SESSION['user_id'];
	$course_res = "SELECT * FROM course c WHERE c.teacher_id = '$teacher_id' AND course_status = 1";
    $course_list = mysqli_query($conn, $course_res);

	$err = '';
	$succ = '';

	$error = $_GET['err'];
	$success = $_GET['succ'];

	if($error==1){
		$err = 'Extension not allowed, please choose a .doc, .docx or .pdf file.';
	}elseif($error == 2){
		$err = 'File size must be excately 2 MB';
	}
	elseif($error==3){
		$err = 'Error occured while adding assginment, try again';
	}
	elseif($error==4){
		$err = 'Error while uploading file, try again';
	}

	if($success==1){
		$succ = 'Assignment Added Successfully.';
	}
?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Assignment Management</h4>

				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Add New Assignment</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add New Assignment</h4>
						</div>
						<div class="widget-inner">	
						<?php if($succ != ''){ ?>
                            <div class='alert-success' style="padding:10px;"><?php echo $succ; ?></div><br>
                        <?php } ?>
						
						<?php if($err != ''){ ?>
                            <div class='alert-danger' style="padding:10px;"><?php echo $err; ?></div><br>
                        <?php } ?>

							<form class="edit-profile m-b30" action="assignment_upload.php" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Assignment title</label>
										<div>
											<input class="form-control" type="text" name="assignment_title" required>
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Assignment Due Date</label>
										<div>
											<input class="form-control" type="date" name="assignment_due" required>
										</div>
									</div>
									
									<div class="form-group text-dark teacher-dropdown col-6">
										<label class="col-form-label">For Course</label>
										<select class="header-lang-bx" name="course_id" id="" required>
											<option value="0" disabled selected>Select Course</option>
											<?php
												foreach($course_list as $i){ ?>
												<option value="<?php echo $i['course_id']; ?>"><?php echo $i['course_name']; ?></option>
											<?php	}
											?>
										</select>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Assignment Attachment</label>
										<div>
											<input class="form-control" accept=".pdf, .doc, .docx" type="file" name="assignment_attach">
											<span class="text-danger">file should be .pdf, .doc or .docx and less than 2MB</span>
										</div>
									</div>

									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Assignment Description</label>
										<div>
											<textarea class="form-control" name="assignment_desc"> </textarea>
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