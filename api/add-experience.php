<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Experience</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-experience-error">
                    </div>
                     <form action="" method="POST" id="add-experience-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" name="start_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" name="end_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="desc" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Experience" id="add-experience"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>