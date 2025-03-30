<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Picture Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['picture_id'])){
                        $id = $_GET['picture_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM pictures WHERE id = $id");
                        $picture = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-picture-form">
                     <div class="col-lg-12 col-md-12">
                        

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $picture['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Picture" id="update-picture"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $picture['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>