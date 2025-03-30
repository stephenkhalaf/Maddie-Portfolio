<?php
include_once "../config/database.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password_hash = md5($password);

if(!empty($email) && !empty($password)){

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) ||  strlen($password) < 6){
        echo "Incorrect Email / Inappropriate password";
    }else{
        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' and (password  = '$password_hash' || password  = '$password') LIMIT 1");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id']; 
            echo "success";
        }else{
            echo "Incorrect Email or Password";
        }
    }
}else{
    echo "Please, enter your email/password";
}
?>