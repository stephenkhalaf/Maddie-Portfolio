<?php
include_once "../config/database.php";

$description = mysqli_escape_string($conn, $_POST['description']);
$link = mysqli_escape_string($conn, $_POST['link']);
$date = mysqli_escape_string($conn, $_POST['date']);
$unique_id = mysqli_escape_string($conn, $_POST['id']);
$error = "";

if(!empty($date) && !empty($description) && !empty($link)){
      
    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];
        $image_type = explode('.', $image_name)[1];
        $ext = ['png','jpeg','jfif','jpg'];
        if(in_array($image_type, $ext)){
            $new_img = time().$image_name;
            if((move_uploaded_file($_FILES['image']['tmp_name'], "../../uploads/".$new_img))){
                $sql2 = mysqli_query($conn, "UPDATE blog SET description = '$description', link = '$link',date = '$date',image='$new_img'
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
            
        }else{
            $sql2 = mysqli_query($conn, "UPDATE blog SET description = '$description', link = '$link',date = '$date'
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
             <strong>All Fields Are Required </strong>
        </div>
    ";
    }

echo $error;

?>