<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$course_res = "SELECT c . * , cc . * , u . * 
	FROM course c
	LEFT JOIN course_category cc ON cc.id = c.course_category_id
	LEFT JOIN users u ON u.user_id = c.teacher_id
	ORDER BY cc.id";

    $course_list = mysqli_query($conn, $course_res);

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
						<th>Course Name</th>
						<th>Course Category</th>
						<th>Teacher</th>
						<th>Course Status</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($course_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['course_name']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['user_fullname']; ?></td>
						<td><?php echo $row['course_status']==1 ? 'Active' : 'Inactive'; ?></td>
						<?php if($_SESSION['user_type_id'] == 3 && $_SESSION['user_type_name'] == 'student'){ ?>
							<td><a href="course_details.php?id=<?php echo $row['course_id']; ?>">View Details</a></td>
						<?php } else{ ?>
							<td><a href="course_edit.php?id=<?php echo $row['course_id']; ?>">Edit</a></td>
						<?php } ?>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>