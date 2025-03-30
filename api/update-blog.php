<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Blog Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['blog_id'])){
                        $id = $_GET['blog_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM blog WHERE id = $id");
                        $blog = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-blog-form">
                     <div class="col-lg-12 col-md-12">
                        
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" autocomplete="off" value="<?php echo $blog['description'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" autocomplete="off" value="<?php echo $blog['link'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $blog['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date" autocomplete="off" value="<?php echo $blog['date'] ?>"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Blog" id="update-blog"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $blog['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>