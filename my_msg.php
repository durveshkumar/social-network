<?php include('head.php')  ?>
<p style="font-size:20px;align:center;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp  My Messages:  </p><br /><br /><br />
<?php

$fetch = mysql_query("SELECT * FROM messages WHERE message_to='$username2'");
$numrows = mysql_num_rows($fetch);$i=0;
if($numrows>0){ $i=0;
while($fetched = mysql_fetch_assoc($fetch) and $i<$numrows){
  $from = $fetched['message_from'];
  $dated = $fetched['date'];
  $to = $fetched['message_to'];
  $messaged = $fetched['message'];
  $value = $fetched['visited'];
  $id = $fetched['id'];
   if(strlen($messaged)>20){
     $display = substr($messaged,0,20).'.....';
   }else{
   	$display = $messaged;
   }
  $j=$i;
   echo '&nbsp&nbsp&nbsp&nbsp&nbsp<a href="'.$from.'">'.$from.'</a> : '.$display.'';
   if($value=='no'){
    echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.'<p><br /><form action="" method="POST"><input type="submit" name="read'.$i.'" value="Mark as Read"></form>&nbsp&nbsp&nbsp&nbsp&nbsp<form action="" method="POST"><input type="submit" name="Reply'.$i.'" value="Reply"></form>'.'&nbsp&nbsp&nbsp&nbsp&nbsp<form action="" method="POST"><input type="submit" name="delete_'.$i.'" value="Delete Message"></form></p>'.'<br /><br /><br /><hr /><br />';
   }else{
     echo "<br /><br />&nbsp&nbsp<form action='' method='POST'><input type='submit' name='delete2_".$i."' value='Delete Message'></form><br /><br /><br /><hr /><br />";
     
   }
  if(@$_POST['delete2_'.$i.'']){
 
 mysql_query("DELETE  FROM messages WHERE message_to='$to', message_from='$from' and visited='yes'");
 echo "Message Deleted<br /><br /><hr /><br />";
 $i=-1;
}
   
if(@$_POST['delete_'.$i.'']){
 
 mysql_query("DELETE  FROM messages WHERE message_to='$to', message_from='$from' and visited='no'");
 echo "Message Deleted<br /><br /><hr /><br />";
 $i=-1;
}

 

if(@$_POST['read'.$i.'']){

 mysql_query("UPDATE messages SET visited='yes' WHERE message_to='$to'");
 echo "Read<br /><br /><hr /><br />";
}
if(@$_POST['Reply'.$i.'']){

 header('Location:message_reply.php?u='.$from.'');
 echo "<meta http-equiv=\"refresh \"content=\"0; url=http://localhost/practice/project/message_reply.php?u=".$from."\">";
}
$i=$j;
 $i++; 
  }
}else{
	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNo messages to show!!";
}

?>
<?php



?>