<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Update Story Page</h2>   
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="error">
                    </div>
                    <?php
                    if(isset($_GET['story_id'])){
                        $id = $_GET['story_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM story WHERE id = $id");
                        $story = mysqli_fetch_assoc($sql);
        
                    }

                    ?>
                     <form action="" method="POST" id="update-story-form">
                        <div class="col-lg-12 col-md-12">

                            <div class="form-group">
                                <label>Story</label>
                                <textarea class="form-control" name="story" id="summernote" rows="10" ><?php echo $story['story'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Old Image </label><br>
                                <img src="../uploads/<?php echo $story['image']  ?>" alt="" style="object-fit:cover;width:200px;height:200px">
                            </div>

                            <div class="form-group">
                                <label>Change Image</label>
                                <input class="form-control" name="image" autocomplete="off" type="file"/>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" name="submit"  type="submit" value="Update Story" id="update-story"/>
                            </div>

                            <input type="hidden" name="id" value="<?php echo $story['unique_id'] ?>">
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>

<script src="assets/summernote/summernote-lite.min.js"></script>
<link rel="stylesheet" href="assets/summernote/summernote-lite.min.css">
<script>
    $(document).ready(function(){
        $('#summernote').summernote({height:250})
    })
</script>