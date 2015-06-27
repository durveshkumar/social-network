<?php include("head.php") ?>
<?php
$friend = mysql_query("SELECT * FROM friend_request WHERE request_to='$username2'");
$friendRows = mysql_num_rows($friend);
while($values = mysql_fetch_assoc($friend)){
   $getId = $values['id'];
   $getFrom = $values['request_from'];
   $getTo = $values['request_to'];
   echo '<p><br /><br /> &nbsp '.$getId.'.'.' <u>'.$getFrom.'</u> '.'sent you a Friend Request &nbsp';
echo '<form action="friendRequest.php" method="POST">
<br />&nbsp&nbsp<input type="submit" name="accept_request" value="Accept Request">
&nbsp&nbsp<input type="submit" name="decline_request" value="Decline Request">
</form></p>';
   
}

if(isset($_POST['accept_request'])){

 $frIenD = mysql_query("SELECT friend FROM durvesh WHERE username='$getTo'");
 $RowsFriend = mysql_num_rows($frIenD);
 $fetch = mysql_fetch_assoc($frIenD);
 $Fri = $fetch['friend'];
 $friendArray = explode(',',$Fri); 
 $countFriends = count($friendArray);
 

 $frIenD_sent = mysql_query("SELECT friend FROM durvesh WHERE username='$getFrom'");
 $RowsFriend_sent = mysql_num_rows($frIenD_sent);
 $fetch_sent = mysql_fetch_assoc($frIenD_sent);
 $Fri_sent = $fetch_sent['friend'];
 $friendArray_sent = explode(',',$Fri_sent); 
 $countFriends_sent = count($friendArray_sent);

 if($Fri == ''){
    $countFriends = count(NULL);
 }
 if($Fri_sent == ''){
    $countFriends_sent = count(NULL);
 }
  
 if($Fri == ''){
  mysql_query("UPDATE durvesh SET friend=CONCAT(friend,'$getFrom') WHERE username = '$getTo'");

 }
 if($Fri_sent == ''){
  mysql_query("UPDATE durvesh SET friend=CONCAT(friend,'$getTo') WHERE username = '$getFrom'");
 }
 if($Fri != ''){
  mysql_query("UPDATE durvesh SET friend=CONCAT(friend,',','$getFrom'.' ') WHERE username = '$getTo'");

 }
 if($Fri_sent != ''){
  mysql_query("UPDATE durvesh SET friend=CONCAT(friend,',','$getTo') WHERE username = '$getFrom'");
 }
 mysql_query("DELETE FROM friend_request WHERE request_from='$getFrom' and request_to = '$getTo'");
 header("Location: friendRequest.php");
 echo "Request Accepted";
}
?>
<?php
if(isset($_POST['decline_request'])){
  mysql_query("DELETE FROM friend_request WHERE request_from='$getFrom' and request_to = '$getTo'");
  echo "Friend Request is cancelled";
}
 

?>