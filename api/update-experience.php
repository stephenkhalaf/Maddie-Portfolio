<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Experience</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['experience_id'])){
                        $id = $_GET['experience_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM experience WHERE id = $id");
                        $experience = mysqli_fetch_assoc($sql);
                    }
                    ?>
                     <form action="" method="POST" id="update-experience-form">
                        <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" autocomplete="off" value="<?php echo $experience['name'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" name="start_date" autocomplete="off" type='date' value="<?php echo date($experience['start_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" name="end_date" autocomplete="off" type='date' value="<?php echo date($experience['end_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="desc" autocomplete="off" value="<?php echo $experience['desc'] ?>"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Experience" id="update-experience"/>
                            <input type="hidden" name="id" value="<?php echo $experience['id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>