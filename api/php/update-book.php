<?php
include_once "../config/database.php";

$type = mysqli_escape_string($conn, $_POST['type']);
$title = mysqli_escape_string($conn, $_POST['title']);
$description = mysqli_escape_string($conn, $_POST['description']);
$link = mysqli_escape_string($conn, $_POST['link']);
$unique_id = mysqli_escape_string($conn, $_POST['id']);
$error = "";

if(!empty($type) && !empty($title) && !empty($description)){
      
    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $image_type = explode('.', $image_name)[1];
        $ext = ['png','jpeg','jfif','jpg', 'webp'];
        if(in_array($image_type, $ext)){
            $new_img = time().$image_name;
            if((move_uploaded_file($_FILES['image']['tmp_name'], "../../uploads/".$new_img))){
                $sql2 = mysqli_query($conn, "UPDATE books SET type = '$type',title ='$title',description = '$description',link = '$link',image='$new_img'
                WHERE unique_id = $unique_id");
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