<?php
include_once "../config/database.php";

$fullname = mysqli_escape_string($conn, $_POST['fullname']);
$email = mysqli_escape_string($conn, $_POST['email']);
$password = mysqli_escape_string($conn, $_POST['password']);
$type = mysqli_escape_string($conn, $_POST['type']);
$id = mysqli_escape_string($conn,$_POST['id']);
$error = "";

if(!empty($fullname) && !empty($email) && !empty($password)){
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "<div class='alert alert-danger'>
                     <strong>Incorrect Email!</strong>
                 </div>";
    }else if(strlen($password) < 6){
        $error = "<div class='alert alert-danger'>
                    <strong>password length must be more than 6!</strong>
            </div>";
    }else{
      
        $sql = mysqli_query($conn, "UPDATE admin 
                SET full_name = '$fullname', email = '$email', password = '$password' , type = '$type' WHERE id = $id");
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

}else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
        </div>";
}

echo $error;

?>