<?php
include ("head.php");
?>
<?php
if($username2){

}else{
	die("Log-in to do changes!!");
}
?>

<?php
$post = @$_POST['submit'];
$oldPass = @$_POST['oldpassword'];
$newPass = @$_POST['newpassword'];
$user = @$_POST['username'];
$con = @$_POST['conpassword'];
if(!$post){
	echo "";

}else{
	if($post=="" or $oldPass=="" or $newPass==""){
		echo "All fields are required";
	}else{
	$Query = mysql_query("SELECT * FROM durvesh WHERE username='$username2'");
	if($Row = mysql_fetch_assoc($Query)){
         if($oldPass==$Row['password']){
            if($con == $newPass){
            	if(strlen($con)>6 and strlen($con)<9){
             mysql_query("UPDATE durvesh SET password='$newPass' WHERE username='$username2'");
             echo "Password change is Successful";
           }else{
             echo "Password should be between 6 to 9 characters in length!!";

           }

            }else{
            	echo "Your Passwords dosent match !!";
            }

         }else{
         	echo "SORRY!! Passwords doesnot match!!";
         }
	}
}
}

?>
<?php

$faname=@$_POST['faname'];
$laname=@$_POST['laname'];
$useraname=@$_POST['useraname'];
$posta=@$_POST['submit2'];
$test=@$_POST['test'];
if($posta){
   if($faname!="" and $laname!="" and $useraname!=""){
    mysql_query("UPDATE durvesh SET first_name='$faname',last_name='$laname',username='$useraname' WHERE username='$username2'");
    echo "Change is Successful!! ";

   }elseif ($faname!="" and $laname!="") {
    mysql_query("UPDATE durvesh SET first_name='$faname',last_name='$laname' WHERE username='$username2'");
    echo "Change is Successful!! ";

   }elseif ($laname!="" and $useraname!="") {
    mysql_query("UPDATE durvesh SET username='$useraname',last_name='$laname' WHERE username='$username2' ");
    echo "Change is Successful!! ";

   }elseif ($faname!="" and $useraname!="") {
    mysql_query("UPDATE durvesh SET username='$useraname',first_name='$faname' WHERE  username='$username2' ");
    echo "Change is Successful!! ";


   }elseif ($faname!="" ) {
       mysql_query("UPDATE durvesh SET first_name='$faname' WHERE  username='$username2' ");
       echo "Change is Successful!! ";

   }elseif ($laname!="") {
       mysql_query("UPDATE durvesh SET last_name='$laname' WHERE username='$username2'");
       echo "Change is Successful!! ";

   }elseif ($useraname!="") {
       mysql_query("UPDATE durvesh SET username='$useraname' WHERE username='$username2' ");
       echo "Change is Successful!! ";

   }
  if(strlen($test)>1){
   mysql_query("UPDATE extras SET About='$test' WHERE sent_to='$username2'");
 }
}else{

}
?>
<?php
$QuErrY=mysql_query("SELECT * FROM durvesh WHERE username='$username2'");
$QuerrY=mysql_fetch_assoc($QuErrY);
$fName=$QuerrY['first_name'];
$lName=$QuerrY['last_name'];
$uName=$QuerrY['username'];
$teXt=mysql_query("SELECT * FROM extras WHERE sent_to='$username2'");
$texT=mysql_fetch_assoc($teXt);
$teSt=$texT['About'];
?>
<?php
$data=mysql_query("SELECT profile_pic FROM durvesh WHERE username='$username2'");
$get_row=mysql_fetch_assoc($data);
$fetch=$get_row['profile_pic'];
$final="personal_data/profile_pics/".$fetch;

if(isset($_FILES['profilepic'])){
  if(((@$_FILES['profilepic']['type']=="image/jpeg") || (@$_FILES['profilepic']['type']=="image/png") || (@$_FILES['profilepic']['type']=="image/gif")) and (@$_FILES['profilepic']['size']<1048576)){
    $chara="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $rand_dir_name = substr(str_shuffle($chara),0,18);
    mkdir("personal_data/profile_pics/$rand_dir_name");
    if(file_exists("personal_data/profile_pics/$rand_dir_name/".@$_FILES['profilepic']['name'])){
       echo @$_FILES['profilepic']['name']." Already exists";
    }else{
       move_uploaded_file(@$_FILES['profilepic']['tmp_name'], "personal_data/profile_pics/$rand_dir_name/".@$_FILES['profilepic']['name']);
       $profile=@$_FILES['profilepic']['name'];
       mysql_query("UPDATE durvesh SET profile_pic='$rand_dir_name/$profile' WHERE username='$username2'");
       header("Location: account_setting.php");
    }
  }else{
       echo "Invalid File!! Image should be of .jpeg/.png/.gif format with max. size of 1 Mb";
  }


}


?>

<br />
<p style="font-size:15px;">&nbspChange Your Profile Pic here!!</p><br /><hr /><br /><br />
<form action="" method="POST" enctype="multipart/form-data">
&nbsp&nbsp&nbsp<img src="<?php echo $final ;?>" width="80"></img>
<p>&nbsp&nbsp&nbsp<input type="file" name="profilepic">&nbsp&nbsp
&nbsp<input type="submit" name="UPLOAD PHOTO" value="UPLOAD PHOTO"><br /> </p>
</form><br /><br /><br />
<form method="POST" action="account_setting.php">
<p style="font-size:15px;">&nbsp Change Your Settings here!!</p><br />
<hr /><br />
<p>&nbspChange Your Password :</p><br />
<p>&nbspOld PassWord &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp:&nbsp <input type="password" name="oldpassword" id="oldpassword"/></p><br />
<p>&nbspNew PassWord &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp <input type="password" name="newpassword" id="newpassword"/></p><br />
<p>&nbspConfirm PassWord :&nbsp <input type="password" name="conpassword" id="conpassword"/></p><br />
<br />
<p style="font-size:15px;">&nbspUpdate Your Profie Info :</p><br />
<hr /><br />
<p>&nbspFirst Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<input type="text" name="faname" id="fname" value="<?php echo $fName ?>" /></p><br />
<p>&nbspLast Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<input type="text" name="laname" id="lname" value="<?php echo $lName ?>"/></p><br />
<p>&nbspUsername &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp<input type="text" name="useraname" id="username" value="<?php echo $uName ?>"/></p><br />
<p>&nbspDescribe Yourself :</p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea rows="6" cols="60" id="textarea" name="test"><?php echo $teSt; ?></textarea></p><br />
<br /><br /><br /><br />
<hr />
<p><input type="submit" name="submit" id="submit" value="UPDATE PASSWORD" style="margin-left:12px;margin-top:12px;"/>&nbsp<input type="submit" name="submit2" id="submit" value="UPDATE PROFILE INFO" style="margin-left:12px;margin-top:12px;"/></form>&nbsp<form action="closeAccount.php" method="POST"><input type="submit" name="close_account" id="close_account" value="CLOSE MY ACCOUNT" style="margin-left:12px;margin-top:12px;"/></form></p><br />