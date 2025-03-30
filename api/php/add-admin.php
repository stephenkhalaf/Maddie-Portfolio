<?php
include_once "../config/database.php";

$fullname = mysqli_escape_string($conn, $_POST['fullname']);
$email = mysqli_escape_string($conn, $_POST['email']);
$password = mysqli_escape_string($conn, $_POST['password']);
$type = mysqli_escape_string($conn, $_POST['type']);
$password_hash = md5($password);
$error = "";

if(!empty($fullname) && !empty($email) && !empty($password) && !empty($type)){
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "<div class='alert alert-danger'>
                     <strong>Incorrect Email!</strong>
                 </div>";
    }else if(strlen($password) < 6){
        $error = "<div class='alert alert-danger'>
                    <strong>password length must be more than 6!</strong>
            </div>";
    }else{
        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' LIMIT 1");
        if(mysqli_num_rows($sql) > 0){
            $error = "<div class='alert alert-danger'>
                        <strong>This $email Alredy Exists!</strong>
                </div>";
        }else{
            $unique_id = time();
            $sql2 = mysqli_query($conn, "INSERT INTO admin 
                (unique_id,full_name,email,password,type) VALUES ($unique_id,'$fullname','$email', '$password_hash', '$type') ");
                if($sql2){
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

}else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
        </div>";
}

echo $error;

?>