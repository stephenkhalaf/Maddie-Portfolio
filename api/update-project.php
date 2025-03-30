<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Project Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['project_id'])){
                        $id = $_GET['project_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM projects WHERE id = $id");
                        $project = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-project-form">
                     <div class="col-lg-12 col-md-12">
                          
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off" value="<?php echo $project['title'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" autocomplete="off" value="<?php echo $project['description'] ?>"/>
                            </div>


                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" autocomplete="off" value="<?php echo $project['link'] ?>"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Project" id="update-project"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $project['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>