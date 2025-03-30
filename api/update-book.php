<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Book Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['book_id'])){
                        $id = $_GET['book_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM books WHERE id = $id");
                        $book = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-book-form">
                     <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Book Type</label>
                                <select name="type" id="" class="form-control">
                                    <option value="Data Science"  <?php if($book['type'] == 'Data Science') echo "selected"; ?>>Data Science</option>
                                    <option value="Web Development" <?php if($book['type'] == 'Web Development') echo "selected"; ?>>Web Development</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" autocomplete="off" value="<?php echo $book['title'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" autocomplete="off" value="<?php echo $book['description'] ?>"/>
                            </div>


                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" autocomplete="off" value="<?php echo $book['link'] ?>"/>
                            </div>

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $book['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Update Book" id="update-book"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $book['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>