<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                <h2>Admin <button style="margin-left:30px; background:white;"><a href="add-admin.php"><img src="assets/img/add.svg" alt="" style="font-weight:bold; font-size:100px;width:50px;height:50px;object-fit:cover;cursor:pointer"></a></button></h2>   
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Admin Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM admin");
                                    $id = 1;
                                    if(mysqli_num_rows($sql) > 0){
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "
                                            <tr>
                                            <td>$id</td>
                                            <td>".$row['full_name']."</td>
                                            <td>".$row['email']."</td>
                                            <td>".$row['type']."</td>
                                            <td>
                                                <a href='update-admin.php?admin_id=".$row['id']."' class='btn btn-success' >Update</a>
                                                <a href='php/delete.php?admin_id=".$row['unique_id']."' class='btn btn-danger'>Delete</a>
                                            </td>
                                            </tr>
                                            
                                            ";
                                            $id++;
                                        };
                                    }else{
                                        echo "No data";
                                    }

                                ?>
                            </tbody>
                        </table>
                </div>
            </div>


            
        </div>
    </div>
<?php  include_once "./partials/footer.php"?>