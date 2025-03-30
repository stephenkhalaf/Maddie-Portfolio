<?php
include_once "../config/database.php";

$name = mysqli_escape_string($conn, $_POST['name']);
$degree = mysqli_escape_string($conn, $_POST['degree']);
$phone = mysqli_escape_string($conn, $_POST['phone']);
$address = mysqli_escape_string($conn, $_POST['address']);
$birthday = mysqli_escape_string($conn, $_POST['birthday']);
$experience = mysqli_escape_string($conn, $_POST['experience']);
$email = mysqli_escape_string($conn, $_POST['email']);
$freelance = mysqli_escape_string($conn, $_POST['freelance']);
$unique_id = mysqli_escape_string($conn, $_POST['id']);
$error = "";

if(!empty($name) && !empty($degree) && !empty($phone) &&  !empty($freelance) &&  !empty($email) &&  !empty($experience) &&  !empty($address) && !empty($birthday)){
      
    if(isset($_FILES['image1']) && !empty($_FILES['image1']['name'])){
        $image_name1 = $_FILES['image1']['name'];
        $image_type1 = explode('.', $image_name1)[1];
        $ext = ['png','jpeg','jfif','jpg'];
        if(in_array($image_type1, $ext)){
            $new_img1 = time().$image_name1;
            if((move_uploaded_file($_FILES['image1']['tmp_name'], "../../uploads/".$new_img1))){
                $sql2 = mysqli_query($conn, "UPDATE about SET name = '$name',degree ='$degree',phone = '$phone',address = '$address',birthday = '$birthday',experience = '$experience',email = '$email',freelance = '$freelance', image1='$new_img1'
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
            
        }else if(isset($_FILES['image2']) && !empty($_FILES['image2']['name'])){
            $image_name2 = $_FILES['image2']['name'];
            $image_type2 = explode('.', $image_name2)[1];
            $ext = ['png','jpeg','jfif','jpg'];
            if(in_array($image_type2, $ext)){
                $new_img2 = time().$image_name2;
                if(move_uploaded_file($_FILES['image2']['tmp_name'], "../../uploads/".$new_img2)){
                    $sql4 = mysqli_query($conn, "UPDATE about SET name = '$name',degree ='$degree',phone = '$phone',address = '$address',birthday = '$birthday',experience = '$experience',email = '$email',freelance = '$freelance',image2='$new_img2'
                    WHERE unique_id = $unique_id");
                    if($sql4){
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
            $sql3 = mysqli_query($conn, "UPDATE about SET name = '$name',degree ='$degree',phone = '$phone',address = '$address',birthday = '$birthday',experience = '$experience',email = '$email',freelance = '$freelance'
             WHERE unique_id = $unique_id");
            if($sql3){
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