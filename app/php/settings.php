<?php
sleep(1);
include "../../api/config/database.php";
$id = $_SESSION['unique_id'];
$error = "";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $id LIMIT 1");

if(mysqli_num_rows($sql) == 1){
    $user = mysqli_fetch_assoc($sql);
  
    if($user['gender']=='male'){
        $checkedMale = 'checked';
    }else{
        $checkedMale = '';
    }
    
    if($user['gender']=='female'){
        $checkedFemale = 'checked';
    }else{
        $checkedFemale = '';
    }
    echo '
        <section class="form signup" style="animation: appear 1s ease-in-out">
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text">This is an error message!</div>
        <div class="name-details">
            <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" value="'.$user['fname'].'" placeholder="First name" required>
            </div>
            <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" value="'.$user['lname'].'" placeholder="Last name" required>
            </div>
        </div>
        <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" value="'.$user['email'].'" placeholder="Enter your email" required>
        </div>
        <div class="field input">
            <label>Password</label>
            <input type="text" name="password" value="'.$user['password'].'" placeholder="Enter new password" required>
            <i class="fas fa-eye"></i>
        </div>
        <div style="margin:10px 0;">
            <label style="vertical-align: top;">Gender</label>
            <input type="radio" name="gender" '.$checkedMale.' value="'.$user['gender'].'"  style="display:inline-block;width:15px;height:15px"  required>
            Male
            <input type="radio" name="gender" '.$checkedFemale.' value="'.$user['gender'].'"  style="display:inline-block;width:15px;height:15px" required>
            Female
        </div>
        <div class="field image" style="display:inline-block">
            <img  ondragover = "dragover(event)" ondrop = "drop(event)" ondragleave = "dragleave(event)"  src="uploads/'.$user['img'].'"  style="border-radius: 0 20px;width:150px; height:150px;object-fit:cover"/><br/>
            <label for="image" style="background:green;color:white;display:inline-block;padding:10px;margin-top:5px;border-radius:10px;cursor:pointer">Change Image</label>
            <input type="file" name="image"  id="image" style="display:none" onchange="change_image(event)"/>
        </div>
    
        <div class="field button">
            <input type="submit" name="submit" value="Save Settings" onclick="save_settings(event)" style="background:green;color:white;">
        </div>
        <br><br><br><br>
        <div class="field button">
            <input type="button" name="warning" value="Dangerous Region...Beware of the Button below" style="background:orange;color:white;">
        </div>
        <br><br>
        <div class="field button">
           <button  style="background:red;color:white; padding:10px;cursor:pointer"><a href="php/delete-user.php" style="text-decoration:none;color:white">Deactivate Account</a></button>
         </div>
        </form>
        </section>

        ';

}else{
    echo "An error occurred!";
}



?>