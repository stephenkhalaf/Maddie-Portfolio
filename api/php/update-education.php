<?php
include_once "../config/database.php";

$pri_name = mysqli_escape_string($conn, $_POST['pri_name']);
$pri_start_date = mysqli_escape_string($conn, $_POST['pri_start_date']);
$pri_end_date = mysqli_escape_string($conn, $_POST['pri_end_date']);
$pri_desc = mysqli_escape_string($conn, $_POST['pri_desc']);

$sec_name = mysqli_escape_string($conn, $_POST['sec_name']);
$sec_start_date = mysqli_escape_string($conn, $_POST['sec_start_date']);
$sec_end_date = mysqli_escape_string($conn, $_POST['sec_end_date']);
$sec_desc = mysqli_escape_string($conn, $_POST['sec_desc']);

$tet_name = mysqli_escape_string($conn, $_POST['tet_name']);
$tet_start_date = mysqli_escape_string($conn, $_POST['tet_start_date']);
$tet_end_date = mysqli_escape_string($conn, $_POST['tet_end_date']);
$tet_desc = mysqli_escape_string($conn, $_POST['tet_desc']);

$id = mysqli_escape_string($conn,$_POST['id']);
$error = "";


if(!empty($pri_name) && !empty($pri_start_date) && !empty($pri_end_date) && !empty($pri_desc) && 
   !empty($sec_name) && !empty($sec_start_date) && !empty($sec_end_date) && !empty($sec_desc) &&  
   !empty($tet_name) && !empty($tet_start_date) && !empty($tet_end_date) && !empty($tet_desc)
){
   
        $sql = mysqli_query($conn, "UPDATE education 
                SET pri_name = '$pri_name',pri_start_date = '$pri_start_date',pri_end_date = '$pri_end_date',pri_desc = '$pri_desc',
                    sec_name = '$sec_name',sec_start_date = '$sec_start_date',sec_end_date = '$sec_end_date',sec_desc = '$sec_desc',
                    tet_name = '$tet_name',tet_start_date = '$tet_start_date',tet_end_date = '$tet_end_date',tet_desc = '$sec_desc'
                WHERE id = $id");

            if($sql){
                echo "success";
            }else{
                $error = "
                    <div class='alert alert-danger'>
                            <strong>An error occurred!</strong>
                    </div>
                ";
            }

}else{
    $error = "<div class='alert alert-danger'>
                <strong>All Fields Are Required!</strong>
        </div>";
}

echo $error;

?>