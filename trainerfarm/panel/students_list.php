<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$student_res = "SELECT u . * , sc . *, COUNT(sc.course_id) as courses
	FROM users u
	LEFT JOIN student_course sc ON sc.student_id = u.user_id
	LEFT JOIN course c ON sc.course_id = c.course_id
	WHERE u.user_type_id = '3'
	GROUP BY u.user_id";

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
            <a href="students_add.php" class="btn btn-primary text-light">Add Student</a><br><br>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Student Name</th>
						<th>Student Joined Date</th>
						<th>Student Enrolled Courses</th>
						<th>Student Status</th>
						<th>Student Active</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($student_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['user_fullname']; ?></td>
						<td><?php echo !empty($row['joined_at']) ? date("d M Y", strtotime($row['joined_at'])) : ''; ?></td>
						<td><?php echo $row['courses']; ?></td>
						<td><?php echo !empty($row['current_status']) ? $row['current_status'] : 'Registered'; ?></td>
						<td><?php echo $row['user_status']==1 ? 'Active' : 'Inactive'; ?></td>
						<td><a href="students_edit.php?id=<?php echo $row['user_id']; ?>">Edit</a></td>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>