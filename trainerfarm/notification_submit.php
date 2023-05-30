<?php
session_start ();
include("includes/config.php");

    $notification_type  = $_POST['notification_type'];
    $user_name          = $_POST['user_name'];
    $user_surname       = $_POST['user_surname'];
    $user_email         = $_POST['user_email'];
    $user_phone         = $_POST['user_phone'];
    $user_message       = $_POST['user_message'];

    $insert = "INSERT INTO `notifications`(`notification_type`, `user_email`, `user_message`) 
    VALUES ('$notification_type', '$user_email', '$user_message')";

    if(mysqli_query($conn, $insert)){
        $data = array(
            $notification_type,
            $user_name,
            $user_surname,
            $user_phone,
            $user_email,
            $user_message,
        );
        echo json_encode($data);
    } else{
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
}
?>