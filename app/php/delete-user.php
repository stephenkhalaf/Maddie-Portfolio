<?php  
include "../../api/config/database.php";
$id = $_SESSION['unique_id'];

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $id LIMIT 1");
if($sql){
    $user = mysqli_fetch_assoc($sql);
    $image = $user['img'];
    $sql2 = mysqli_query($conn, "DELETE FROM users WHERE unique_id = $id LIMIT 1");
    if($sql2){
        $path = "../uploads/$image";
        unlink($path);
    }

    header('Location: ../login.php');
}


?>