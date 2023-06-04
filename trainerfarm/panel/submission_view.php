<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
	$submission_id = $_GET['id'];
	$submission_res = "SELECT s.*, a.assignment_title, a.assignment_desc, a.assignment_attach, c.course_name, u.user_fullname
	FROM submissions s
	INNER JOIN assignments a ON a.assignment_id = s.assignment_id
	INNER JOIN course c ON c.course_id = a.course_id
	INNER JOIN users u ON u.user_id = s.student_id AND u.user_type_id = '3'
	WHERE s.submission_id = '$submission_id'
	GROUP BY s.submission_id";

    $submission_list = mysqli_query($conn, $submission_res);
	$row = mysqli_fetch_assoc($submission_list);
?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid mb-5">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Assignment Management</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>View Assignment</li>
				</ul>
			</div>
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<tr>
					<th>Title</th>
					<td><?php echo $row['assignment_title']; ?></td>
				</tr>
				<tr>
					<th>Course</th>
					<td><?php echo $row['course_name']; ?></td>
				</tr>
				<tr>
					<th>Submitted By</th>
					<td><?php echo $row['user_fullname']; ?></td>
				</tr>
				<tr>
					<th>Assignment Description</th>
					<td><?php echo $row['assignment_desc']; ?></td>
				</tr>
				<tr>
					<th>Submission Date</th>
					<td><?php echo date("d-M-Y", strtotime($row['submission_date'])); ?></td>
				</tr>
				<tr>
					<th>Assignment Attachment</th>
					<?php if(!empty($row['assignment_attach'])){ ?>
					<td><a href="assets/assignments/<?php echo $row['assignment_attach']; ?>" download>Download</a></td>
					<?php } else {?>
					<td>No Attachment Found!</td>
					<?php } ?>
				</tr>
				<tr>
					<th>Submission Attachment</th>
					<td><a href="assets/submissions/<?php echo $row['submission_attach']; ?>" download>Download</a></td>
				</tr>
			</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>