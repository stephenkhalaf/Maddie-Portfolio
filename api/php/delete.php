<?php
include_once "../config/database.php";
if(isset($_GET['admin_id'])){
    $admin_id = $_GET['admin_id'];
    $sql = mysqli_query($conn, "SELECT * FROM admin WHERE unique_id = $admin_id");
    $admin = mysqli_fetch_assoc($sql);

    if($admin_id == '1720987785'){
        header("Location: ../admin.php"); 
    }else if($admin['type'] == 'Super Admin'){
        header("Location: ../admin.php");
    }else{
        $sql2 = mysqli_query($conn, "DELETE FROM admin WHERE (unique_id = $admin_id)");
        header("Location: ../admin.php");
    }
}

if(isset($_GET['about_id'])){
    $about_id = $_GET['about_id'];

    $sql = mysqli_query($conn, "DELETE FROM about WHERE unique_id = $about_id");
    $sql2 = mysqli_query($conn, "SELECT * FROM about WHERE unique_id = $about_id ");
    $about = mysqli_fetch_assoc($sql2);
    $image1 = $about['image1'];
    $image2 = $about['image2'];
    if(file_exists("../../uploads/$image1")){
        unlink("../../uploads/$image1");
    }

    if(file_exists("../../uploads/$image2")){
        unlink("../../uploads/$image2");
    }


    header("Location: ../about.php");
}


if(isset($_GET['cart_id'])){
    $cart_id = $_GET['cart_id'];

    $sql = mysqli_query($conn, "SELECT * FROM cart WHERE unique_id = $cart_id ");
    if($sql){
        $cart = mysqli_fetch_assoc($sql);
        $image = $book['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM cart WHERE unique_id = $cart_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    

    header("Location: ../cart.php");
}

if(isset($_GET['book_id'])){
    $book_id = $_GET['book_id'];

    $sql = mysqli_query($conn, "SELECT * FROM books WHERE unique_id = $book_id ");
    if($sql){
        $book = mysqli_fetch_assoc($sql);
        $image = $book['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM books WHERE unique_id = $book_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    

    header("Location: ../book.php");
}

if(isset($_GET['picture_id'])){
    $picture_id = $_GET['picture_id'];

    $sql = mysqli_query($conn, "SELECT * FROM pictures WHERE unique_id = $picture_id ");
    if($sql){
        $picture = mysqli_fetch_assoc($sql);
        $image = $book['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM pictures WHERE unique_id = $picture_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    

    header("Location: ../picture.php");
}


if(isset($_GET['blog_id'])){
    $blog_id = $_GET['blog_id'];

    $sql = mysqli_query($conn, "SELECT * FROM blog WHERE unique_id = $blog_id ");
    if($sql){
        $blog = mysqli_fetch_assoc($sql);
        $image = $blog['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM blog WHERE unique_id = $blog_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    

    header("Location: ../blog.php");
}


if(isset($_GET['education_id'])){
    $education_id = $_GET['education_id'];

    $sql = mysqli_query($conn, "DELETE FROM education WHERE unique_id = $education_id");
    header("Location: ../education.php");
}

if(isset($_GET['project_id'])){
    $project_id = $_GET['project_id'];

    $sql = mysqli_query($conn, "DELETE FROM projects WHERE unique_id = $project_id");
    header("Location: ../project.php");
}

if(isset($_GET['story_id'])){
    $story_id = $_GET['story_id'];

    $sql = mysqli_query($conn, "SELECT * FROM story WHERE unique_id = $story_id ");
    if($sql){
        $story = mysqli_fetch_assoc($sql);
        $image = $story['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM story WHERE unique_id = $story_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    header("Location: ../story.php");
}

if(isset($_GET['story_id'])){
    $story_id = $_GET['story_id'];

    $sql = mysqli_query($conn, "DELETE FROM story WHERE unique_id = $story_id");
    header("Location: ../story.php");
}

if(isset($_GET['experience_id'])){
    $experience_id = $_GET['experience_id'];

    $sql = mysqli_query($conn, "DELETE FROM experience WHERE unique_id = $experience_id");
    header("Location: ../experience.php");
}
if(isset($_GET['message_id'])){
    $message_id = $_GET['message_id'];

    $sql = mysqli_query($conn, "DELETE FROM message WHERE unique_id = $message_id");
    header("Location: ../message.php");
}
?>