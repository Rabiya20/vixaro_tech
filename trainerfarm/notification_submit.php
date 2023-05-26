<?php
session_start ();
include("includes/config.php");

if(isset($_POST['chat_form']))
{
    $insert = "INSERT INTO `notifications`(`notification_type`, `user_email`, `user_message`) 
    VALUES ('chat', 'abc@gmail.com', 'message')";
    if(mysqli_query($conn, $insert)){
        // $msg = "Category inserted successfully.";
        header("location:contact_us.php?msg=1");
    } else{
        echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
    }
}
?>