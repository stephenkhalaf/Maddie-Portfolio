<?php
include_once "../config/database.php";

$name = mysqli_escape_string($conn, $_POST['name']);
$start_date = mysqli_escape_string($conn, $_POST['start_date']);
$end_date = mysqli_escape_string($conn, $_POST['end_date']);
$desc = mysqli_escape_string($conn, $_POST['desc']);


$id = mysqli_escape_string($conn,$_POST['id']);
$error = "";


if((!empty($name) && !empty($start_date) && !empty($end_date) && !empty($desc))){
   
        $sql = mysqli_query($conn, "UPDATE experience 
                SET name = '$name',start_date = '$start_date',end_date = '$end_date',desc = '$desc'
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