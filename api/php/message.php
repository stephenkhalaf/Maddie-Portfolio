<?php
include_once "../config/database.php";

$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$subject = mysqli_escape_string($conn, $_POST['subject']);
$message = mysqli_escape_string($conn, $_POST['message']);

$error = "";

if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "<div class='alert alert-danger'>
                     <strong>Incorrect Email!</strong>
                 </div>";
    }else{
            $unique_id = time();
            $sql = mysqli_query($conn, "INSERT INTO message 
                (unique_id,name,email, subject, message) VALUES ($unique_id,'$name','$email', '$subject', '$message') ");
                if($sql){
                    echo "success";
                }else{
                    $error = "
                        <div class='alert alert-danger'>
                             <strong>An error occurred!</strong>
                        </div>
                    ";
                }
               
            }
        
    }
else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
        </div>";
}

echo $error;
?>