<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
	$course_id = $_GET['id'];
	$course_res = "SELECT c . * , cc . * , u . * 
	FROM course c
	INNER JOIN course_category cc ON cc.id = c.course_category_id
	INNER JOIN users u ON u.user_id = c.teacher_id
	WHERE c.course_id = '$course_id'";

    $course_list = mysqli_query($conn, $course_res);

?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid mb-5">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Course Management</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>View My Course</li>
				</ul>
			</div>
			<?php $row = mysqli_fetch_assoc($course_list); ?>
			<h1 class="text-light text-center bg-secondary"><?php echo $row['course_name']; ?></h1>
			<h4 class="text-primary">Details:</h4>
			<p><?php echo $row['description']; ?></p>
			<h4 class="text-primary">Week</h4>
			<p><?php echo $row['course_week']; ?></p>
			<h4 class="text-primary">Lecturer/Instructor:</h4>
			<p><?php echo $row['user_fullname']; ?></p>
		</div>
	</main>
<?php include("includes/footer.php"); ?>