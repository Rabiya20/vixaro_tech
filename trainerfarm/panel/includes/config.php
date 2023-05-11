<?php
    $sname= "localhost";
    $unmae= "root";
    $password = "admin@90";
    $db_name = "trainerfarm";
    $conn = mysqli_connect($sname, $unmae, $password, $db_name);
    
    if (!$conn) {
        echo "Connection failed!";
    }
?>