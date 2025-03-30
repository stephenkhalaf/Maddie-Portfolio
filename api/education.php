<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                <h2>Education <button style="margin-left:30px; background:white;"><a href="add-education.php"><img src="assets/img/add.svg" alt="" style="font-weight:bold; font-size:100px;width:50px;height:50px;object-fit:cover;cursor:pointer"></a></button></h2>    
                </div>
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Primary</th>
                                    <th>Pri.  Start Date</th>
                                    <th>Pri.  End Date</th>
                                    <th>Pri. Desc.</th>
                                    <th>Secondary</th>
                                    <th>Sec. Start Date</th>
                                    <th>Sec. End Date</th>
                                    <th>Sec. Desc.</th>
                                    <th>Tetiary</th>
                                    <th>Tet. Start Date</th>
                                    <th>Tet. End Date</th>
                                    <th>Tet. Desc.</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM education");
                                    $id = 1;
                                    if(mysqli_num_rows($sql) > 0){
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "
                                            <tr>
                                            <td>$id</td>
                                            <td>".$row['pri_name']."</td>
                                            <td>".$row['pri_start_date']."</td>
                                            <td>".$row['pri_end_date']."</td>
                                            <td>".$row['pri_desc']."</td>
                                            <td>".$row['sec_name']."</td>
                                            <td>".$row['sec_start_date']."</td>
                                            <td>".$row['sec_end_date']."</td>
                                            <td>".$row['sec_desc']."</td>
                                            <td>".$row['tet_name']."</td>
                                            <td>".$row['tet_start_date']."</td>
                                            <td>".$row['tet_end_date']."</td>
                                            <td>".$row['tet_desc']."</td>
                                            <td>
                                                <a href='update-education.php?education_id=".$row['id']."' class='btn btn-success' >Update</a>
                                                <a href='php/delete.php?education_id=".$row['unique_id']."' class='btn btn-danger'>Delete</a>
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