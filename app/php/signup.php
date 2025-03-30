<?php 
 include "../../api/config/database.php";
 $fname = mysqli_escape_string($conn, $_POST['fname']);
 $lname = mysqli_escape_string($conn, $_POST['lname']);
 $email = mysqli_escape_string($conn, $_POST['email']);
 $gender = mysqli_escape_string($conn, $_POST['gender']);
 $password = mysqli_escape_string($conn, $_POST['password']);

 if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($gender)){
   
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) ||  strlen($password) < 6){
        echo "Incorrect Email / Inappropriate password";
    }else{
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' LIMIT 1");
        if(mysqli_num_rows($sql) > 0){
            echo "This $email already exist";
        }else{
            if(isset($_FILES['image']) && !empty($_FILES['image']['name'])){
                $image_name = $_FILES['image']['name'];
                $image_type = explode('.', $image_name)[1];
                $ext = ['png','jpeg','jfif','jpg'];
                if(in_array($image_type, $ext)){
                    $new_img = time().$image_name;
                    if(move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$new_img)){
                        $status = 'Offline';
                        $unique_id = rand(time(),1000000);
                        $password_hash = md5($password);
                        $date = date("Y-m-d H:i:s");
                        $sql2 = mysqli_query($conn, "INSERT INTO users 
                        (unique_id,fname,lname,email,password,gender,img,status,date) VALUES 
                        ('$unique_id','$fname','$lname','$email', '$password','$gender', '$new_img', '$status', '$date') ");
                        if($sql2){
                            echo "success";
                        }else{
                            echo "Error occurred";
                        }
                    }

                }else{
                    echo "Select image with the extentions - png, jpg, jpeg or jfif";
                }
               
            }else{
                echo "Please select an image";
            }
        }
    }


}else{
    echo "All Fields Are Required";
}


?>