<?php
sleep(1);
include "../../api/config/database.php";
$id = $_SESSION['unique_id'];

if(isset($_POST['chatId'])){
    $sql = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = $id LIMIT 1");
    $user = mysqli_fetch_assoc($sql);
    $chatId = mysqli_real_escape_string($conn, $_POST['chatId']);
    $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $chatId LIMIT 1");
    if(mysqli_num_rows($sql2)==1){
        $chatUser = mysqli_fetch_assoc($sql2);
        $arr = [];
        $arr['chatUser'] = $chatUser;
        $arr['user'] = $user;
        echo json_encode($arr);
    }
}else{
    $sql3 = mysqli_query($conn, "SELECT * FROM messages WHERE (received=0 and receiver=$id)");
    $msgs = [];
    if(mysqli_num_rows($sql3)>0){
        while($row2 = mysqli_fetch_assoc($sql3)){
            $sender = $row2['sender'];
            if(isset($msgs[$sender])){
                $msgs[$sender]++;
            }else{
                $msgs[$sender] = 1;
            }

        }
    }

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE (unique_id != $id)");
    $output = "";
    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            foreach($msgs as $key=>$value){
                if($row['unique_id'] == $key){
                    $output .= '
                    <div class="contact" info='.$row['unique_id'].' onclick="contactTalk(event)" style="position:relative">
                        <img src="uploads/'.$row['img'].'" alt="">
                        <p>'.$row['fname'].' '.$row['lname'].'</p>
                        '.'<div style="position:absolute; top:0; left:0; width:20px; height:20px; background:green;color:white">'.$value.'</div>'.'
                    </div>
                ';

                }
            }

        }
    }

    
    if(count($msgs) == 0){
        $output = "<div style='color:red; font-variant:small-caps'>no new messages</div>";
    }
    

    echo $output;
}

?>