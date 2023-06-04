<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$msg = '';
	$assignment_id = $_GET['id'];
	$assignment_res = "SELECT a . *, s.submission_id, c.course_name, c.course_id, u.user_id, u.user_fullname
	FROM assignments a
	INNER JOIN course c ON c.course_id = a.course_id
	INNER JOIN users u ON u.user_id = a.teacher_id
	LEFT JOIN submissions s ON s.assignment_id = a.assignment_id
	WHERE a.assignment_id = '$assignment_id'";

    $assignment_list = mysqli_query($conn, $assignment_res);
	$row = mysqli_fetch_assoc($assignment_list);

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

	if($success==1){
		$succ = 'Assignment Submitted Successfully.';
	}
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

			<?php if($succ != ''){ ?>
				<div class='alert-success' style="padding:10px;"><?php echo $succ; ?></div><br>
			<?php } ?>
			
			<?php if($err != ''){ ?>
				<div class='alert-danger' style="padding:10px;"><?php echo $err; ?></div><br>
			<?php } ?>

			<form action="assignment_submit.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="assignment_id" id="" value="<?php echo $assignment_id; ?>">
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
						<?php if(!empty($row['assignment_attach'])){ ?>
						<td><a href="assets/assignments/<?php echo $row['assignment_attach']; ?>" download>Download</a></td>
						<?php } else {?>
						<td>No Attachment Found!</td>
						<?php } ?>
					</tr>
					<tr>
						<th>Attach Your Submission</th>
						<td><input type="file" accept=".pdf, .doc, .docx" name="submission_attach" id="" required>
						<?php if(!empty($row['submission_id'])){ echo 'Assignment Already Submitted'; }else{ echo '<span class="text-danger">file should be .pdf, .doc or .docx and less than 2MB</span>'; } ?>
						</td>
					</tr>
				</table>
				<input type="submit" value="Submit" class="btn btn-primary" <?php echo empty($row['submission_id']) ? '' : 'disabled'; ?>>
			</form>
		</div>
	</main>
<?php include("includes/footer.php"); ?>