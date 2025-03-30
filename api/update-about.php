<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update About Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['about_id'])){
                        $id = $_GET['about_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM about WHERE id = $id");
                        $about = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-about-form">
                     <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" autocomplete="off" value="<?php echo $about['name'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Degree</label>
                                <select name="degree" id="" class="form-control">
                                    <option value="bsc" <?php if($about['degree'] == 'bsc') echo "selected"; ?>>B.SC</option>
                                    <option value="Master" <?php if($about['degree'] == 'master') echo "selected"; ?>>Master</option>
                                    <option value="phd" <?php if($about['degree'] == 'phd') echo "selected"; ?>>P.H.D</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" autocomplete="off" type="tel" value="<?php echo $about['phone'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" autocomplete="off" value="<?php echo $about['address'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Birthday</label>
                                <input class="form-control" name="birthday" autocomplete="off" type="date" value="<?php echo date($about['birthday']);?>"/>  
                            </div>

                            <div class="form-group">
                                <label>Experience</label>
                                <input class="form-control" name="experience" autocomplete="off" value="<?php echo $about['experience'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" autocomplete="off" type="email" value="<?php echo $about['email'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Freelance</label>
                                <select name="freelance" id="" class="form-control">
                                    <option value="Available" <?php if($about['freelance'] == 'Available') echo "selected"; ?>>Available</option>
                                    <option value="Unavailable" <?php if($about['freelance'] == 'Unavailable') echo "selected"; ?>>Not Available</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Old Image 1</label><br>
                                <img src="../uploads/<?php echo $about['image1']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image 1</label>
                                <input class="form-control" name="image1" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image 2</label><br>
                                <img src="../uploads/<?php echo $about['image2'] ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image 2</label>
                                <input class="form-control" name="image2" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update About" id="update-about"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $about['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>