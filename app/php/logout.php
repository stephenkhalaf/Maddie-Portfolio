<?php
include "../../api/config/database.php";

if(isset($_SESSION['unique_id'])){
    $id = $_SESSION['unique_id'];
    unset($_SESSION['unique_id']);
    session_destroy();
    $sql = mysqli_query($conn, "UPDATE users SET status = 'Offline' WHERE unique_id = $id LIMIT 1");
    header('Location: ../../index.php');
}
?>