<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$user_id = $_SESSION['user_id'];
	if(!empty($user_id)){
		$user_SESSION = mysqli_query($conn, "SELECT user_fullname FROM users u WHERE u.user_id = '$user_id'");
		$user_fullname = mysqli_fetch_assoc($user_SESSION);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="assets/images/logo/tf-icon.ico" type="image/tf-icon.ico" />
    
	<!-- PAGE TITLE HERE ============================================= -->
	<title>TrainerFarm | Panel </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/b-2.3.6/datatables.min.css" rel="stylesheet"/>
 
	<!-- STYLESHEETS ============================================= -->
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<div class="ttr-logo-box">
				<div>
					<a href="index.php" class="ttr-logo">
						<img class="ttr-logo-mobile" alt="" src="assets/images/logo/TF-white.png" width="30" height="30">
						<img class="ttr-logo-desktop" alt="" src="assets/images/logo/TF-white.png" width="160" height="27">
					</a>
				</div>
			</div>
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.php" class="ttr-material-button ttr-submenu-toggle">Back to Website</a>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a class="ttr-material-button text-light"><?php echo $user_fullname['user_fullname']; ?></a>
					</li>
					<?php if($_SESSION['user_type_id'] == 1 && $_SESSION['user_type_name'] == 'superadmin'){ ?>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
						<div class="ttr-header-submenu noti-menu">
							<div class="ttr-notify-header">
								<span class="ttr-notify-text-top">Notifications</span>
								<span class="ttr-notify-text"></span>
							</div>
							<div class="noti-box-list">
								<ul>
									<li>
										<span class="notification-text">
											<span>Contact/Support</span>
										</span>
										<span class="notification-time">
											<a href="notifications-contact.php">Click</a>
										</span>
									</li>
									<li>
										<span class="notification-text">
											<span>Messages</span>
										</span>
										<span class="notification-time">
											<a href="notifications-msg.php">Click</a>
										</span>
									</li>
									<li>
										<span class="notification-text">
											<span>Ask a Question</span>
										</span>
										<span class="notification-time">
											<a href="notifications-ques.php">Click</a>
										</span>
									</li>
									<li>
										<span class="notification-text">
											<span>Career - Instructor</span>
										</span>
										<span class="notification-time">
											<a href="notifications-career.php">Click</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<?php } ?>
                    <li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/person-placeholder.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="user-profile.php">My profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<!--header search panel start -->
			<div class="ttr-search-bar">
				<form class="ttr-search-form">
					<div class="ttr-search-input-wrapper">
						<input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
						<button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
					</div>
					<span class="ttr-search-close ttr-search-toggle">
						<i class="ti-close"></i>
					</span>
				</form>
			</div>
		</div>
	</header>