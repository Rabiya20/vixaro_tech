<?php
session_start ();
include("includes/config.php");

if(isset($_POST['submit']))
{
    $username = validate($_POST['user_name']);
    $password = validate($_POST['user_password']);
    $email = validate($_POST['email']);
    $fullname = $_POST['user_fullname'];
    $country = validate($_POST['country']);
    $city = validate($_POST['city']);
    $linkedin = validate($_POST['linkedin']);
    $phone = validate($_POST['phone']);

    $check_username = "SELECT * FROM users u
    WHERE u.user_name ='$username'";
    $check_username_result = mysqli_query($conn, $check_username);
    
    if (mysqli_num_rows($check_username_result) == 1){
        header("location:register.php?err=2");
    }
    else{
        $insert = "INSERT INTO users (`user_name`, `user_password`, `user_fullname`, `phone`, `email`, `linkedin`, `country`, `city`, `user_type_id`, `user_status`) VALUES ('$username', '$password', '$fullname', '$phone', '$email', '$linkedin', '$country', '$city', '3', '1')";
        if(mysqli_query($conn, $insert)){
            header("location:register.php?suc=1");
        } else{
            echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
        }
    }
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>