
<?php 
include('head.php') 
 ?>
<?php

  if(isset($_GET['u'])){
      $username=mysql_real_escape_string($_GET['u']);
      if(ctype_alnum($username)){
      	$querry=mysql_query("SELECT username FROM durvesh WHERE username='$username'");
      	$rows=mysql_num_rows($querry);
      	if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $username=$col['username'];
          
           
      	}else{
      		echo "<meta http-equiv=\"refresh \"content=\"0; url=http://localhost/practice/project/profile.php\">";
      		exit();
      	}

      }

  }

$data=mysql_query("SELECT profile_pic FROM durvesh WHERE username='$username'");
$get_row=mysql_fetch_assoc($data);
$fetch=$get_row['profile_pic'];
$final="personal_data/profile_pics/".$fetch;

?>

<table class="pis" height="597">
  <tr>
    <td  valign="top" width="5%">

    </td>
    <td width="10%" valign="top" border="1px solid black">
<?php
  if(@$_POST['message']){
   if(isset($_GET['u'])){
    $ha = $_GET['u'];
   header('Location:message.php?u='.$ha.'');
  }
  
  }
?>
<?php
if(@$_POST['poke']){

  mysql_query("INSERT INTO pokes VALUES('','$username2','$username')");

}
/*
$my = mysql_query("SELECT * FROM likes WHERE who_liked='$username2'");
$r = mysql_num_rows($my);
if($my==""){
  $r=0;
}else{
  $r = $r;
}  */

?>



<img src="<?php echo $final ; ?>" height="180" width="175" alt= "<?php echo '$username' ?> 's profile" title="<?php '$username' ?> 's profile" style="margin-top:10px;margin-right:7px;"></img><br/>

<?php echo '<p style="font-size:10px;">'.$username.'</p>



<iframe src="post_likes.php?u='.$username.'" height="30" width="120" frameborder="no" scrolling="no" style="overflow: hidden;"></iframe>



';
  ?><br />
<?php
$addFriend = "";
$AddasFriend = "";
$doAsfriend = "";
$addSomeFriend = "";
$userFriend = "";
$addFriend = mysql_query("SELECT friend FROM durvesh WHERE username = '$username'");
$AddasFriend = mysql_fetch_assoc($addFriend);
$aFriend = $AddasFriend['friend'];
if($aFriend != ""){
    $doAsfriend = explode(',' , $aFriend);
    $count = count($doAsfriend);
    $ArraySlice = array_slice($doAsfriend,0, 14);
}
$i = 0;
if(in_array($username, $doAsfriend)){
  $addSomeFriend = '<input type="submit" name="remove" value="Remove Friend">';
}else{
  $addSomeFriend = '<input type="submit" name="friend" value="Add as Friend">';
}
if(isset($_POST['friend'])){
    $friendReq = $_POST['friend'];
    $send_to = $username;
    $send_from = $username2;
  
    if($send_to == $send_from){
      echo "Not possible to send yourself a friend request!!"."<br /><br />";
    }else{
      mysql_query("INSERT INTO friend_request VALUES('','$send_from','$send_to')");
      echo "Your friend request has been sent!!<br /><br />";
    }
  
  }
 
if(@$_POST['remove']){
 $GOT = @$_POST['remove'];
 $calling = mysql_query("SELECT * FROM durvesh WHERE friend = '$username'");
 $making = mysql_fetch_assoc($calling);
 $makeFriend = $making['friend'];

 $GOT_remove = @$_POST['remove'];
 $calling_remove = mysql_query("SELECT * FROM durvesh WHERE friend = '$username'");
 $making_remove = mysql_fetch_assoc($calling);
 $makeFriend_remove = $making['friend'];

 $possibility1 = ",".$username;
 $possibility2 = $username.",";
 if(strstr($makeFriend,$username)){
    $varFriend = str_replace($username, "", $makeFriend);
 }else
  if(strstr($makeFriend,$possibility1)){
    $varFriend = str_replace($possibility1, "", $makeFriend);
 }else
  if(strstr($makeFriend,$possibility2)){
    $varFriend = str_replace($possibility2, "", $makeFriend);
 }
 $possibility3 = ",".$username2;
 $possibility4 = $username2.",";

 if(strstr($makeFriend,$username2)){
    $varFriend2 = str_replace($username2, "", $makeFriend);
 }else
  if(strstr($makeFriend,$possibility3)){
    $varFriend2 = str_replace($possibility3, "", $makeFriend);
 }else
  if(strstr($makeFriend,$possibility4)){
    $varFriend2 = str_replace($possibility4, "", $makeFriend);
 }
  mysql_query("UPDATE durvesh SET friend = '$varFriend' WHERE username = '$username2'");
  mysql_query("UPDATE durvesh SET friend = '$varFriend2' WHERE username = '$username'");
  echo "Friend Removed";
  header("Location: $username2");
}


$friend = mysql_query("SELECT * FROM friend_request WHERE request_to='$username2'");
$friendRows = mysql_num_rows($friend);
if($friendRows>0){
  $Rows=$friendRows;
}else{
  $Rows='';
}




if($username2!=$username){
echo '<form action="" method="POST" id="yo" style="float:left;">'.
$addSomeFriend
.'&nbsp&nbsp<input type="submit" name="message" value="Message">';

  echo '<br /><input type="submit" name="poke" value="Poke">';

echo '</form>';

}
if($username2==$username){
  echo '<form method="POST" action="my_pokes.php"><input type="submit" name="my_pokes" value="My Pokes" style="float:left;"></form>';
  echo '<form method="POST" action="upload_photos.php" style="padding-left:15px;"><input type="submit" value="Upload Photos" ></form><br />';
}
 echo '<form method="POST" action="myAlbums.php?u='.$username.'"><input type="submit" name="myAlbum" value="'.$username.'\'s Album"></form>';
if(@$_POST['poke']){
  echo $username.' has been poked';
}

echo '<div class="friends">';
$addFriend = mysql_query("SELECT friend FROM durvesh WHERE username = '$username'");
$AddasFriend = mysql_fetch_assoc($addFriend);
$aFriend = $AddasFriend['friend'];
if($aFriend != ""){
    $doAsfriend = explode(',' , $aFriend);
    $count = count($doAsfriend);

  if($count > 0){
  foreach($ArraySlice as $key => $value){  
      $i++;
      $wery = mysql_query("SELECT * FROM durvesh WHERE username = '$value'");
      $getArray = mysql_fetch_assoc($wery);
      $getUserName = $getArray['username'];
      $getPhoto = $getArray['profile_pic'];
      
     echo '<a href = "'.$getUserName.'"><img src = "personal_data/profile_pics/'.$getPhoto.'" height="30" width="30"></img></a>&nbsp';
    } 
  }
}
  echo '</div>';

 ?>
 </td>
 <td id="line5" valign="top" width="1%">
 </td>
 <td id="line" valign="top">
 </td>
 <td width="5%" valign="top">
  <table>
    <tr>
      <td id="POST">
      <div class="post">
       <form action="conn_serv.php?u=<?php echo $username ?>" method="POST">
       <textarea id="post" name="post" rows="6" cols="133"  background-color="black"></textarea>
       <input type="submit" value="Post" name="Post" style="margin-left:5px";/>
        </form>
      </div>
      </td>
    </tr>
    <tr>
      <td id="write">   
      <div class="write">&nbsp;
              <?php
            $conn = new mysqli("localhost", "root", "", "DURVESH");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, body, date_sent,sent_by FROM extras WHERE sent_to='$username'";

$result = $conn->query($sql);
  echo "<br>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      $sent_by = $row["sent_by"];
      $querS = mysql_query("SELECT profile_pic FROM durvesh WHERE username='$sent_by'");
      $fet = mysql_fetch_assoc($querS);
      $pic = $fet['profile_pic'];
      echo '<a href="" class="work">';
       echo '<br /><div style="float:left;">     
             <img src="personal_data/profile_pics/'.$pic.'" height="44" width="40" margin="-100" style="padding:8px;">
             </div>';
        echo "            <a href='profile.php?u=".$sent_by."'>" .$row["sent_by"] . "</a>:  <div style='max_width:600px;'><br />" .$row["body"] . "</div>&nbsp<br/><br/>&nbsp&nbsp" .$row["date_sent"] . "<br /><br />";
      echo "<hr />";
      echo '</a>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
             
          
        
      </div>
      </td>
    </tr>
  </table>
 </td>
 <td id="line3" valign="top">
 </td>

 <td width="100%" valign="top">
 </td>

 <td id="line2" valign="top">
 </td>
 <td width="90%" valign="top">

 </td>

  </tr>
</table>
</body>
</html>