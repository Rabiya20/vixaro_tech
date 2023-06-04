<?php
session_start ();
include("includes/config.php");

    if(isset($_FILES['assignment_attach'])){
        $errors= array();
        $file_name = $_FILES['assignment_attach']['name'];
        $file_size =$_FILES['assignment_attach']['size'];
        $file_tmp =$_FILES['assignment_attach']['tmp_name'];
        $file_type=$_FILES['assignment_attach']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['assignment_attach']['name'])));
        
        $extensions= array("doc","docx","pdf");
        
        $datetime = date("dmYHis-");
        $filename = $datetime.$file_name;

        if(in_array($file_ext, $extensions) === false){
            // error 1
            $err = 1;
            $errors[]="extension not allowed, please choose a .doc, .docx or .pdf file.";
            echo 'err1';die;
            header("location:assignment_add.php?err=1");
        }
        
        if($file_size > 2097152){
            // error 2
            $err = 2;
            $errors[]='File size must be excately 2 MB';
            echo 'err2';die;
            header("location:assignment_add.php?err=2");
        }
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"assets/assignments/".$filename);
            $success = "File Uploaded Successfully";

            $_id = $_SESSION['user_id'];

            $course_id = $_POST['course_id'];
            $assignment_title = $_POST['assignment_title'];
            $assignment_desc = $_POST['assignment_desc'];
            $assignment_due = $_POST['assignment_due'];
            $assignment_attach = $filename;
            
            $insert = "INSERT INTO `assignments`(`course_id`, `teacher_id`, `assignment_title`, `assignment_desc`, `assignment_due`, `assignment_attach`) 
            VALUES ('$course_id', '".$_SESSION['user_id']."', '$assignment_title', '$assignment_desc', '$assignment_due','$assignment_attach')";
            if(mysqli_query($conn, $insert)){
                $msg = "Assignment Added Successfully.";
                header("location:assignment_add.php?succ=1");
            } else{
                // error 3
                $err = 3;
                echo "ERROR: Could not able to execute $insert. " . mysqli_error($conn);die;
                header("location:assignment_add.php?err=3");

            }
        }
    }else{
        header("location:assignment_add.php?err=4");
    }
?>