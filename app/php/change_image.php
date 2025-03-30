<?php
include "../../api/config/database.php";

$id = $_SESSION['unique_id'];

if(isset($_FILES['myFile']) && !empty($_FILES['myFile']['name'])){
    $image_name = $_FILES['myFile']['name'];
    $image_type = explode('.', $image_name)[1];
    $ext = ['png','jpeg','jfif','jpg'];
    if(in_array($image_type, $ext)){
        $new_img = time().$image_name;
        if(move_uploaded_file($_FILES['myFile']['tmp_name'], "../uploads/".$new_img)){
            $sql = mysqli_query($conn, "UPDATE users SET img = '$new_img' WHERE unique_id = $id LIMIT 1");
            if($sql){
                $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $id LIMIT 1");
                $user = mysqli_fetch_assoc($sql2);
                echo $user['img'];
            }
        }
    }
}

?>