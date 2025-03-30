<?php  include_once "./partials/header.php"?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />

                  <?php
                  if(isset($_SESSION['unique_id'])){
                    $unique_id = $_SESSION['unique_id'];
                  }
                  
                  $sql = mysqli_query($conn, "SELECT * FROM admin WHERE unique_id = $unique_id");
                  if(mysqli_num_rows($sql) > 0){
                    $user = mysqli_fetch_assoc($sql);
                  }

                  ?>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info text-center">
                            <?php if(isset($user)){ ?>
                            <strong>Welcome <?php echo $user['full_name'] ?></strong>
                                
                            <?php }else{?>

                                <strong>Hi, there !</strong>
                            <?php
                            }
                            ?>
        
                        </div>
                       
                    </div>
                </div>
              
             </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->

          
<?php include_once "./partials/footer.php" ?>
