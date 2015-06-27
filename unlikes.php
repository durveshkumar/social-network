<?php
include("./connect.php");

echo
'<form action="" method="POST" style="float:left;">
<input type = "submit" name = "unlike" value = "unLike">
</form>';

 $count = 0;
 if(isset($_GET['u'])){
      $username=mysql_real_escape_string($_GET['u']);
      if(ctype_alnum($username)){
      	$querry=mysql_query("SELECT count FROM likes WHERE user_liked='$username'");
      	$rows=mysql_num_rows($querry);
      	if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $count=$col['count'];
          
           
      	}else{
      		
      	}

      }

  }
  ?>
<?php
if(@$_POST['unlike']){
	$count=$count-1;
	if($count>1){
	
     mysql_query("UPDATE likes SET count='$count' WHERE user_liked='$username'");
	}else{
     
	mysql_query("INSERT INTO likes VALUES('','$username','1')");
 
 }
 header('Location:post_likes.php?u='.$username.'');
}
echo '&nbsp'.$count.' likes';


?>