<?php
session_start ();
include("includes/config.php");
    if(isset($_FILES['submission_attach'])){
        $errors= array();
        $file_name = $_FILES['submission_attach']['name'];
        $file_size =$_FILES['submission_attach']['size'];
        $file_tmp =$_FILES['submission_attach']['tmp_name'];
        $file_type=$_FILES['submission_attach']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['submission_attach']['name'])));
        
        $extensions= array("doc","docx","pdf");
        
        $datetime = date("dmYHis-");
        $filename = $datetime.$file_name;

        if(in_array($file_ext, $extensions)=== false){
            // error 1
            $err = 1;
            $errors[]="extension not allowed, please choose a .doc, .docx or .pdf file.";
            header("location:assignment_view.php?id=".$assignment_id."&err=1");
        }
        
        if($file_size > 2097152){
            // error 2
            $err = 2;
            $errors[]='File size must be excately 2 MB';
            header("location:assignment_view.php?id=".$assignment_id."&err=2");
        }
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"assets/submissions/".$filename);
            $success = "File Uploaded Successfully";

            $_id = $_SESSION['user_id'];

            $assignment_id = $_POST['assignment_id'];
            $submission_date = date("Y-m-d");
            $submission_attach = $filename;
            
            $insert = "INSERT INTO `submissions`(`assignment_id`, `student_id`, `submission_date`, `submission_attach`) VALUES ('$assignment_id', '".$_SESSION['user_id']."', '$submission_date','$submission_attach')";
            if(mysqli_query($conn, $insert)){
                $msg = "Assignment Submitted Successfully.";
                header("location:assignment_view.php?id=".$assignment_id."&succ=1");
            } else{
                // error 3
                $err = 3;
                echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);
                header("location:assignment_view.php?id=".$assignment_id."&err=3");
            }
        }else{
            header("location:assignment_view.php?id=".$assignment_id."&err=".$err);
        }
    }
?>