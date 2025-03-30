<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Admin</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['admin_id'])){
                        $id = $_GET['admin_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = $id");
                        $admin = mysqli_fetch_assoc($sql);
                    }

                    ?>
                     <form action="" method="POST" id="update-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="fullname" value="<?php echo $admin['full_name']; ?>" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email"  value="<?php echo $admin['email']; ?>" type="email" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" value="<?php echo $admin['password']; ?>" autocomplete="off" type="text"/>
                            </div>

                            <div class="form-group">
                                <label>Admin Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Normal Admin" <?php if($admin['type'] == 'Normal Admin') echo "selected"; ?>>Normal Admin</option>
                                    <option value="Super Admin" <?php if($admin['type'] == 'Super Admin') echo "selected"; ?>>Super Admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Admin" id="update-admin"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $admin['id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>