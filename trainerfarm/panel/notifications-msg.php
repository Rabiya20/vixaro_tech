<?php 
session_start ();
include("includes/config.php");

if(!isset($_SESSION["login"]))
	header("location:login.php"); 

	$notification_res = "SELECT n.* 
	FROM notifications n
	WHERE n.notification_type = 'chat'
	ORDER BY n.updated_at DESC";

    $notification_list = mysqli_query($conn, $notification_res);

?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Notification Management</h4>
				<ul class="db-breadcrumb-list">
				<li>
					<a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Chat Notifications</li>
				</ul>
			</div>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        		<thead>
					<tr>
						<th>S. No.</th>
						<th>Sender Email</th>
						<th>Sender Message</th>
						<th>Time</th>
            		</tr>
        		</thead>
        		<tbody>
				<?php $i = 1;
					while($row = mysqli_fetch_assoc($notification_list)){ ?>				
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $row['user_email']; ?></td>
						<td><?php echo $row['user_message']; ?></td>
						<td><?php echo date("d-M-Y", strtotime($row['updated_at']))." at ".date("h:i A", strtotime($row['updated_at'])); ?></td>
					</tr>
					<?php } ?>
        		</tbody>
    		</table>
		</div>
	</main>
<?php include("includes/footer.php"); ?>