<?php
session_start ();
include("includes/config.php");

if(isset($_POST['submit']))
{
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(!empty($username) && !empty($password)){
        $res = "SELECT * FROM users u
        INNER JOIN user_type ut ON ut.user_type_id = u.user_type_id
        WHERE u.user_name ='$username' AND u.user_password='$password'
        AND u.user_status = 1 AND ut.user_type_status = 1";
        $result = mysqli_query($conn, $res);
        
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] == $username && $row['user_password'] == $password) {
                $_SESSION["login"]          = "1";
                $_SESSION['user_id']        = $row['user_id'];
                $_SESSION['user_name']      = $row['user_name'];
                $_SESSION['user_fullname']  = $row['user_fullname'];
                $_SESSION['user_type_id']   = $row['user_type_id'];
                $_SESSION['user_type_name'] = $row['user_type_name'];

                header("location:index.php");
            }
            else{
                header("location:login.php?err=1");
            }
        }
        else{
            header("location:login.php?err=1");
        }
    }else{
        header("location:login.php?err=2");
    }
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>