<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Cart</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-cart-error">
                    </div>
                     <form action="" method="POST" id="add-cart-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" name="price" autocomplete="off"/>
                            </div>
                        
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>


                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Cart" id="add-cart"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>