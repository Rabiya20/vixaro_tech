<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$submission_res = "SELECT s . * , a.assignment_title, c.course_name, u.user_fullname
	FROM submissions s

	LEFT JOIN assignments a ON a.assignment_id = s.assignment_id
	LEFT JOIN course c ON c.course_id = a.course_id
	LEFT JOIN users u ON u.user_id = s.student_id AND u.user_type_id = '3'
	ORDER BY s.submission_date DESC";

    $submission_list = mysqli_query($conn, $submission_res);

?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Assignment Submissions</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Submissions List</li>
				</ul>
			</div>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Course</th>
						<th>Assignment Title</th>
						<th>Student Name</th>
						<th>Assignment Submited Date</th>
						<th>Status</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($submission_list)){ 
						if(empty($row['submission_id'])){
							$date = '';
							$status = '<span class="text-danger">Not Submitted</span>';
						}else{
							$date = date("d-M-Y", strtotime($row['submission_date']));
							$status = '<span class="text-success">Submitted</span>';
						} ?>				
					<tr>
						
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['course_name']; ?></td>
						<td><?php echo $row['assignment_title']; ?></td>
						<td><?php echo $row['user_fullname']; ?></td>
						<td><?php echo $date; ?></td>
						<td><?php echo $status; ?></td>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>