<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
	$assignment_id = $_GET['id'];
	$assignment_res = "SELECT a . *, c.course_name, c.course_id, u.user_id, u.user_fullname
	FROM assignments a
	INNER JOIN course c ON c.course_id = a.course_id
	INNER JOIN users u ON u.user_id = a.teacher_id
	WHERE a.assignment_id = '$assignment_id'";

    $assignment_list = mysqli_query($conn, $assignment_res);
	$row = mysqli_fetch_assoc($assignment_list);
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

			<form action="assignment_submit.php" method="post">
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
						<th>Given By</th>
						<td><?php echo $row['user_fullname']; ?></td>
					</tr>
					<tr>
						<th>Description</th>
						<td><?php echo $row['assignment_desc']; ?></td>
					</tr>
					<tr>
						<th>Due Date</th>
						<td><?php echo date("d-M-Y", strtotime($row['assignment_due'])); ?></td>
					</tr>
					<tr>
						<th>Assignment Attachment</th>
						<td><a href="<?php echo $row['assignment_attach']; ?>" download>Download</a></td>
					</tr>
					<tr>
						<th>Attach Your Submission</th>
						<td><input type="file" accept=".pdf, .doc, .docx" name="submit_attach" id=""></td>
					</tr>
				</table>
				<input type="submit" value="Submit" class="btn btn-primary">
			</form>
		</div>
	</main>
<?php include("includes/footer.php"); ?>