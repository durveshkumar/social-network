<?php include("./connect.php");

session_start();
if(!isset($_SESSION['username'])){
  $username2="";
}else{
  $username2=$_SESSION['username'];
  
}


?>
<!doctype html>
<html>
<head>
	<title>Social Site</title>
     <link rel="stylesheet" style="text/css" href="css/style.css"/>
	   <link src="js/link.js" type="text/javascript"/>
</head>
<body style="background-color:#EFFAFF;">
 <div class="network">
  <div id="social">
    <div class="logo">
    	<p style="font-size:15px;display:inline;margin-left:-630px;"><b>S-O-C-I-A-L<br /> 
      <p style="font-size:15px;display:inline;margin-left:-630px;"><b> N-E-T-W-O-R-K</b></p>
    </div>
    <div class="Search" style="display:inline;">
      <form action="action.php" method="GET" id="search">
       <input type="text" name="search" size=70 placeholder="Search..."/>
 
      </form>
    </div>
     
     <?php
   if(!$username2){
      echo  '<div id="menu" style="margin-left:40px;margin-top:10px;display:inline;">
      <a href=""  class="home">HOME</a>
      <a href=""  class="about">ABOUT</a>
      <a href="" class="sign-up">SIGN-UP</a>
      <a href="" class="sign-in">SIGN-IN</a>
      </div>';
    }else{
    echo '<div id="menu" style="margin-left:-45px;margin-top:10px;display:inline;">
    <a href="home.php" class="home">Home</a>
    <a href="profile.php?u='.$username2.'" class="home">Profile</a>
    <a href="my_msg.php" class="sign-in">Messages</a>
    <a href="account_setting.php" class="about">Account Setting </pre></a>
    <a href="logout.php" class="sign-in">Log Out</a>
    </div>' ;
  }
 ?>
  
    
    </div>
 </div>

