<?php  include_once "./partials/header.php"?>
    <div id="page-wrapper" >
        <div id="page-inner">

            <div class="row">
                <div class="col-lg-12">
                    <h2>Add About</h2>  
                </div>
                
            </div>              
            <hr />
            <div class="row">
                <div class="col-lg-12 ">
                    <div  id="add-about-error">
                    </div>
                     <form action="" method="POST" id="add-about-form">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" autocomplete="off"/>
                            </div>

                            <div class="form-group">
                                <label>Degree</label>
                                <select name="degree" id="" class="form-control">
                                    <option value="bsc">B.SC</option>
                                    <option value="master">Master</option>
                                    <option value="phd">P.H.D</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" autocomplete="off" type="tel"/>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control" name="address" autocomplete="off"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Birthday</label>
                                <input class="form-control" name="birthday" autocomplete="off" type="date"/>  
                            </div>

                            <div class="form-group">
                                <label>Experience</label>
                                <input class="form-control" name="experience" autocomplete="off" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" autocomplete="off" type="email"/>
                            </div>

                            <div class="form-group">
                                <label>Freelance</label>
                                <select name="freelance" id="" class="form-control">
                                    <option value="Available">Available</option>
                                    <option value="Unavailable">Not Available</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Image 1</label>
                                <input class="form-control" name="image1" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <label>Image 2</label>
                                <input class="form-control" name="image2" autocomplete="off" type="file"/>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" name="submit" type="submit" value="Add About" id="add-about"/>
                            </div>

                            
                        </div>
                    </form>
                    
                </div>
            </div>


            
        </div>
    </div>

<?php  include_once "./partials/footer.php"?>