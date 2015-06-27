<?php
include ('head.php');

?>
<?php


    if($username2==""){
	echo "Log in to visit this page!!";
  }



else if(isset($_POST['no'])){
    header('Location:account_setting.php');

}
else if(isset($_POST['yes'])){

	mysql_query("UPDATE durvesh SET closed='yes' WHERE username='$username2'");
	echo "Your account is closed!!";
	session_destroy();
}
?>

<?php

 
 if($username2=="" or isset($_POST['yes'])){
 }else{
echo '<center>
	<p>Are you sure you want to close your account</p>
<form action="closeAccount.php" method="POST">
<input type="submit" name="no" value="No, take me back">
<input type="submit" name="yes" value="Yes">
</form>
<center>';
}
?>