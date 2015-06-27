<?php   include('head.php')   ?>

<?php
 
 if(isset($_GET['u'])){
      $username=mysql_real_escape_string($_GET['u']);
      if(ctype_alnum($username)){
      	$querry=mysql_query("SELECT username FROM durvesh WHERE username='$username'");
      	$rows=mysql_num_rows($querry);
      	if($rows==1){
          $col=mysql_fetch_assoc($querry);
          $username=$col['username'];
          

      	}

      }

  }
  
  if($username != $username2){
 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
  echo '<p><form action="" method="POST">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <textarea rows="20" cols="120" name="text">Enter your message here......</textarea><br /><br />
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "submit" name = "send" value="Send Message">

</p>';

  }else{
    echo "Not possible to send yourself a message!!";
  }



?>
<?php

if(isset($_POST['send'])){
        
    $message = strip_tags(@$_POST['text']);
    if($message =="Enter your message here......"){
    	echo "Please enter a message";
    }
    if(strlen($message)<6){
    	echo "Message length should be more than 6 characters";
    }
    if($message !="Enter your message here......" and strlen($message)>=6){
    $date = date('Y-m-d');
    mysql_query("INSERT INTO messages VALUES ('','$username2','$username','$message','$date','no')");
	echo "Your message is sent";
}
}


?>