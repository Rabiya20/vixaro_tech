<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$succ = $err = '';
	$assignment_id = $_GET['id'];
	if(!empty($_POST)){
		if(isset($_FILES['assignment_attach'])){
			$errors= array();
			$file_name = $_FILES['assignment_attach']['name'];
			$file_size =$_FILES['assignment_attach']['size'];
			$file_tmp =$_FILES['assignment_attach']['tmp_name'];
			$file_type=$_FILES['assignment_attach']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['assignment_attach']['name'])));
			
			$extensions= array("doc","docx","pdf");
			
			$datetime = date("dmYHis-");
			$filename = $datetime.$file_name;
	
			if(in_array($file_ext, $extensions)=== false){
				// error 1
				$error = 1;
				$errors[]="extension not allowed, please choose a .doc, .docx or .pdf file.";
			}
			
			if($file_size > 2097152){
				// error 2
				$error = 2;
				$errors[]='File size must be excately 2 MB';
			}
		
			if(empty($errors)==true){
				move_uploaded_file($file_tmp,"assets/assignments/".$filename);
				$success = "File Uploaded Successfully";
	
				$_id = $_SESSION['user_id'];
	
				$course_id = $_POST['course_id'];
				$assignment_title = $_POST['assignment_title'];
				$assignment_desc = $_POST['assignment_desc'];
				$assignment_due = $_POST['assignment_due'];
				$assignment_attach = $filename;
				
				$insert = "UPDATE `assignments` SET 
				`course_id`='$course_id',`assignment_title`='$assignment_title',`assignment_desc`='$assignment_desc',`assignment_due`='$assignment_due',`assignment_attach`='$assignment_attach' WHERE assignment_id = '$assignment_id'";
				if(mysqli_query($conn, $insert)){
					$succ = "Assignment Updated Successfully.";
				} else{
					// error 3
					$error = 3;
					echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
				}
			}
		}

		if($error==1){
			$err = 'Extension not allowed, please choose a .doc, .docx or .pdf file.';
		}elseif($error == 2){
			$err = 'File size must be excately 2 MB';
		}
		elseif($error==3){
			$err = 'Error occured while adding assginment, try again';
		}
	}
	$assignment_res = "SELECT a . *, c.course_name, c.course_id, u.user_id, u.user_fullname
	FROM assignments a
	INNER JOIN course c ON c.course_id = a.course_id
	INNER JOIN users u ON u.user_id = a.teacher_id
	WHERE a.assignment_id = '$assignment_id'";
    $assignment_list = mysqli_query($conn, $assignment_res);
	$assignment_row = mysqli_fetch_assoc($assignment_list);

    $teacher_res = "SELECT * FROM users u
    INNER JOIN user_type ut ON ut.user_type_id = u.user_type_id
    WHERE ut.user_type_id = 2 AND u.user_status = 1 AND ut.user_type_status = 1";
    $teacher_list = mysqli_query($conn, $teacher_res);

	$teacher_id = $_SESSION['user_id'];
	$course_res = "SELECT * FROM course c WHERE c.teacher_id = '$teacher_id' AND course_status = 1";
    $course_list = mysqli_query($conn, $course_res);
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

							<form class="edit-profile m-b30" action="" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Assignment title</label>
										<div>
											<input class="form-control" type="text" name="assignment_title" value="<?php echo $assignment_row['assignment_title']; ?>">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Assignment Due Date</label>
										<div>
											<input class="form-control" type="date" name="assignment_due" value="<?php echo $assignment_row['assignment_due']; ?>">
										</div>
									</div>
									
									<div class="form-group text-dark teacher-dropdown col-6">
										<label class="col-form-label">For Course</label>
										<select class="header-lang-bx" name="course_id" id="">
											<option value="0" disabled selected>Select Course</option>
											<?php
												foreach($course_list as $i){ ?>
												<option <?php echo $assignment_row['course_id'] == $i['course_id'] ? 'selected' : ''; ?> value="<?php echo $i['course_id']; ?>"><?php echo $i['course_name']; ?></option>
											<?php	}
											?>
										</select>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Assignment Attachment</label>
										<div>
											<input class="form-control" accept=".pdf, .doc, .docx" type="file" name="assignment_attach" value="<?php echo $assignment_row['assignment_attach']; ?>">
										</div>
										<p><?php echo $assignment_row['assignment_attach']; ?></p>
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
											<textarea class="form-control" name="assignment_desc"><?php echo $assignment_row['assignment_desc']; ?> </textarea>
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