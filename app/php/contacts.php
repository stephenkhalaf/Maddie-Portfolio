<?php
sleep(1);
include "../../api/config/database.php";
$id = $_SESSION['unique_id'];

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != $id");
$output = "";
if(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '
            <div class="contact" info='.$row['unique_id'].' onclick="contactTalk(event)">
            <img src="uploads/'.$row['img'].'" alt="">
            <p>'.$row['fname'].' '.$row['lname'].'</p>
            </div>
        ';
    }
}else{
    $output = "No Contacts Found";
}

echo $output;