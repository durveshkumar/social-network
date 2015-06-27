<?php
include ('head.php');
include ('connect.php');


if(isset($_GET['u'])){
      $username3=mysql_real_escape_string($_GET['u']);
      if(ctype_alnum($username3)){
      	$querry=mysql_query("SELECT username FROM durvesh WHERE username='$username3'");
      	$rows=mysql_num_rows($querry);
      	if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $username3=$col['username'];
          
           
      	}else{
      		echo "<meta http-equiv=\"refresh \"content=\"0; url=http://localhost/practice/project/profile.php\">";
      		exit();
      	}

      }

  }

$post=@$_POST['post'];
if($post!=""){
$date=date("Y-m-d");
$addedBy=$username2;
$addedTo=$username3;
$query = mysql_query("INSERT INTO extras VALUES('','$post','$date','$addedBy','$addedTo','')") or die("Server Error....");
 header('Refresh:0');
 header('Location:profile.php?u='.$username3.'');
}else{
	echo "Bad input!!!";
}
  

?>