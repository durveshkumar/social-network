
<?php
include ('head.php');




  if(isset($_GET['u'])){
      $username=mysql_real_escape_string($_GET['u']);
      if(ctype_alnum($username)){
      	$querry=mysql_query("SELECT username FROM durvesh WHERE username='$username'");
      	$rows=mysql_num_rows($querry);
      	if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $username=$col['username'];
          
           
      	}else{
      		echo "<meta http-equiv=\"refresh \"content=\"0; url=http://localhost/practice/project/myAlbums.php\">";
      		exit();
      	}

      }

  }
  echo '<div style = "float:clear;">';
  echo '<br /><br /><p style="font-size:20px;">&nbsp'.$username.'\'s Album</p><br /><br /><hr />';
  $my = mysql_query("SELECT * FROM albums WHERE created_by='$username' and deleted='no'");
  $myRows = mysql_num_rows($my);
  while($rows = mysql_fetch_assoc($my)){
   $id = $rows['id'];
   $title = $rows['title'];
   $description = $rows['description'];
   $date = $rows['date'];
   $uid = $rows['uid'];

    echo '<div style="display:inline-block;"><br /><br />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="picture.php?uid='.$uid.'"><centre><img src="" height="220" width="215"></centre></a>';
     echo '<br /><p style="font-size:20px;">&nbsp&nbsp&nbsp&nbsp'.$title.'</p><br /><br />';
     echo '<br /><br /><div style="padding:20px;"><form action="" method="POST"><input type="submit" name="remove'.$id.'" value="Remove Album"></form></div></div>';

     if(isset($_POST['remove'.$id.''])){
      mysql_query("UPDATE albums SET deleted='yes' WHERE id='$id'");
      echo "Album deleted";
}
  }

 
 echo '<div style="padding:20px;"><form action="" method="POST">

 <input type="submit" name="Album" value="Add Album">
 </form></div>';

  

?>

<?php
if(isset($_POST['Album'])){
echo '<div style="padding:20px;"><form action="" method="POST">
   Please Enter the Album Name....<br />
 <input type="text" name="title" value="My Album....">
 <input type="text" name="caption" value="My Caption....">
 <input type="submit" name="submit" value="Confirm">
 </form></div>';
}

if(isset($_POST['submit'])){
  $val = $_POST['title'];
  $cap = $_POST['caption'];
  $date = date('Y-m-d');
 mysql_query("INSERT INTO albums VALUES('','$username2','$val','','$date','$cap','')");
 mysql_query("INSERT INTO pictures VALUES('','$cap','$username2','$date','$title','','','')");
 header('Location:myAlbums.php?u='.$username.'');
}


?>