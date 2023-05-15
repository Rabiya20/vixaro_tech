<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$student_res = "SELECT u . * , sc . *
	FROM users u
	LEFT JOIN student_course sc ON sc.student_id = u.user_id
	LEFT JOIN course c ON sc.course_id = c.course_id
	WHERE u.user_status =1
	AND sc.status =1";

    $student_list = mysqli_query($conn, $student_res);

?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Student Management</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Students List</li>
				</ul>
			</div>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Student Name</th>
						<th>Student Joined Date</th>
						<th>Student Enrolled Course</th>
						<th>Student Status</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($student_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['user_fullname']; ?></td>
						<td><?php echo date("d M Y", strtotime($row['joined_at'])); ?></td>
						<td><?php echo $row['course_id']; ?></td>
						<td><?php echo $row['current_status']; ?></td>
						<td><a href="students_add.php?id=<?php echo $row['student_id']; ?>">Edit</a></td>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>