<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

    $teacher_res = "SELECT * FROM users u
    INNER JOIN user_type ut ON ut.user_type_id = u.user_type_id
    WHERE ut.user_type_id = 2 AND u.user_status = 1 AND ut.user_type_status = 1";
    $teacher_list = mysqli_query($conn, $teacher_res);

	$course_cat_res = "SELECT * FROM course_category cc WHERE cc.status = 1";
    $course_cat_list = mysqli_query($conn, $course_cat_res);

	$msg = '';
	$course_id = $_GET['id'];
	if(!empty($course_id)){
		$course_record = mysqli_query($conn, "SELECT *, cc.id as cc_id, u.user_id
		FROM course c
		INNER JOIN course_category cc ON cc.id = c.course_category_id
		INNER JOIN users u ON u.user_id = c.teacher_id
		WHERE c.course_id = '$course_id'");
		$c_row = mysqli_fetch_assoc($course_record);
	}

    // posting data (insert)
    if(!empty($_POST)){
        $course_name = $_POST['course_name'];
        $course_category_id = $_POST['course_category_id'];
        $teacher_id = $_POST['teacher_id'];
        $description = $_POST['description'];
        $course_status = $_POST['course_status'];
		$course_week = $_POST['course_week'];
        $course_price = $_POST['course_price'];
		
        $course_name_check = mysqli_query($conn, "SELECT * FROM course c WHERE c.course_name = '$course_name' AND c.course_category_id = '$course_category_id' AND c.course_status = '$course_status' AND c.course_id != '$course_id'");
        if (mysqli_num_rows($course_name_check) > 0){
            $msg = 'This Course Already Exist.';
        }else{
			$insert = "UPDATE `course` SET `course_name`='$course_name',`course_category_id`='$course_category_id',`teacher_id`='$teacher_id',`description`='$description', `course_week` = '$course_week', `course_price` = '$course_price',`course_status`='$course_status' WHERE `course_id` = '$course_id'";
            
			if(mysqli_query($conn, $insert)){
                $msg = "Course Updated Successfully.";
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
				<h4 class="breadcrumb-title">Courses</h4>

				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Edit Course</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Course Details</h4>
						</div>
						<div class="widget-inner">
						<div class="widget-inner">
                        <?php if($msg != ''){ ?>
                            <div class='alert-success' style="padding:10px;"><?php echo $msg; ?></div><br>
                        <?php } ?>
						<a href="course_list.php" class="btn btn-primary text-light">Course List</a><br><br>

							<form class="edit-profile m-b30" action="" method="post">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course title</label>
										<div>
											<input class="form-control" type="text" name="course_name" value="<?php echo $c_row['course_name']; ?>">
										</div>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Course Total Week(s)</label>
										<div>
											<input class="form-control" type="number" name="course_week" value="<?php echo $c_row['course_week']; ?>">
										</div>
									</div>
									
									<div class="form-group text-dark teacher-dropdown col-6">
										<label class="col-form-label">Coourse Category</label>
                                        <select class="header-lang-bx" name="course_category_id" id="">
                                            <option value="0" disabled>Select Course Category</option>
                                            <?php
                                                foreach($course_cat_list as $i){ ?>
                                            	<option <?php echo $i['id']==$c_row['cc_id'] ? 'selected' : ''; ?> value="<?php echo $i['id']; ?>"><?php echo $i['name']; ?></option>
											<?php	}
                                            ?>
                                        </select>
									</div>

									<div class="form-group text-dark teacher-dropdown col-6">
										<label class="col-form-label">Teacher name</label>
                                        <select class="header-lang-bx" name="teacher_id" id="">
                                            <option value="0" disabled>Select Teacher</option>
                                            <?php
                                                foreach($teacher_list as $i){ ?>
                                            	<option <?php echo $i['user_id']==$c_row['user_id'] ? 'selected' : ''; ?> value="<?php echo $i['user_id']; ?>"><?php echo $i['user_fullname']; ?></option>
											<?php	}
                                            ?>
                                        </select>
									</div>

									<div class="form-group col-6">
										<label class="col-form-label">Course Amount</label>
										<div>
											<input class="form-control" type="text" name="course_price" value="<?php echo $c_row['course_price']; ?>">
										</div>
									</div>

									<div class="seperator"></div>
									
									<div class="col-12 m-t20">
										<div class="ml-auto m-b5">
											<h3>2. Description</h3>
										</div>
									</div>
									<div class="form-group col-12">
										<label class="col-form-label">Course description</label>
										<div>
											<textarea class="form-control" name="description"><?php echo $c_row['description']; ?></textarea>
										</div>
									</div>
									<div class="form-group col-6 mb-2">
										<div class="form-check">
											<input type="radio" class="form-check-input" name="course_status" value="1" <?php echo $c_row['course_status'] == 1 ? 'checked' : ''; ?>>Active
											<label class="form-check-label" for="radio1"></label>
										</div>
										<div class="form-check">
											<input type="radio" class="form-check-input" name="course_status" value="2" <?php echo $c_row['course_status'] == 2 ? 'checked' : ''; ?>>Inactive
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