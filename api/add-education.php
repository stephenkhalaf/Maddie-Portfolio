<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Education</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-education-error">
                    </div>
                     <form action="" method="POST" id="add-education-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Primary School</label>
                                <input class="form-control" name="pri_name" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Primary School Start Date</label>
                                <input class="form-control" name="pri_start_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Primary School End Date</label>
                                <input class="form-control" name="pri_end_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Primary School Description</label>
                                <select name="pri_desc" id="" class="form-control">
                                    <option value="First Class">First Class</option>
                                    <option value="Second Class Upper">Second Class Upper</option>
                                    <option value="Second Class Lower">Second Class Lower</option>
                                    <option value="Third Class">Third Class</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Secondary School</label>
                                <input class="form-control" name="sec_name" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Secondary School Start Date</label>
                                <input class="form-control" name="sec_start_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Secondary School End Date</label>
                                <input class="form-control" name="sec_end_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Secondary School Description</label>
                                <select name="sec_desc" id="" class="form-control">
                                    <option value="First Class">First Class</option>
                                    <option value="Second Class Upper">Second Class Upper</option>
                                    <option value="Second Class Lower">Second Class Lower</option>
                                    <option value="Third Class">Third Class</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School</label>
                                <input class="form-control" name="tet_name" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School Start Date</label>
                                <input class="form-control" name="tet_start_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School End Date</label>
                                <input class="form-control" name="tet_end_date" autocomplete="off" type='date'/>
                            </div>

                            <div class="form-group">
                                <label>Tetiary School Description</label>
                                <select name="tet_desc" id="" class="form-control">
                                    <option value="First Class">First Class</option>
                                    <option value="Second Class Upper">Second Class Upper</option>
                                    <option value="Second Class Lower">Second Class Lower</option>
                                    <option value="Third Class">Third Class</option>
                                </select>
                            </div>

                            

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add Education" id="add-education"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>