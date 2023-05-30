<?php
session_start ();
include("includes/config.php");

    $notification_type = $_POST['notification_type'];
    $user_name      = (!empty($_POST['user_name']) && $_POST['user_name'] != 'undefined') ? $_POST['user_name'] : null;
    $user_surname   = (!empty($_POST['user_surname']) && $_POST['user_surname'] != 'undefined') ? $_POST['user_surname'] : null;
    $user_email     = (!empty($_POST['user_email']) && $_POST['user_email'] != 'undefined') ? $_POST['user_email'] : null;
    $user_phone     = (!empty($_POST['user_phone']) && $_POST['user_phone'] != 'undefined') ? $_POST['user_phone'] : null;
    $user_message   = (!empty($_POST['user_message']) && $_POST['user_message'] != 'undefined') ? $_POST['user_message'] : null;

    $insert = "INSERT INTO `notifications`(`notification_type`, `user_email`, `user_message`) 
    VALUES ('$notification_type', '$user_email', '$user_message')";

    if(mysqli_query($conn, $insert)){
        $data = array(
            $notification_type,
            $user_email,
            $user_message,
        );
        echo json_encode($data);
    } else{
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
}
?>