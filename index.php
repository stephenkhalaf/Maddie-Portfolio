<?php include "api/config/database.php" ?>
<?php
$sql = mysqli_query($conn, "SELECT * FROM about LIMIT 1");
if (mysqli_num_rows($sql) == 1) {
    $about = mysqli_fetch_assoc($sql);
} else {
    die('<h2> Page not Found </h2>');
}

$sql2 = mysqli_query($conn, "SELECT * FROM education LIMIT 1");
if (mysqli_num_rows($sql2) == 1) {
    $education = mysqli_fetch_assoc($sql2);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FreeFolio - Freelancer Portfolio Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/language.css">
    <link rel="stylesheet" href="css/text2image.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/medical.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">Port</span>Folio</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#qualification" class="nav-item nav-link">Quality</a>
                <a href="#skill" class="nav-item nav-link">Skill</a>
                <a href="#service" class="nav-item nav-link">Books</a>
                <a href="#project" class="nav-item nav-link">Projects</a>
                <a href="#story" class="nav-item nav-link">Life Story</a>
                <a href="#blog" class="nav-item nav-link">Blog</a>
                <a href="#medical" class="nav-item nav-link">Medicine</a>
                <a href="#competitions" class="nav-item nav-link">Data Science</a>
                <a href="#pictures" class="nav-item nav-link">Maddie</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="app/index.php" class="btn btn-outline-primary d-none d-lg-block"> Chat App</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div> -->

                    <div class="embed-responsive embed-responsive-16by9" style="width: 100%;height:100%">
                        <video class="embed-responsive-item" id="video" style="width: 100%; height: 100%;">
                            <!-- Example video file, replace with your own file -->
                            <source src="maddie.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="uploads/<?php echo $about['image1'] ?>" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;"><?php echo $about['name'] ?></h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Data Scientist, Mathematician, NLP Expert, PHP Developer, Node.js Developer, R Programmer, Statistician</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="Data Scientist.pdf" class="btn btn-outline-light mr-5" alt="Data Scientist Resume" alt="Data Scientist Resume" download>Download CV</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="uploads/<?php echo $about['image2'];  ?>" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Data Scientist</h3>
                    <p>
                        Miss Maddie is a proficient data scientist based in London, specializing in
                        data analysis and machine learning. With a background in statistics and
                        computer science, she excels at uncovering insights from complex datasets
                        and developing predictive models.</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2">
                            <h6><strong>Name:</strong> <span class="text-secondary"><?php echo $about['name'] ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Birthday:</strong> <span class="text-secondary"><?php echo $about['birthday'] ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Degree:</strong> <span class="text-secondary"><?php echo ucfirst($about['degree']) ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Experience:</strong> <span class="text-secondary"><?php echo $about['experience'] ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Phone:</strong> <span class="text-secondary"><?php echo $about['phone'] ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Email:</strong> <span class="text-secondary"><?php echo $about['email'] ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Address:</strong> <span class="text-secondary"><?php echo $about['address'] ?></span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6><strong>Freelance:</strong> <span class="text-secondary"><?php echo $about['freelance'] ?></span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-2"><?php echo $education['tet_name'] ?></h5>
                            <p class="mb-2"><strong>Start Date:</strong> <?php echo $education['tet_start_date'] ?></p>
                            <p class="mb-2"><strong>End Date:</strong> <?php echo $education['tet_end_date'] ?></p>
                            <p><strong>Grade: </strong><?php echo $education['tet_desc'] ?></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-2"><?php echo $education['sec_name'] ?></h5>
                            <p class="mb-2"><strong>Start Date:</strong> <?php echo $education['sec_start_date'] ?></p>
                            <p class="mb-2"><strong>End Date:</strong> <?php echo $education['sec_end_date'] ?></p>
                            <p><strong>Grade: </strong><?php echo $education['sec_desc'] ?></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-2"><?php echo $education['pri_name'] ?></h5>
                            <p class="mb-2"><strong>Start Date:</strong> <?php echo $education['pri_start_date'] ?></p>
                            <p class="mb-2"><strong>End Date:</strong> <?php echo $education['pri_end_date'] ?></p>
                            <p><strong>Grade: </strong><?php echo $education['pri_desc'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">

                        <?php
                        $sql3 = mysqli_query($conn, 'SELECT * FROM experience LIMIT 3');
                        if (mysqli_num_rows($sql3) > 0) {
                            while ($row = mysqli_fetch_assoc($sql3)) {

                        ?>
                                <div class="position-relative mb-4">
                                    <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                                    <h5 class="font-weight-bold mb-2"><?php echo $row['name'] ?></h5>
                                    <p class="mb-2"><strong>Start Date:</strong> <?php echo $row['start_date'] ?></p>
                                    <p class="mb-2"><strong>End Date:</strong> <?php echo $row['end_date'] ?></p>
                                    <p><strong>Job Description: </strong><?php echo $row['description'] ?></p>
                                </div>


                        <?php
                            }
                        } else {
                            echo "<h3 style='margin:0 auto;'>No Experience</h3>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Javascript (Node.js)</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">65%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP (MySQL)</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">MongoDB</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Python (Data Science)</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">R Programming</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Statistics</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Data Science Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Books</h1>
                <h1 class="position-absolute text-uppercase text-primary">Data Science</h1>
            </div>
            <div class="row pb-3">
                <?php

                $sql4 = mysqli_query($conn, "SELECT * FROM books WHERE type = 'Data Science' LIMIT 6");
                if (mysqli_num_rows($sql4) > 0) {
                    while ($row = mysqli_fetch_assoc($sql4)) {

                ?>

                        <div class="col-lg-4 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <img src="uploads/<?php echo $row['image'] ?>" alt="" class="book">
                            </div>
                            <h4 class="font-weight-light m-1"><a href="<?php echo $row['link'] ?>" target="_blank"><?php echo $row['title'] ?></a></h4>
                            <p><?php echo $row['description'] ?></p>
                            <a class="border-bottom border-primary text-decoration-none" href="https://drive.google.com/drive/folders/1f35Iio5Ae0a-PVxFkL4PfJPFW26xaEgP" target="_blank">More Books</a>
                        </div>

                    <?php

                    }
                } else {

                    ?>
                    <h3 style="margin: 0 auto;">No Books on Data Science</h3>

                <?php

                }

                ?>
            </div>
        </div>
    </div>
    <!-- Data Science End -->


    <!-- Web Development Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Books</h1>
                <h1 class="position-absolute text-uppercase text-primary">Web Development</h1>
            </div>
            <div class="row pb-3">
                <?php

                $sql4 = mysqli_query($conn, "SELECT * FROM books WHERE type = 'Web Development' LIMIT 6");
                if (mysqli_num_rows($sql4) > 0) {
                    while ($row = mysqli_fetch_assoc($sql4)) {

                ?>

                        <div class="col-lg-4 col-md-6 text-center mb-5">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <img src="uploads/<?php echo $row['image'] ?>" alt="" class="book">
                            </div>
                            <h4 class="font-weight-light m-1"><a href="<?php echo $row['link'] ?>" target="_blank"><?php echo $row['title'] ?></a></h4>
                            <p><?php echo $row['description'] ?></p>
                            <a class="border-bottom border-primary text-decoration-none" href="https://drive.google.com/drive/folders/1f35Iio5Ae0a-PVxFkL4PfJPFW26xaEgP" target="_blank">More Books</a>
                        </div>

                    <?php

                    }
                } else {

                    ?>
                    <h3 style="margin: 0 auto;">No Books on Web Development</h3>

                <?php

                }

                ?>
            </div>
        </div>
    </div>
    <!-- Web Development End -->


    <!-- Language Translator Start -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Language Translator</h1>
            </div>
            <div class="row-container ">
            <div style="text-align: center; font-variant:small-caps; color:green">note: there's a grammar corrector here implemented using javascript debouncing technique</div>
                <div style=" margin-bottom:20px; text-align:center;" class="error-text"> </div>
                <div class="wrapper">
                    <div class="text-input">
                        <textarea spellcheck="false" class="from-text" placeholder="Enter text"></textarea>
                        <textarea spellcheck="false" readonly disabled class="to-text" placeholder="Translation"></textarea>
                    </div>
                    <ul class="controls">
                        <li class="row from">
                            <div class="icons">
                                <i id="from" class="fas fa-volume-up"></i>
                                <i id="from" class="fas fa-copy"></i>
                            </div>
                            <select id="0"></select>
                        </li>
                        <li class="exchange"><i class="fas fa-exchange-alt"></i></li>
                        <li class="row to">
                            <select id="1"></select>
                            <div class="icons">
                                <i id="to" class="fas fa-volume-up"></i>
                                <i id="to" class="fas fa-copy"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="language-btn">Translate Text</button>
            </div>

        </div>

    </div>
    <!-- Language Translator End -->

    <!-- Text to Image Start -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Text to Image</h1>
            </div>

            <div class="row-container ">
                <div style=" margin-bottom:20px; text-align:center;" class="error-text2image"></div>
                <div class="wrapper">
                    <div class="text-image">
                        <textarea spellcheck="false" class="from-text" placeholder="Type any word... " id="text-input"></textarea>
                        <div id="image-container">
                            <div class='alert alert-success text-center' style=" margin-top:150px;"><strong>Image will appear here...</strong></div>
                        </div>
                    </div>

                </div>
                <button id="generate-image-button">Text to Image</button>
            </div>

        </div>
    </div>
    <!-- Text to Image End -->


    <!-- Image to Text Start -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Image to Text</h1>
            </div>

            <div class="row-container ">
            <div style="text-align: center; font-variant:small-caps; color:green">note: the image is added using javascript blob url to make the page lightweight</div>
                <div style=" margin-bottom:20px; text-align:center;" class="error-image2text"></div>
                <div class="wrapper">
                    <div class="text-image">
                        <div class="text-image-container">
                            <div id="imagePreview">
                                <img id="previewImg" src="ui/image2text.jfif" alt="Your Image" style="height: 300px; width:300px; object-fit: cover;" />
                            </div>
                            <label for="image-input" style="background:#0BCEAF;color:white;display:block;padding:12px 40px;margin-top:5px;border-radius:10px;cursor:pointer">Select Image</label>
                            <input type="file" id="image-input" accept="image/*" style="display:none">
                        </div>
                        <div id="text-output-container">
                            <h3 style="margin-top:50px;margin-left:30px; padding:20px;">Text will appear here...</h3>
                        </div>
                    </div>

                </div>
                <button id="generate-text-button">Image to Text</button>
            </div>

        </div>
    </div>
    <!-- Image to Text End -->


    <!-- Text Generation Start -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Text Generation</h1>
            </div>
            <div class="row-container ">
                <div style=" margin-bottom:20px; text-align:center;" class="error-textgen"> </div>
                <div class="wrapper">
                    <div class="text-input">
                        <textarea spellcheck="false" class="from-text" id="from-text" placeholder="Enter text"></textarea>
                        <textarea spellcheck="false" readonly disabled class="to-text" id="to-text" placeholder="Generated Text"></textarea>
                    </div>
                </div>
                <button id="textgen">Generate Text</button>
            </div>

        </div>

    </div>
    <!-- Text Generation End -->



    <!-- Text Summarization Start -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Text Summarization</h1>
            </div>
            <div class="row-container ">
                <div style=" margin-bottom:20px; text-align:center;" class="error-textsum"> </div>
                <div class="wrapper">
                    <div class="text-input">
                        <textarea spellcheck="false" class="from-text" id="from-textsum" placeholder="Enter text"></textarea>
                        <textarea spellcheck="false" readonly disabled class="to-text" id="to-textsum" placeholder="Summarized Text"></textarea>
                    </div>
                </div>
                <button id="textsum">Summarize Text</button>
            </div>

        </div>

    </div>
    <!-- Text Summarization End -->


    <!-- QA Start -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Question and Answering</h1>
            </div>
            <div class="row-container ">
                <div style=" margin-bottom:20px; text-align:center;" class="error-textqa"> </div>
                <div class="wrapper">
                    <div class="text-input" style="height:300px; width:100%;">
                        <textarea spellcheck="false" class="from-text" id="from-textqa" placeholder="Enter text" style="height:300px; width:50%; overflow-y:auto"></textarea>
                        <div style="display:flex; flex-direction:column; justify-content:space-between; width:50%; height:300px">
                            <textarea spellcheck="false" class="to-text" id="to-textquestion" placeholder="Ask Question here..." style="border:1px solid blue; margin-bottom:10px;  height:50px"></textarea>
                            <textarea spellcheck="false" readonly disabled class="to-text" id="to-textanswer" placeholder="Answer..." style="border:1px solid green; margin-top:20px;"></textarea>
                        </div>
                    </div>
                </div>
                <button id="textqa">Question and Answering</button>
            </div>

        </div>

    </div>
    <!-- QA End -->




    <!-- Shopping Cart Begins -->
    <div class="container-fluid pt-5" id="project">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Shopping Cart</h1>
            </div>
            <div class="row align-items-center">
                <section class="content-section">
                    <div class="shop-items">
                        <?php

                        $sql5 = mysqli_query($conn, "SELECT * FROM cart LIMIT 6");
                        if (mysqli_num_rows($sql5) > 0) {
                            while ($row = mysqli_fetch_assoc($sql5)) {

                        ?>
                                <div class="shop-item">
                                    <img class="shop-item-image" src="uploads/<?php echo $row['image']  ?>">
                                    <div class="shop-item-details">
                                        <span class="shop-item-price">$<?php echo $row['price']  ?></span>
                                        <button class="btn-shop btn-primary-shop shop-item-button" type="button" data-id="1">ADD TO CART</button>
                                    </div>
                                    <span class="shop-item-title"><?php echo $row['title']  ?></span>
                                </div>
                            <?php

                            }
                        } else {

                            ?>
                            <h3 style="width:100%;margin:0 auto">No Books Available</h3>

                        <?php

                        }

                        ?>
                    </div>
                </section>
                <section class="cart-section">
                    <h2 class="section-header">CART</h2>
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">ITEM</span>
                        <span class="cart-price cart-header cart-column">PRICE</span>
                        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                    </div>
                    <div class="cart-items">

                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Total</strong>
                        <span class="cart-total-price">0</span>
                    </div>

                    <button class="btn btn-primary btn-purchase" type="button" style="display:block;margin:20px auto;">PURCHASE</button>
                </section>
            </div>

        </div>
    </div>
    <!-- Shopping Cart End -->

    <!-- My Life Story Start -->
    <div class="container-fluid pt-5 pb-3" id="story">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Story</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Life Story</h1>
            </div>

            <?php

            $sql6 = mysqli_query($conn, "SELECT * FROM story");

            if (mysqli_num_rows($sql6) > 0) {
            ?>
                <div id="storyCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $active = true;
                        while ($row = mysqli_fetch_assoc($sql6)) {
                        ?>
                            <div class="carousel-item <?php if ($active) {
                                                            echo 'active';
                                                            $active = false;
                                                        } ?>">
                                <div class="portfolio-text">
                                    
                                    <div>
                                        <?php echo $row['story'] ?>
                                        <?php if($row['image']  != '') {?>
                                            <img style="width:300px;height:300px;object-fit:cover" src="uploads/<?php  echo $row['image'] ?>" alt="">
                                        <?php } ?>
                                    </div>
                                    
                                </div>
                            </div>

                        <?php

                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#storyCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#storyCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <?php
            } else {
            ?>
                <h3 style="width:100%;margin:0 auto">No Story Available</h3>
            <?php
            }
            ?>
           
        </div>
    </div>
    <!-- My Life Story End -->





    <!-- Blog Start -->
    <div class="container-fluid pt-5" id="blog">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Blog</h1>
                <h1 class="position-absolute text-uppercase text-primary">Latest Blog</h1>
            </div>
            <div class="row">

                <?php

                $sql6 = mysqli_query($conn, "SELECT * FROM blog ORDER BY date DESC");

                $limit = 6;
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($page - 1) * $limit;
                $total = mysqli_num_rows($sql6);
                $totalPages = ceil($total / $limit);

                $sql6 = mysqli_query($conn, "SELECT * FROM blog ORDER BY date DESC  LIMIT $limit OFFSET $offset");


                if (mysqli_num_rows($sql6) > 0) {
                    while ($row = mysqli_fetch_assoc($sql6)) {

                ?>
                        <div class="col-lg-4 mb-5">
                            <div class="position-relative mb-4">
                                <img class="img-fluid rounded w-100" style="width:300px;height:300px;object-fit:cover;" src="uploads/<?php echo $row['image'] ?>" alt="">
                                <div class="blog-date">
                                    <h4 class="font-weight-bold mb-n1"><?php
                                                                        $date = new DateTime($row['date']);
                                                                        echo $date->format('d');
                                                                        ?></h4>
                                    <small class="text-white text-uppercase"><?php
                                                                                $date = new DateTime($row['date']);
                                                                                echo $date->format('M');
                                                                                ?></small>
                                </div>
                            </div>
                            <h5 class="font-weight-medium mb-4 blog-text" style="height:40px;"><?php echo $row['description']; ?></h5>

                            <div class="like-div">
                                <button class="likeButton" data-id="<?php echo $row['id'] ?>"><i class="fas fa-heart"></i></button>
                                <span class="likeCount" data-id="<?php echo $row['id'] ?>">0</span>
                                <a class="btn btn-sm btn-outline-primary py-2" href="<?php echo $row['link']; ?>" target="_blank">Read More</a>
                            </div>


                        </div>

                    <?php

                    }
                } else {

                    ?>
                    <h3 style="width:100%;margin:0 auto">No Blogs Available</h3>

                <?php

                }

                ?>
            </div>


            <div class="pagination" id="pagination">
                <?php if ($page > 1): ?>
                    <a href="index.php?page=<?= $page - 1; ?>#blog" onclick="scrollToPaginationBlog()">Previous</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i == $page): ?>
                        <strong><?= $i; ?></strong>
                    <?php else: ?>
                        <a href="index.php?page=<?= $i; ?>#blog" onclick="scrollToPaginationBlog()"><?= $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <a href="index.php?page=<?= $page + 1; ?>#blog" onclick="scrollToPaginationBlog()">Next</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Medical Recommendation System Start -->
    <div class="container-fluid pt-5" id="medical">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Project</h1>
                <h1 class="position-absolute text-uppercase text-primary">Recommendation System</h1>
            </div>
        </div>
        <div class="medical-container">
            <div style="text-align: center; font-variant:small-caps; color:red">Note: if the prediction gives undefined, let me know... i might have gotten a spelling wrong</div>
            <h1 id="medical-title">
                <div class='alert alert-success text-danger'>Select Your Symptoms</div>
            </h1>
            <form id="symptomForm" method="POST">
                <div id="loader" class="loader_off"><img src="uploads/giphy.gif" alt=""></div>
                <div class="flex-container">
                    <div class="symptom-group">
                        <input type="checkbox" id="itching" name="itching" value="itching">
                        <label for="itching">Itching</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="skin_rash" name="skin_rash" value="skin_rash">
                        <label for="skin_rash">Skin Rash</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="nodal_skin_eruptions" name="nodal_skin_eruptions" value="nodal_skin_eruptions">
                        <label for="nodal_skin_eruptions">Nodal Skin Eruptions</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="continuous_sneezing" name="continuous_sneezing" value="continuous_sneezing">
                        <label for="continuous_sneezing">Continuous Sneezing</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="shivering" name="shivering" value="shivering">
                        <label for="shivering">Shivering</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="chills" name="chills" value="chills">
                        <label for="chills">Chills</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="joint_pain" name="joint_pain" value="joint_pain">
                        <label for="joint_pain">Joint Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="stomach_pain" name="stomach_pain" value="stomach_pain">
                        <label for="stomach_pain">Stomach Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="acidity" name="acidity" value="acidity">
                        <label for="acidity">Acidity</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="ulcers_on_tongue" name="ulcers_on_tongue" value="ulcers_on_tongue">
                        <label for="ulcers_on_tongue">Ulcers on Tongue</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="muscle_wasting" name="muscle_wasting" value="muscle_wasting">
                        <label for="muscle_wasting">Muscle Wasting</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="vomiting" name="vomiting" value="vomiting">
                        <label for="vomiting">Vomiting</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="burning_micturition" name="burning_micturition" value="burning_micturition">
                        <label for="burning_micturition">Burning Micturition</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="spotting_urination" name="spotting_urination" value="spotting_urination">
                        <label for="spotting_urination">Spotting Urination</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="fatigue" name="fatigue" value="fatigue">
                        <label for="fatigue">Fatigue</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="weight_gain" name="weight_gain" value="weight_gain">
                        <label for="weight_gain">Weight Gain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="anxiety" name="anxiety" value="anxiety">
                        <label for="anxiety">Anxiety</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="cold_hands_and_feets" name="cold_hands_and_feets" value="cold_hands_and_feets">
                        <label for="cold_hands_and_feets">Cold Hands and Feet</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="mood_swings" name="mood_swings" value="mood_swings">
                        <label for="mood_swings">Mood Swings</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="weight_loss" name="weight_loss" value="weight_loss">
                        <label for="weight_loss">Weight Loss</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="restlessness" name="restlessness" value="restlessness">
                        <label for="restlessness">Restlessness</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="lethargy" name="lethargy" value="lethargy">
                        <label for="lethargy">Lethargy</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="patches_in_throat" name="patches_in_throat" value="patches_in_throat">
                        <label for="patches_in_throat">Patches in Throat</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="irregular_sugar_level" name="irregular_sugar_level" value="irregular_sugar_level">
                        <label for="irregular_sugar_level">Irregular Sugar Level</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="cough" name="cough" value="cough">
                        <label for="cough">Cough</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="high_fever" name="high_fever" value="high_fever">
                        <label for="high_fever">High Fever</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="sunken_eyes" name="sunken_eyes" value="sunken_eyes">
                        <label for="sunken_eyes">Sunken Eyes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="breathlessness" name="breathlessness" value="breathlessness">
                        <label for="breathlessness">Breathlessness</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="sweating" name="sweating" value="sweating">
                        <label for="sweating">Sweating</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="dehydration" name="dehydration" value="dehydration">
                        <label for="dehydration">Dehydration</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="indigestion" name="indigestion" value="indigestion">
                        <label for="indigestion">Indigestion</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="headache" name="headache" value="headache">
                        <label for="headache">Headache</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="yellowish_skin" name="yellowish_skin" value="yellowish_skin">
                        <label for="yellowish_skin">Yellowish Skin</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="dark_urine" name="dark_urine" value="dark_urine">
                        <label for="dark_urine">Dark Urine</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="nausea" name="nausea" value="nausea">
                        <label for="nausea">Nausea</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="loss_of_appetite" name="loss_of_appetite" value="loss_of_appetite">
                        <label for="loss_of_appetite">Loss of Appetite</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="pain_behind_the_eyes" name="pain_behind_the_eyes" value="pain_behind_the_eyes">
                        <label for="pain_behind_the_eyes">Pain Behind the Eyes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="back_pain" name="back_pain" value="back_pain">
                        <label for="back_pain">Back Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="constipation" name="constipation" value="constipation">
                        <label for="constipation">Constipation</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="abdominal_pain" name="abdominal_pain" value="abdominal_pain">
                        <label for="abdominal_pain">Abdominal Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="diarrhoea" name="diarrhoea" value="diarrhoea">
                        <label for="diarrhoea">Diarrhoea</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="mild_fever" name="mild_fever" value="mild_fever">
                        <label for="mild_fever">Mild Fever</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="yellow_urine" name="yellow_urine" value="yellow_urine">
                        <label for="yellow_urine">Yellow Urine</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="yellowing_of_eyes" name="yellowing_of_eyes" value="yellowing_of_eyes">
                        <label for="yellowing_of_eyes">Yellowing of Eyes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="acute_liver_failure" name="acute_liver_failure" value="acute_liver_failure">
                        <label for="acute_liver_failure">Acute Liver Failure</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="fluid_overload" name="fluid_overload" value="fluid_overload">
                        <label for="fluid_overload">Fluid Overload</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="swelling_of_stomach" name="swelling_of_stomach" value="swelling_of_stomach">
                        <label for="swelling_of_stomach">Swelling of Stomach</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="swelled_lymph_nodes" name="swelled_lymph_nodes" value="swelled_lymph_nodes">
                        <label for="swelled_lymph_nodes">Swelled Lymph Nodes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="malaise" name="malaise" value="malaise">
                        <label for="malaise">Malaise</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="blurred_and_distorted_vision" name="blurred_and_distorted_vision" value="blurred_and_distorted_vision">
                        <label for="blurred_and_distorted_vision">Blurred and Distorted Vision</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="phlegm" name="phlegm" value="phlegm">
                        <label for="phlegm">Phlegm</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="throat_irritation" name="throat_irritation" value="throat_irritation">
                        <label for="throat_irritation">Throat Irritation</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="redness_of_eyes" name="redness_of_eyes" value="redness_of_eyes">
                        <label for="redness_of_eyes">Redness of Eyes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="sinus_pressure" name="sinus_pressure" value="sinus_pressure">
                        <label for="sinus_pressure">Sinus Pressure</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="runny_nose" name="runny_nose" value="runny_nose">
                        <label for="runny_nose">Runny Nose</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="congestion" name="congestion" value="congestion">
                        <label for="congestion">Congestion</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="chest_pain" name="chest_pain" value="chest_pain">
                        <label for="chest_pain">Chest Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="weakness_in_limbs" name="weakness_in_limbs" value="weakness_in_limbs">
                        <label for="weakness_in_limbs">Weakness in Limbs</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="fast_heart_rate" name="fast_heart_rate" value="fast_heart_rate">
                        <label for="fast_heart_rate">Fast Heart Rate</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="pain_during_bowel_movements" name="pain_during_bowel_movements" value="pain_during_bowel_movements">
                        <label for="pain_during_bowel_movements">Pain During Bowel Movements</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="pain_in_anal_region" name="pain_in_anal_region" value="pain_in_anal_region">
                        <label for="pain_in_anal_region">Pain in Anal Region</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="bloody_stool" name="bloody_stool" value="bloody_stool">
                        <label for="bloody_stool">Bloody Stool</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="irritation_in_anus" name="irritation_in_anus" value="irritation_in_anus">
                        <label for="irritation_in_anus">Irritation in Anus</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="neck_pain" name="neck_pain" value="neck_pain">
                        <label for="neck_pain">Neck Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="dizziness" name="dizziness" value="dizziness">
                        <label for="dizziness">Dizziness</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="cramps" name="cramps" value="cramps">
                        <label for="cramps">Cramps</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="bruising" name="bruising" value="bruising">
                        <label for="bruising">Bruising</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="obesity" name="obesity" value="obesity">
                        <label for="obesity">Obesity</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="swollen_legs" name="swollen_legs" value="swollen_legs">
                        <label for="swollen_legs">Swollen Legs</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="swollen_blood_vessels" name="swollen_blood_vessels" value="swollen_blood_vessels">
                        <label for="swollen_blood_vessels">Swollen Blood Vessels</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="puffy_face_and_eyes" name="puffy_face_and_eyes" value="puffy_face_and_eyes">
                        <label for="puffy_face_and_eyes">Puffy Face and Eyes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="enlarged_thyroid" name="enlarged_thyroid" value="enlarged_thyroid">
                        <label for="enlarged_thyroid">Enlarged Thyroid</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="brittle_nails" name="brittle_nails" value="brittle_nails">
                        <label for="brittle_nails">Brittle Nails</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="swollen_extremeties" name="swollen_extremeties" value="swollen_extremeties">
                        <label for="swollen_extremeties">Swollen Extremities</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="excessive_hunger" name="excessive_hunger" value="excessive_hunger">
                        <label for="excessive_hunger">Excessive Hunger</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="extra_marital_contacts" name="extra_marital_contacts" value="extra_marital_contacts">
                        <label for="extra_marital_contacts">Extra Marital Contacts</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="drying_and_tingling_lips" name="drying_and_tingling_lips" value="drying_and_tingling_lips">
                        <label for="drying_and_tingling_lips">Drying and Tingling Lips</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="slurred_speech" name="slurred_speech" value="slurred_speech">
                        <label for="slurred_speech">Slurred Speech</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="knee_pain" name="knee_pain" value="knee_pain">
                        <label for="knee_pain">Knee Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="hip_joint_pain" name="hip_joint_pain" value="hip_joint_pain">
                        <label for="hip_joint_pain">Hip Joint Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="muscle_weakness" name="muscle_weakness" value="muscle_weakness">
                        <label for="muscle_weakness">Muscle Weakness</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="stiff_neck" name="stiff_neck" value="stiff_neck">
                        <label for="stiff_neck">Stiff Neck</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="swelling_joints" name="swelling_joints" value="swelling_joints">
                        <label for="swelling_joints">Swelling Joints</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="movement_stiffness" name="movement_stiffness" value="movement_stiffness">
                        <label for="movement_stiffness">Movement Stiffness</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="spinning_movements" name="spinning_movements" value="spinning_movements">
                        <label for="spinning_movements">Spinning Movements</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="loss_of_balance" name="loss_of_balance" value="loss_of_balance">
                        <label for="loss_of_balance">Loss of Balance</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="unsteadiness" name="unsteadiness" value="unsteadiness">
                        <label for="unsteadiness">Unsteadiness</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="weakness_of_one_body_side" name="weakness_of_one_body_side" value="weakness_of_one_body_side">
                        <label for="weakness_of_one_body_side">Weakness of One Body Side</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="loss_of_smell" name="loss_of_smell" value="loss_of_smell">
                        <label for="loss_of_smell">Loss of Smell</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="bladder_discomfort" name="bladder_discomfort" value="bladder_discomfort">
                        <label for="bladder_discomfort">Bladder Discomfort</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="foul_smell_of_urine" name="foul_smell_of_urine" value="foul_smell_of_urine">
                        <label for="foul_smell_of_urine">Foul Smell of Urine</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="continuous_feel_of_urine" name="continuous_feel_of_urine" value="continuous_feel_of_urine">
                        <label for="continuous_feel_of_urine">Continuous Feel of Urine</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="passage_of_gases" name="passage_of_gases" value="passage_of_gases">
                        <label for="passage_of_gases">Passage of Gases</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="internal_itching" name="internal_itching" value="internal_itching">
                        <label for="internal_itching">Internal Itching</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="toxic_look_typhos" name="toxic_look_typhos" value="toxic_look_typhos">
                        <label for="toxic_look_typhos">Toxic Look (Typhos)</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="depression" name="depression" value="depression">
                        <label for="depression">Depression</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="irritability" name="irritability" value="irritability">
                        <label for="irritability">Irritability</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="muscle_pain" name="muscle_pain" value="muscle_pain">
                        <label for="muscle_pain">Muscle Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="altered_sensorium" name="altered_sensorium" value="altered_sensorium">
                        <label for="altered_sensorium">Altered Sensorium</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="red_spots_over_body" name="red_spots_over_body" value="red_spots_over_body">
                        <label for="red_spots_over_body">Red Spots Over Body</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="belly_pain" name="belly_pain" value="belly_pain">
                        <label for="belly_pain">Belly Pain</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="abnormal_menstruation" name="abnormal_menstruation" value="abnormal_menstruation">
                        <label for="abnormal_menstruation">Abnormal Menstruation</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="dischromic_patches" name="dischromic_patches" value="dischromic_patches">
                        <label for="dischromic_patches">Dischromic Patches</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="watering_from_eyes" name="watering_from_eyes" value="watering_from_eyes">
                        <label for="watering_from_eyes">Watering from Eyes</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="increased_appetite" name="increased_appetite" value="increased_appetite">
                        <label for="increased_appetite">Increased Appetite</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="polyuria" name="polyuria" value="polyuria">
                        <label for="polyuria">Polyuria</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="family_history" name="family_history" value="family_history">
                        <label for="family_history">Family History</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="mucoid_sputum" name="mucoid_sputum" value="mucoid_sputum">
                        <label for="mucoid_sputum">Mucoid Sputum</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="rusty_sputum" name="rusty_sputum" value="rusty_sputum">
                        <label for="rusty_sputum">Rusty Sputum</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="lack_of_concentration" name="lack_of_concentration" value="lack_of_concentration">
                        <label for="lack_of_concentration">Lack of Concentration</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="visual_disturbances" name="visual_disturbances" value="visual_disturbances">
                        <label for="visual_disturbances">Visual Disturbances</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="receiving_blood_transfusion" name="receiving_blood_transfusion" value="receiving_blood_transfusion">
                        <label for="receiving_blood_transfusion">Receiving Blood Transfusion</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="receiving_unsterile_injections" name="receiving_unsterile_injections" value="receiving_unsterile_injections">
                        <label for="receiving_unsterile_injections">Receiving Unsterile Injections</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="coma" name="coma" value="coma">
                        <label for="coma">Coma</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="stomach_bleeding" name="stomach_bleeding" value="stomach_bleeding">
                        <label for="stomach_bleeding">Stomach Bleeding</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="distention_of_abdomen" name="distention_of_abdomen" value="distention_of_abdomen">
                        <label for="distention_of_abdomen">Distention of Abdomen</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="history_of_alcohol_consumption" name="history_of_alcohol_consumption" value="history_of_alcohol_consumption">
                        <label for="history_of_alcohol_consumption">History of Alcohol Consumption</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="fluid_overload" name="fluid_overload" value="fluid_overload">
                        <label for="fluid_overload">Fluid Overload</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="blood_in_sputum" name="blood_in_sputum" value="blood_in_sputum">
                        <label for="blood_in_sputum">Blood in Sputum</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="prominent_veins_on_calf" name="prominent_veins_on_calf" value="prominent_veins_on_calf">
                        <label for="prominent_veins_on_calf">Prominent Veins on Calf</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="palpitations" name="palpitations" value="palpitations">
                        <label for="palpitations">Palpitations</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="painful_walking" name="painful_walking" value="painful_walking">
                        <label for="painful_walking">Painful Walking</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="pus_filled_pimples" name="pus_filled_pimples" value="pus_filled_pimples">
                        <label for="pus_filled_pimples">Pus-Filled Pimples</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="blackheads" name="blackheads" value="blackheads">
                        <label for="blackheads">Blackheads</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="scurring" name="scurring" value="scurring">
                        <label for="scurring">Scurring</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="skin_peeling" name="skin_peeling" value="skin_peeling">
                        <label for="skin_peeling">Skin Peeling</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="silver_like_dusting" name="silver_like_dusting" value="silver_like_dusting">
                        <label for="silver_like_dusting">Silver-Like Dusting</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="small_dents_in_nails" name="small_dents_in_nails" value="small_dents_in_nails">
                        <label for="small_dents_in_nails">Small Dents in Nails</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="inflammatory_nails" name="inflammatory_nails" value="inflammatory_nails">
                        <label for="inflammatory_nails">Inflammatory Nails</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="blister" name="blister" value="blister">
                        <label for="blister">Blister</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="red_sore_around_nose" name="red_sore_around_nose" value="red_sore_around_nose">
                        <label for="red_sore_around_nose">Red Sore Around Nose</label>
                    </div>
                    <div class="symptom-group">
                        <input type="checkbox" id="yellow_crust_ooze" name="yellow_crust_ooze" value="yellow_crust_ooze">
                        <label for="yellow_crust_ooze">Yellow Crust Ooze</label>
                    </div>
                </div>
                <input type="hidden" id="symptomValues" name="symptomValues">
                <button type="submit" id="recommend">Predict Disease</button>
            </form>
            <div id="result"></div>
            <div id="btn-medical">
                <button id="descriptionBtn">Description</button>
                <button id="medicationsBtn">Medications</button>
                <button id="dietsBtn">Diets</button>
            </div>
            <br>
            <div id="drugs"></div>           
        </div>
    </div>
    <!-- Medical Recommendation System End -->

    <!-- Data Science Project and Competitions Start  -->
    <div class="container-fluid py-5" id="competitions">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Data Science</h1>
                <h1 class="position-absolute text-uppercase text-primary">Kaggle Competitions</h1>
            </div>
        </div>
            <div class="medical-container">
                <h2 class='alert alert-success'>This involves data science projects and competitions</h2>
                <div id="competitions">
                    <?php

                    $sql7 = mysqli_query($conn, "SELECT * FROM projects");

                    $limit = 3;
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;
                    $total = mysqli_num_rows($sql7);
                    $totalPages = ceil($total / $limit);

                    $sql7 = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC LIMIT $limit OFFSET $offset");

                    if (mysqli_num_rows($sql7) > 0) {
                        while ($row = mysqli_fetch_assoc($sql7)) {

                    ?>
                            <div id="container">
                                <div class="text project-text"><?php echo $row['description']; ?></div>
                                <button><a href="<?php echo $row['link']; ?>" style="color:white;text-decoration:none" target="_blank"><?php echo $row['title']; ?></a></button>
                            </div>

                    <?php
                        }
                    } else {
                        echo "<div> No Projects</div>";
                    }
                    ?>
                </div>

                <div class="pagination" id="pagination">
                <?php if ($page > 1): ?>
                    <a href="index.php?page=<?= $page - 1; ?>#competitions" onclick="scrollToPaginationCompetitions()">Previous</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i == $page): ?>
                        <strong><?= $i; ?></strong>
                    <?php else: ?>
                        <a href="index.php?page=<?= $i; ?>#competitions" onclick="scrollToPaginationCompetitions()"><?= $i; ?></a>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <a href="index.php?page=<?= $page + 1; ?>#competitions" onclick="scrollToPaginationCompetitions()">Next</a>
                <?php endif; ?>
            </div>

            </div>

        </div>
    </div>

    <!-- Data Science Project and Competitions End  -->


    <!-- Pictures Start -->
    <div class="container-fluid py-5" id="pictures">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">MADDIE</h1>
                <h1 class="position-absolute text-uppercase text-primary">Queen of Javascript</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">

                    <?php
                        $sql7 = mysqli_query($conn, "SELECT * FROM pictures");

                        if (mysqli_num_rows($sql7) > 0) {
                            while ($row = mysqli_fetch_assoc($sql7)) {

                        ?>
                            <div class="picture-item">
                                <img src="uploads/<?php echo $row['image']  ?>" alt="">
                            </div>

                        <?php
                            }
                        } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pictures End -->



    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contact Me</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>

                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="POST">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" autocomplete="off" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" autocomplete="off" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" name="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="https://x.com/stephen_khalaf" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/profile.php?id=100008812745092" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/stephen-olumide-3971bb209/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="https://www.instagram.com/khalafstani/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="d-flex justify-content-center mb-3">
            <label for="image-input" style="background:#0BCEAF;color:white;display:block;padding:12px 40px;margin-top:5px;border-radius:10px;cursor:pointer"><a href="/portfolio/api" style="text-decoration:none;color:white">Admin Page</a> </label>
    
            </div>
            <pre><h5 class="m-0">Front End was built by my bro <a class="text-white font-weight-bold" href="https://htmlcodex.com/" target="_blank"> HTML CODEX</a>. He's a fucking genius... </h5></pre>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/countries.js"></script>
    <script src="js/language-script.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/blog.js"></script>
    <script src="js/story.js"></script>
    <script src="js/checkout.js"></script>
    <script src="js/descriptions.js"></script>
    <script src="js/diets.js"></script>
    <script src="js/medications.js"></script>
    <script src="js/medical.js"></script>
    <script src="js/like.js"></script>
    <script src="js/text2image.js"></script>
    <script src="js/image2text.js"></script>
    <script src="js/textgen.js"></script>
    <script src="js/textsum.js"></script>
    <script src="js/qa.js"></script>
    <script src="js/project.js"></script>
    <script src="Javascript/message.js"></script>
</body>

<script>
    // function scrollToPagination() {
    //     const pagination = document.getElementById('blog');
    //     pagination.scrollIntoView({
    //         behavior: 'smooth'
    //     });
    // }


     function scrollToPaginationBlog() {
        const pagination = document.getElementById('blog');
        pagination.scrollIntoView({
            behavior: 'smooth'
        });
    }

    function scrollToPaginationCompetitions() {
        const pagination = document.getElementById('competitions');
        pagination.scrollIntoView({
            behavior: 'smooth'
        });
    }



</script>

</html>