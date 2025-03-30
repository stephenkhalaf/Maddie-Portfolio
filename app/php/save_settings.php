<?php 
include "../../api/config/database.php";
$id = $_SESSION['unique_id'];
 sleep(1);
 $fname = mysqli_escape_string($conn, $_POST['fname']);
 $lname = mysqli_escape_string($conn, $_POST['lname']);
 $email = mysqli_escape_string($conn, $_POST['email']);
 $gender = mysqli_escape_string($conn, $_POST['gender']);
 $password = mysqli_escape_string($conn, $_POST['password']);

 $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $id LIMIT 1");
 $user = mysqli_fetch_assoc($sql);
 $image = $user['img'];
 
 if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($gender)){
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) ||  strlen($password) < 6){
        echo "Incorrect Email / Inappropriate password";
    }else{
      
        if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
            $image_name = $_FILES['image']['name'];
            $image_type = explode('.', $image_name)[1];
            $ext = ['png','jpeg','jfif','jpg'];
            if(in_array($image_type, $ext)){
                $new_img = time().$image_name;
                if(move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$new_img)){
                    $sql2 = mysqli_query($conn, "UPDATE users SET 
                    fname = '$fname', lname = '$lname',email='$email', password = '$password', gender = '$gender', img = '$new_img' WHERE unique_id=$id LIMIT 1");
                    if($sql2){
                        $path = "../uploads/$image";
                        unlink($path);
                        echo "success";
                    }else{
                        echo "Error occurred";
                    }
                }

            }else{
                echo "Select image with the extentions - png, jpg, jpeg or jfif";
            }
            
        }else{
            $sql3 = mysqli_query($conn, "UPDATE users SET 
            fname = '$fname', lname = '$lname',email='$email', password = '$password', gender = '$gender', img = '$image' WHERE unique_id=$id LIMIT 1");
            if($sql3){
                echo "success";
            }else{
                echo "Error occurred";
            }
        }
    }


}else{
    echo "All Fields Are Required";
}


?>