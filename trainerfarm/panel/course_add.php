<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

    $teacher_res = "SELECT * FROM users u
    INNER JOIN user_type ut ON ut.user_type_id = u.user_type_id
     WHERE ut.user_type_id = 2 AND u.user_status = 1 AND ut.user_type_status = 1";
    $teacher_list = mysqli_query($conn, $teacher_res);

	$course_cat_res = "SELECT * FROM course_category cc WHERE c.status = 1";
    $course_cat_list = mysqli_query($conn, $course_cat_res);
?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Courses</h4>
<?php 
// echo '<pre>'; 
// foreach($teacher_list as $i){
// print_r($i);
// echo '<br>';
// }
 ?>

				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Add New Course</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add New Course</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Course title</label>
										<div>
											<input class="form-control" type="text" value="">
										</div>
									</div>
									
									<div class="form-group text-dark teacher-dropdown col-6">
										<label class="col-form-label">Coourse Category</label>
                                        <select class="header-lang-bx" name="course_category_id" id="">
                                            <option value="">Select Course Category</option>
                                            <?php
                                                foreach($course_cat_list as $i){ ?>
                                            	<option value="<?php echo $i['id']; ?>"><?php echo $i['name']; ?></option>
											<?php	}
                                            ?>
                                        </select>
									</div>

									<div class="form-group text-dark teacher-dropdown col-6">
										<label class="col-form-label">Teacher name</label>
                                        <select class="header-lang-bx" name="teacher_id" id="">
                                            <option value="">Select Teacher</option>
                                            <?php
                                                foreach($teacher_list as $i){ ?>
                                            	<option value="<?php echo $i['user_id']; ?>"><?php echo $i['user_fullname']; ?></option>
											<?php	}
                                            ?>
                                        </select>
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
											<textarea class="form-control"> </textarea>
										</div>
									</div>
									<div class="col-12">
										<button type="reset" class="btn"><span class="ttr-icon"><i class="ti-save"></i></span> Save</button>
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