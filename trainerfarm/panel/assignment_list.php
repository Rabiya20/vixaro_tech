<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$assignment_res = "SELECT a . * , c.course_name, c.course_id, u.user_id, u.user_fullname
	FROM assignments a
	LEFT JOIN course c ON c.course_id = a.course_id
	LEFT JOIN users u ON u.user_id = a.teacher_id";

    $assignment_list = mysqli_query($conn, $assignment_res);

?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Course Management</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Courses List</li>
				</ul>
			</div>

            <a href="course_add.php" class="btn btn-primary text-light">Add Course</a><br><br>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Course</th>
						<th>Teacher Name</th>
						<th>Assignment Title</th>
						<th>Assignment Due Date</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($assignment_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['course_name']; ?></td>
						<td><?php echo $row['user_fullname']; ?></td>
						<td><?php echo $row['assignment_title']; ?></td>
						<td><?php echo date("d-m-Y", strtotime($row['assignment_due'])); ?></td>
						<?php if($_SESSION['user_type_id'] == 3 && $_SESSION['user_type_name'] == 'student'){ ?>
							<td><a href="assignment_view.php?id=<?php echo $row['assignment_id']; ?>">View Details</a></td>
						<?php } else{ ?>
							<td><a href="assignment_edit.php?id=<?php echo $row['assignment_id']; ?>">Edit</a></td>
						<?php } ?>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>