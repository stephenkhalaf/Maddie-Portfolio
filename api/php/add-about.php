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
$error = "";
 
 if(!empty($name) && !empty($degree) && !empty($phone) &&  !empty($freelance) &&  !empty($email) &&  !empty($experience) &&  !empty($address) && !empty($birthday)){
      
    if(isset($_FILES['image1']) && !empty($_FILES['image1']['name']) && isset($_FILES['image2']) && !empty($_FILES['image2']['name'])){
        $image_name1 = $_FILES['image1']['name'];
        $image_name2 = $_FILES['image2']['name'];
        $image_type1 = explode('.', $image_name1)[1];
        $image_type2 = explode('.', $image_name2)[1];
        $ext = ['png','jpeg','jfif','jpg'];
        if(in_array($image_type1, $ext) && in_array($image_type2, $ext)){
            $new_img1 = time().$image_name1;
            $new_img2 = time().$image_name2;
            $unique_id = time();
            if((move_uploaded_file($_FILES['image1']['tmp_name'], "../../uploads/".$new_img1)) && (move_uploaded_file($_FILES['image2']['tmp_name'], "../../uploads/".$new_img2) )){
                $sql2 = mysqli_query($conn, "INSERT INTO about (unique_id,name,degree,phone,address,birthday,experience,email,freelance,image1,image2) VALUES 
                ($unique_id,'$name','$degree','$phone','$address','$birthday','$experience','$email', '$freelance', '$new_img1','$new_img2')");
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