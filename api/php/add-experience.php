<?php
include_once "../config/database.php";

$name = mysqli_escape_string($conn, $_POST['name']);
$start_date = mysqli_escape_string($conn, $_POST['start_date']);
$end_date = mysqli_escape_string($conn, $_POST['end_date']);
$description = mysqli_escape_string($conn, $_POST['desc']);

$error = "";

if((!empty($name) && !empty($start_date) && !empty($end_date) && !empty($description))){
        $unique_id = time();

        $sql = mysqli_query($conn, "INSERT INTO experience (unique_id,name,start_date,end_date,description) 
            VALUES ($unique_id,'$name','$start_date','$end_date','$description') ");

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