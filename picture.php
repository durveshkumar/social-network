<?php
include ('head.php');

?>
<?php

   if(isset($_GET['uid'])){
      $username=mysql_real_escape_string($_GET['uid']);
      if(ctype_alnum($username)){
      	$querry=mysql_query("SELECT * FROM pictures WHERE uid='$username' and deleted='no'");
      	$rows=mysql_num_rows($querry);
      	if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $username = $col['username'];
           
      	}else{
      		echo "<meta http-equiv=\"refresh \"content=\"0; url=http://localhost/practice/project/myAlbums.php\">";
      		exit();
      	}

      }

  }

   $my = mysql_query("SELECT * FROM pictures WHERE username='$username' and deleted='no'");
  $myRows = mysql_num_rows($my);
  while($rows = mysql_fetch_assoc($my)){
   $id = $rows['id'];
   $title = $rows['title'];
   $description = $rows['description'];
   $date = $rows['date'];
   $uid = $rows['uid'];
   $img = $rows['image'];

    echo '<div style="display:inline-block;"><br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<centre><img src="'.$img.'" height="220" width="215"></centre>';
     echo '<br /><p style="font-size:20px;">&nbsp&nbsp&nbsp&nbsp'.$title.'</p><br /><br />';

     echo '<br /><br /><div style="padding:20px;"><form action="" method="POST"><input type="submit" name="remove'.$id.'" value="Remove Photo"></form></div></div>';

     if(isset($_POST['remove'.$id.''])){
       mysql_query("UPDATE pictures SET deleted='yes' WHERE id='$id'");
       echo "Photo Removed";
     }
     echo "<br /><br /><div style='padding:20px;'><center><form action='upload_photos.php?uid=".$uid."' method='POST'><input type='submit' name='submit' value='Upload Photos'></form></center></div>";

  }

   
?>
