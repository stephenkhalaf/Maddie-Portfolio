<?php
 include "../../api/config/database.php";
 
 $incoming_id = mysqli_real_escape_string($conn, $_POST['chatId']);
 $outgoing_id = $_SESSION['unique_id'];
 $seen_status = $_POST['seen_status'];
 $output = "";

 $sql = mysqli_query($conn, "SELECT * FROM messages WHERE
  (receiver = $incoming_id AND sender = $outgoing_id) OR 
   (receiver = $outgoing_id AND sender=$incoming_id) ORDER BY id ");

$sql3 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $outgoing_id LIMIT 1");
$user = mysqli_fetch_assoc($sql3);

if(mysqli_num_rows($sql) > 0){
    while($row = mysqli_fetch_assoc($sql)){
        if($row['receiver']==$_SESSION['unique_id']){
            $sql4 = mysqli_query($conn, "UPDATE messages SET received = 1 WHERE id = {$row['id']}");
        }
        if(($row['receiver'] == $_SESSION['unique_id']) && ($row['received']==1) && ($seen_status)){
            $sql5 = mysqli_query($conn, "UPDATE messages SET seen = 1 WHERE id = {$row['id']}");
        }
        if($row['sender'] == $outgoing_id){
            if($row['files']){
                $file_type = explode('.',$row['files'])[1];
                $file_name = explode('.',$row['files'])[0];
                $ext = ['pdf','txt'];
                if(in_array($file_type,$ext)){
                    $output .= '
                    <div id="message_right"> 
                        <img src="uploads/'.$user['img'].'" />
                        <br>
                        <div class="close" onclick="close_button(event)" userId="'.$outgoing_id.'" msgId = "'.$row['id'].'">X</div>
                        <p onclick="translate_text(event)">'.$row['message'].'</p>
                        <div id="text-result"> </div>
                        <form method="post" action="pdf.php">
                        <label for="pdf" style="cursor:pointer;width:100%; height:50px; color:#32ff43">'.$row['files'].'</label></a>
                        <input id="pdf"  type="submit" style="display:none;" name="pdf" value="'.$row['files'].'">
                        </form>
                    </div>
                ';
                }else{
                    $output .= '
                    <div id="message_right" style="padding:0"> 
                        <img src="uploads/'.$user['img'].'" />
                        <br>
                        <div class="close" onclick="close_button(event)" userId="'.$outgoing_id.'" msgId = "'.$row['id'].'">X</div>
                        <div><img style="width:100%;height:100px; cursor:pointer; object-fit:cover;" src="uploads/'.$row['files'].'"  onclick="open_image(event)"/></div>
                        <p onclick="translate_text(event)">'.$row['message'].'</p>
                        <div id="text-result"> </div>
                     </div>
                ';
                }
            }else{
                $output .= '
                <div id="message_right"> 
                    <img src="uploads/'.$user['img'].'" />
                    <div class="close" onclick="close_button(event)" userId="'.$outgoing_id.'" msgId = "'.$row['id'].'">X</div>
                    <br>
                    <p onclick="translate_text(event)">'.$row['message'].'</p> 
                    <div id="text-result"> </div>
                 </div>
            ';
            }
        }else{
            $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $incoming_id");
            $data = mysqli_fetch_assoc($sql2);
            if($data['status'] == "Online"){
                $status = '<div class="online-left"></div>';
            }else{
                $status = '<div class="offline-left"></div>';
            }

            if($row['files']){
                $file_type = explode('.',$row['files'])[1];
                $file_name = explode('.',$row['files'])[0];
                $ext = ['pdf','txt'];
                if(in_array($file_type,$ext)){
                    $output .= '
                    <div id="message_left" style="padding:0"> 
                        '.$status.'
                        <img src="uploads/'.$data['img'].'" />
                        <br>
                        <form method="post" action="pdf.php">
                        <label for="pdf" style="cursor:pointer;width:100%; height:50px; color:#32ff43">'.$row['files'].'</label>
                        <input id="pdf" target="_blank" type="submit" style="display:none;" name="pdf" value="'.$row['files'].'">
                        </form>
                        <p onclick="translate_text(event)">'.$row['message'].'</p>
                        <div id="text-result"> </div>
                    </div>
                ';
                }else{
                    $output .= '
                    <div id="message_left" style="padding:0"> 
                        '.$status.'
                        <img src="uploads/'.$data['img'].'" />
                        <br>
                        <div><img style="width:100%;height:100px; cursor:pointer; object-fit:cover;" src="uploads/'.$row['files'].'"  onclick="open_image(event)"/></div>
                        <p onclick="translate_text(event)">'.$row['message'].'</p>
                        <div id="text-result"> </div>
                    </div>
                ';
                }
            }else{
                $output .= '
                <div id="message_left"> 
                    '.$status.'
                    <img src="uploads/'.$data['img'].'" />
                    <br>
                    <p onclick="translate_text(event)">'.$row['message'].'</p>
                    <div id="text-result"> </div>
                 </div>
            ';
            }
        }
       
    }
}

echo $output;

?>


