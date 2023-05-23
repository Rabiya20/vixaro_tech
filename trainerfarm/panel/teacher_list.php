<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$teacher_res = "SELECT u . * 
	FROM users u
	WHERE u.user_type_id = 2
	ORDER BY u.user_fullname";

    $teacher_list = mysqli_query($conn, $teacher_res);

?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Teacher Management</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Teachers List</li>
				</ul>
			</div>

            <a href="teacher_add.php" class="btn btn-primary text-light">Add Teacher</a><br><br>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Teacher Name</th>
						<th>Teacher Email</th>
						<th>Teacher Username</th>
						<th>Phone No.</th>
						<th>LinkedIn Acc.</th>
						<th>Teacher Status</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($teacher_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['user_fullname']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['user_name']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['linkedin']; ?></td>
						<td><?php echo $row['user_status']==1 ? 'Active' : 'Inactive'; ?></td>
						<td><a href="teacher_edit.php?id=<?php echo $row['user_id']; ?>">Edit</a></td>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>