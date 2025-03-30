<?php 
include_once "../config/database.php";

$title = mysqli_escape_string($conn, $_POST['title']);
$description = mysqli_escape_string($conn, $_POST['description']);
$link = mysqli_escape_string($conn, $_POST['link']);
$error = "";
 
 if(!empty($link) && !empty($title) && !empty($description)){
         $unique_id = time();
        $sql = mysqli_query($conn, "INSERT INTO projects (unique_id,title,description,link) VALUES 
        ($unique_id,'$title','$description','$link')");
        if($sql){
            echo "success";
        }else{
            $error = "
                <div class='alert alert-danger'>
                        <strong>An error occurred!</strong>
                </div>
            ";
        }
    }else{
        $error = "
        <div class='alert alert-danger'>
             <strong>All Fields Are Required </strong>
        </div>
    ";
    }

echo $error;
?>