<?php
include "../../api/config/database.php";

$userId = mysqli_real_escape_string($conn, $_POST['userId']);
$msgId = mysqli_real_escape_string($conn, $_POST['msgId']);

if(isset($_POST['msgId'])){
    $sql = mysqli_query($conn, "SELECT * FROM messages WHERE id = $msgId LIMIT 1");
    if($sql){
        $msg = mysqli_fetch_assoc($sql);
        $image = $msg['files'];
        $sql2 = mysqli_query($conn, "DELETE FROM messages WHERE id = $msgId LIMIT 1");
        if($sql2){
            $path = "../uploads/$image";
            unlink($path);
        }
    }
}


?>