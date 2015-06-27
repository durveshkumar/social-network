<?php
include ('head.php');

if(isset($_GET['uid'])){
      $username=mysql_real_escape_string($_GET['uid']);
      if(ctype_alnum($username)){
        $querry=mysql_query("SELECT id FROM pictures WHERE uid='$username'");
        $rows=mysql_num_rows($querry);
        if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $username=$col['uid'];
          
           
        }else{
          echo "<meta http-equiv=\"refresh \"content=\"0; url=http://localhost/practice/project/picture.php\">";
          exit();
        }

      }

  }



echo '<center><p style="font-size:20px;"><br />Upload Photos</p><center>';
?>
<form action="" method="POST" enctype="multipart/form-data">
&nbsp&nbsp&nbsp<img src="" width=""></img>
<p>&nbsp&nbsp&nbsp<input type="file" name="profilepic">&nbsp&nbsp
&nbsp<input type="submit" name="UPLOAD PHOTO" value="UPLOAD PHOTO"><br /> </p>
</form>

<?php

if(isset($_FILES['profilepic'])){
  if(((@$_FILES['profilepic']['type']=="image/jpeg") || (@$_FILES['profilepic']['type']=="image/png") || (@$_FILES['profilepic']['type']=="image/gif")) and (@$_FILES['profilepic']['size']<1048576)){
    $chara="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $rand_dir_name = substr(str_shuffle($chara),0,18);
    mkdir("personal_data/upload_pics/$rand_dir_name");
    if(file_exists("personal_data/upload_pics/$rand_dir_name/".@$_FILES['profilepic']['name'])){
       echo @$_FILES['profilepic']['name']." Already exists";
    }else{
       move_uploaded_file(@$_FILES['profilepic']['tmp_name'], "personal_data/upload_pics/$rand_dir_name/".@$_FILES['profilepic']['name']);
       $profile=@$_FILES['profilepic']['name'];
       mysql_query(" INSERT INTO pictures VALUES('','$username','$username2','','','','http://localhost/practice/project/personal_data/upload_pics/$rand_dir_name/".$_FILES['profilepic']['name']."','no')");
       header("Location: picture.php?u=".$username2."");
    }
  }else{
       echo "Invalid File!! Image should be of .jpeg/.png/.gif format with max. size of 1 Mb";
  }


}

?>