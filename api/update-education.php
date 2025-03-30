<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Education</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['education_id'])){
                        $id = $_GET['education_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM education WHERE id = $id");
                        $education = mysqli_fetch_assoc($sql);
                    }
                    ?>
                     <form action="" method="POST" id="update-education-form">
                        <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                                <label>Primary School</label>
                                <input class="form-control" name="pri_name" autocomplete="off" value="<?php echo $education['pri_name'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Primary School Start Date</label>
                                <input class="form-control" name="pri_start_date" autocomplete="off" type='date' value="<?php echo date($education['pri_start_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Primary School End Date</label>
                                <input class="form-control" name="pri_end_date" autocomplete="off" type='date' value="<?php echo date($education['pri_end_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Primary School Description</label>
                                <select name="pri_desc" id="" class="form-control">
                                    <option value="First Class" <?php if($education['pri_desc'] == 'First Class') echo "selected"; ?>>First Class</option>
                                    <option value="Second Class Upper" <?php if($education['pri_desc'] == 'Second Class Upper') echo "selected"; ?>>Second Class Upper</option>
                                    <option value="Second Class Lower" <?php if($education['pri_desc'] == 'Second Class Lower') echo "selected"; ?>>Second Class Lower</option>
                                    <option value="Third Class" <?php if($education['pri_desc'] == 'Third Class') echo "selected"; ?>>Third Class</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Secondary School</label>
                                <input class="form-control" name="sec_name" autocomplete="off" value="<?php echo $education['sec_name'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Secondary School Start Date</label>
                                <input class="form-control" name="sec_start_date" autocomplete="off" type='date' value="<?php echo date($education['sec_start_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Secondary School End Date</label>
                                <input class="form-control" name="sec_end_date" autocomplete="off" type='date' value="<?php echo date($education['sec_end_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Secondary School Description</label>
                                <select name="sec_desc" id="" class="form-control">
                                    <option value="First Class" <?php if($education['sec_desc'] == 'First Class') echo "selected"; ?>>First Class</option>
                                    <option value="Second Class Upper" <?php if($education['sec_desc'] == 'Second Class Upper') echo "selected"; ?>>Second Class Upper</option>
                                    <option value="Second Class Lower" <?php if($education['sec_desc'] == 'Second Class Lower') echo "selected"; ?>>Second Class Lower</option>
                                    <option value="Third Class" <?php if($education['sec_desc'] == 'Third Class') echo "selected"; ?>>Third Class</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School</label>
                                <input class="form-control" name="tet_name" autocomplete="off" value="<?php echo $education['tet_name'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School Start Date</label>
                                <input class="form-control" name="tet_start_date" autocomplete="off" type='date' value="<?php echo date($education['tet_start_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School End Date</label>
                                <input class="form-control" name="tet_end_date" autocomplete="off" type='date' value="<?php echo date($education['tet_end_date']) ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School Description</label>
                                <select name="tet_desc" id="" class="form-control">
                                    <option value="First Class" <?php if($education['tet_desc'] == 'First Class') echo "selected"; ?>>First Class</option>
                                    <option value="Second Class Upper" <?php if($education['tet_desc'] == 'Second Class Upper') echo "selected"; ?>>Second Class Upper</option>
                                    <option value="Second Class Lower" <?php if($education['tet_desc'] == 'Second Class Lower') echo "selected"; ?>>Second Class Lower</option>
                                    <option value="Third Class" <?php if($education['tet_desc'] == 'Third Class') echo "selected"; ?>>Third Class</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Education" id="update-education"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $education['id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>