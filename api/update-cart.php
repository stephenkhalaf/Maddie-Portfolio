<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Cart Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['cart_id'])){
                        $id = $_GET['cart_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM cart WHERE id = $id");
                        $cart = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-cart-form">
                     <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off" value="<?php echo $cart['title'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" type="number" autocomplete="off" value="<?php echo $cart['price'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $cart['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Cart" id="update-cart"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $cart['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>