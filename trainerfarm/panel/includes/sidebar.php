<style>
    .ttr-sidebar-logo a {
        margin: 0px 24px !important; 
    }    
</style>
<?php
if($_SESSION['user_type_id'] == 2){
	$my_course_res = "SELECT c . * 
	FROM course c
	WHERE c.teacher_id = '".$_SESSION['user_id']."'
	AND c.course_status = 1
	ORDER BY c.course_name";
}elseif($_SESSION['user_type_id'] == 3){
	$my_course_res = "SELECT sc . * , c.*
	FROM student_course sc
	LEFT JOIN course c ON c.course_id = sc.course_id
	WHERE sc.student_id = '".$_SESSION['user_id']."'
	AND c.course_status = 1
	ORDER BY joined_at";
}
	$my_course_list1 = mysqli_query($conn, $my_course_res);
	$my_course_list2 = mysqli_query($conn, $my_course_res);

?>
    <!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<div class="ttr-sidebar-logo">
				<a href="#"><img alt="" src="assets/images/logo/TF.png" width="122" height="27"></a>
				<div class="ttr-sidebar-toggle-button">
					<i class="ti-arrow-left"></i>
				</div>
			</div>
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
						<a href="index.php" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-home"></i></span>
		                	<span class="ttr-label">Dashborad</span>
		                </a>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Course Management</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li>
                            <?php if($_SESSION['user_type_id'] == 1 && $_SESSION['user_type_name'] == 'superadmin'){ ?>
								<a href="course_category_list.php" class="ttr-material-button"><span class="ttr-label">Course Category List</span></a>
		                		<a href="course_list.php" class="ttr-material-button"><span class="ttr-label">All Courses</span></a>
		                		<a href="course_add.php" class="ttr-material-button"><span class="ttr-label">Add New Course</span></a>
								<?php } else{ ?>
		                		<a href="my_courses.php" class="ttr-material-button"><span class="ttr-label">My Courses</span></a>                                    
                            <?php } ?>
                            </li>
		                </ul>
		            </li>
					<?php if($_SESSION['user_type_id'] == 1 && $_SESSION['user_type_name'] == 'superadmin'){ ?>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
		                	<span class="ttr-label">Student Management</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li><a href="students_list.php" class="ttr-material-button"><span class="ttr-label">All Students</span></a></li>
		                	<li><a href="students_add.php" class="ttr-material-button"><span class="ttr-label">Add New Student</span></a></li>
						</ul>
					</li>
					<?php } ?>
					<?php if($_SESSION['user_type_id'] == 1 && $_SESSION['user_type_name'] == 'superadmin'){ ?>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-blackboard"></i></span>
		                	<span class="ttr-label">Teacher Management</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li><a href="teacher_list.php" class="ttr-material-button"><span class="ttr-label">All Teachers</span></a></li>
		                	<li><a href="teacher_add.php" class="ttr-material-button"><span class="ttr-label">Add New Teacher</span></a></li>
						</ul>
					</li>
					<?php } ?>
					<?php if($_SESSION['user_type_id'] == 1 && $_SESSION['user_type_name'] == 'superadmin'){ ?>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-notepad"></i></span>
		                	<span class="ttr-label">Assignment Management</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li><a href="assignment_list.php" class="ttr-material-button"><span class="ttr-label">All Assignments</span></a></li>
		                	<li><a href="assignment_add.php" class="ttr-material-button"><span class="ttr-label">Add New Assignment</span></a></li>
						</ul>
					</li>
					<?php } ?>
					<?php if($_SESSION['user_type_id'] == 1 && $_SESSION['user_type_name'] == 'superadmin'){ ?>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-files"></i></span>
		                	<span class="ttr-label">Assignment Submissions</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
		                	<li><a href="submission_list.php" class="ttr-material-button"><span class="ttr-label">All Submissions</span></a></li>
						</ul>
					</li>
					<?php } ?>
					<?php if(($_SESSION['user_type_id'] == 2 && $_SESSION['user_type_name'] == 'teacher') || ($_SESSION['user_type_id'] == 3 && $_SESSION['user_type_name'] == 'student')){ ?>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-notepad"></i></span>
		                	<span class="ttr-label">My Assignments</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
							<?php while($row1 = mysqli_fetch_assoc($my_course_list1)){ ?>
		                		<li><a href="assignment_course.php?id=<?php echo $row1['course_id'];?>" class="ttr-material-button"><span class="ttr-label"><?php echo $row1['course_name']; ?></span></a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>
					<?php if(($_SESSION['user_type_id'] == 2 && $_SESSION['user_type_name'] == 'teacher') || ($_SESSION['user_type_id'] == 3 && $_SESSION['user_type_name'] == 'student')){ ?>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-files"></i></span>
		                	<span class="ttr-label">Assignment Submissions</span>
		                	<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
		                <ul>
							<?php while($row2 = mysqli_fetch_assoc($my_course_list2)){ ?>
		                		<li><a href="submission_course.php?id=<?php echo $row2['course_id'];?>" class="ttr-material-button"><span class="ttr-label"><?php echo $row2['course_name']; ?></span></a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->