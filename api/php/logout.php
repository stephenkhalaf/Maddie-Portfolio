<?php
include_once "../config/database.php";

if(isset($_SESSION['unique_id'])){
    unset($_SESSION['unique_id']);
    session_destroy();
    header('Location: ../login.php');
}
?>