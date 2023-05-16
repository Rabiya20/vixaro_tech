<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

    $msg = '';
    // posting data (insert)
    if(!empty($_POST)){
        $name = $_POST['name'];
        $provided_by = $_POST['provided_by'];

        $course_cat_name_check = mysqli_query($conn, "SELECT * FROM course_category cc WHERE cc.status = 1 AND cc.name = '$name' AND cc.provided_by = '$provided_by'");
        if (mysqli_num_rows($course_cat_name_check) > 0){
            $msg = 'This Category Already Exist.';
        }else{
            $insert = "INSERT INTO course_category (`name`, `provided_by`) VALUES ('$name', '$provided_by')";
            if(mysqli_query($conn, $insert)){
                $msg = "Category inserted successfully.";
                
            } else{
                echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
            }
        }
    } 
?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Courses</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Add New Course</li>
				</ul>
			</div>	
			<div class="row">
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add New Course</h4>
						</div>
                        
						<div class="widget-inner">
                        <?php if($msg != ''){ ?>
                            <div class='alert-success' style="padding:10px;"><?php echo $msg; ?></div>
                        <?php } ?>
							<form class="edit-profile m-b30" action="" method="post">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>1. Basic info</h3>
										</div>
									</div>
									
                                    <div class="form-group col-6">
										<label class="col-form-label">Course Category Name</label>
										<div>
											<input class="form-control" required name="name" type="text" value="">
										</div>
									</div>

                                    <div class="form-group col-6">
										<label class="col-form-label">Course Provided By</label>
										<div>
											<input class="form-control" required name="provided_by" type="text" value="">
										</div>
									</div>
									
									<div class="col-12">
										<button type="submit" class="btn"><span class="ttr-icon"><i class="ti-save"></i></span> Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include("includes/footer.php"); ?>	