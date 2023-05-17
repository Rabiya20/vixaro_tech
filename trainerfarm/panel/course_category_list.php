<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$course_category_res = "SELECT *
	FROM course_category cc
	ORDER BY cc.id";

    $course_category_list = mysqli_query($conn, $course_category_res);
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
					<li>Course Category List</li>
				</ul>
			</div>

			<?php if($msg != ''){ ?>
				<div class='alert-success' style="padding:10px;"><?php echo $msg; ?></div>
			<?php } ?>

            <a href="course_category_add.php" class="btn btn-primary text-light">Add Course Category</a><br><br>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Course Category Name</th>
						<th>Provider</th>
						<th>Course Status</th>
						<th>Action</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($course_category_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['provided_by']; ?></td>
						<td><?php echo $row['status']==1 ? 'Active' : 'Inactive'; ?></td>
						<td><a href="course_category_edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>