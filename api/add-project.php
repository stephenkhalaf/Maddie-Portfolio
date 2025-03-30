<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Project</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-project-error">
                    </div>
                     <form action="" method="POST" id="add-project-form">
                        <div class="col-lg-12 col-md-12">

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
                                <input class="btn btn-success" name="submit" type="submit" value="Add Project" id="add-project"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>