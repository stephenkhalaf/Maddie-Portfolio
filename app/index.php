<?php include "../api/config/database.php";?>
<?php
if(isset($_SESSION['unique_id'])){
    $id = $_SESSION['unique_id'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $id LIMIT 1");
    if(mysqli_num_rows($sql) > 0){
        $user = mysqli_fetch_assoc($sql);
    }else{
        header('Location: login.php');
    }
  }else{
    header('Location: login.php');
  }

?>
<?php  include "header.php" ?>
<body>
    <section id="wrapper" >
        <article id="left_pannel">
            <div class="profile__image">
                <img src="uploads/<?php echo $user['img']; ?>" />
            </div>
            <div class="profile__info">
                <p class="profile__name"><?php echo $user['fname']." ". $user['lname'];  ?></p>
                <p class="profile__email"><?php echo $user['email']; ?></p>
            </div>
            <div class="profile__menus">
                <label for="chat">Chat Notification <img src="ui/icons/talk.png" alt=""></label>
                <label for="contacts">Contacts <img src="ui/icons/contacts.png" alt=""></label>
                <label for="settings">Settings <img src="ui/icons/settings.png" alt=""></label>
                <label for="portfolio">Portfolio Page<img src="ui/icons/homepage.png" alt=""></label>
                <label for="logout" id="logout" >Logout </label>
            </div>
        </article>
        <article id="right_pannel">
            <div id="header">
                <div id="loader" class="loader_off"><img src="ui/icons/giphy.gif" alt=""></div>
                <span id="title">My Chat</span>
                <div class="language">
                    <select name="" id="0">
                    </select>
                </div>
                <div id="image_viewer" class="image_off" onclick="close_image(event)"><img src=""  /></div>
            </div>
            <div id="container">
                <input type="radio" name="box" id="chat">
                <input type="radio" name="box" id="contacts">
                <input type="radio" name="box" id="portfolio">
                <input type="radio" name="box" id="settings">
                <div id="inner_left_pannel">
                   
                </div>
                <div id="inner_right_pannel"></div>
            </div>
        </article>
    </section>
</body>
<script src="Javascript/talk.js" defer></script>
<script src="Javascript/logout.js" defer></script>
<script src="Javascript/settings.js" defer></script>
<script src="Javascript/contacts.js" defer></script>
<script src="Javascript/countries.js" defer></script>
<script src="Javascript/language.js" defer></script>
</html>