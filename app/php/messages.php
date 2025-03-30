<?php
include "../../api/config/database.php";
$sender= $_SESSION['unique_id'];
$receiver = $_POST['chatId'];
$message = $_POST['message'];


if(isset($_FILES['file']) && !empty($_FILES['file']['name'])){
    $image_name = $_FILES['file']['name'];
    $image_type = explode('.', $image_name)[1];
    $ext = ['png','jpeg','jfif','jpg','pdf','txt'];
    if(in_array($image_type, $ext)){
        $new_img = time().$image_name;
        if(move_uploaded_file($_FILES['file']['tmp_name'], "../uploads/".$new_img)){
            $date = date('Y-m-d H:i:s');
            $sql = mysqli_query($conn, "INSERT INTO messages 
            (sender,receiver,message,files,date)
            VALUES ($sender,$receiver,'$message','$new_img','$date')");
            
        }
    }
}else{
    if(empty($message)){
        die('message field cannot be empty');
    }
    $date = date('Y-m-d H:i:s');
    $sql2 = mysqli_query($conn, "INSERT INTO messages 
            (sender,receiver,message,date)
            VALUES ($sender,$receiver,'$message','$date')");
            
}
?>