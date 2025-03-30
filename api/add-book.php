<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Book</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-book-error">
                    </div>
                     <form action="" method="POST" id="add-book-form">
                        <div class="col-lg-12 col-md-12">

                            <div class="form-group">
                                <label>Book Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Data Science">Data Science</option>
                                    <option value="Web Development">Web Development</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" autocomplete="off"/>
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>


                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Book" id="add-book"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>