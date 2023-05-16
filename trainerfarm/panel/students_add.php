<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$student_id = $_GET['id'];
	$student_res = "SELECT u . * , sc . *
	FROM users u
	LEFT JOIN student_course sc ON sc.student_id = u.user_id
	LEFT JOIN course c ON sc.course_id = c.course_id
	WHERE u.user_status =1
	AND sc.status =1 AND u.user_id = $student_id";

    $student_data = mysqli_query($conn, $student_res);
	$row = mysqli_fetch_assoc($student_data);
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
							<form class="edit-profile m-b30">
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php if(!empty($row)){ echo $row['user_fullname'];} else{ echo '';} ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php if(!empty($row)){ echo $row['phone'];} else{ echo '';} ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email Address</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php if(!empty($row)){ echo $row['email'];} else{ echo '';} ?>">
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
											<input class="form-control" type="text" value="<?php if(!empty($row)){ echo $row['country'];} else{ echo '';} ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">City</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" value="<?php if(!empty($row)){ echo $row['city'];} else{ echo '';} ?>">
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
											<input class="form-control" type="text" value="<?php if(!empty($row)){ echo $row['linkedin'];} else{ echo '';} ?>">
										</div>
									</div>

									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3 class="m-form__section">4. Courses</h3>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Applied</label>
									</div>
									
									
								</div>
								<div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-7">
												<button type="reset" class="btn">Save changes</button>
												<button type="reset" class="btn-secondry">Cancel</button>
											</div>
										</div>
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
	<script>
		function newMenuItem() {
    var newElem = $('tr.list-item').first().clone();
    newElem.find('input').val('');
    newElem.appendTo('table#item-add');
}
if ($("table#item-add").is('*')) {
    $('.add-item').on('click', function (e) {
        e.preventDefault();
        newMenuItem();
    });
    $(document).on("click", "#item-add .delete", function (e) {
        e.preventDefault();
        $(this).parent().parent().parent().parent().remove();
    });
}
	</script>