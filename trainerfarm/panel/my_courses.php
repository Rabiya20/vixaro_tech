<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	if($_SESSION['user_type_id'] == 2){
		$course_res = "SELECT c . * , cc . * , u . * 
		FROM course c
		LEFT JOIN course_category cc ON cc.id = c.course_category_id
		LEFT JOIN users u ON u.user_id = c.teacher_id
		WHERE u.user_id = '".$_SESSION['user_id']."' AND c.course_status = '1'
		ORDER BY cc.id";
	}
	elseif($_SESSION['user_type_id'] == 3){
		$course_res = "SELECT sc.* , c.course_name, cc.name
		FROM student_course sc
		LEFT JOIN course c ON c.course_id = sc.course_id
		LEFT JOIN course_category cc ON cc.id = c.course_category_id
		LEFT JOIN users u ON u.user_id = sc.student_id
		WHERE u.user_id = '".$_SESSION['user_id']."' AND c.course_status = '1'
		ORDER BY joined_at";
	}
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

			<?php if($_SESSION['user_type_id'] != 3 && $_SESSION['user_type_name'] != 'student'){ ?>
            	<a href="course_add.php" class="btn btn-primary text-light">Add Course</a><br><br>
			<?php } ?>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Course Name</th>
						<th>Course Category</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1; //print_r($course_list);
					while($row = mysqli_fetch_assoc($course_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['course_name']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<?php if($_SESSION['user_type_id'] == 3 && $_SESSION['user_type_name'] == 'student'){ ?>
							<td><a href="course_view.php?id=<?php echo $row['course_id']; ?>">View Course</a></td>
						<?php } else{ ?>
							<td><a href="course_edit.php?id=<?php echo $row['course_id']; ?>">Edit Course</a></td>
						<?php } ?>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
			<?php if(mysqli_num_rows($course_list) == 0){?>
				<div class="text-center mt-5">
					<h1 class="text-info">You haven't registered any course yet</h1>
					<h4>Look at our courses</h4>
					<a href="../certifications.php" class="btn btn-primary">Explore Courses</a>
				</div>
			<?php }
			?>
		</div>
	</main>
<?php include("includes/footer.php"); ?>