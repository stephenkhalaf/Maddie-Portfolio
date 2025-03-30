<?php
include_once "../config/database.php";

$title = mysqli_escape_string($conn, $_POST['title']);
$description = mysqli_escape_string($conn, $_POST['description']);
$link = mysqli_escape_string($conn, $_POST['link']);
$unique_id = mysqli_escape_string($conn, $_POST['id']);
$error = "";

if(!empty($link) && !empty($title) && !empty($description)){
    
        $sql = mysqli_query($conn, "UPDATE projects SET title ='$title',description = '$description',link = '$link'
        WHERE unique_id = $unique_id");
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