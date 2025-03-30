<?php
include_once "../config/database.php";

$story = mysqli_escape_string($conn, $_POST['story']);

$error = "";
      
if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
    $image_name = $_FILES['image']['name'];
    $image_type = explode('.', $image_name)[1];
    $ext = ['png','jpeg','jfif','jpg'];
    if(in_array($image_type, $ext)){
        $new_img = time().$image_name;
        $unique_id = time();
        if((move_uploaded_file($_FILES['image']['tmp_name'], "../../uploads/".$new_img))){
            $sql2 = mysqli_query($conn, "INSERT INTO story (unique_id,story,image) VALUES 
            ($unique_id,'$story','$new_img')");
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

        }else{
            $error = "
                    <div class='alert alert-danger'>
                        <strong>Select image with the extentions - png, jpg, jpeg or jfif </strong>
                    </div>
                ";
            
        }
        
    }else{
        $unique_id = time();
        $sql2 = mysqli_query($conn, "INSERT INTO story (unique_id,story) VALUES 
        ($unique_id,'$story')");
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


echo $error;

?>