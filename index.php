
 <?php
 include("./head.php");
 ?>
 <?php
  $final= @$_POST['submit'];
  $fn="";
  $mn="";
  $ln="";
  $em="";
  $em2="";
  $pwd="";
  $pwd2="";
  $check="";

  $fn=strip_tags(@$_POST['fname']);
  $mn=strip_tags(@$_POST['mname']);
  $ln=strip_tags(@$_POST['lname']);
  $em=strip_tags(@$_POST['email']);
  $em2=strip_tags(@$_POST['cemail']);
  $pwd=strip_tags(@$_POST['pwd']);
  $pwd2=strip_tags(@$_POST['cpwd']);
  
  if($final){
   if($em==$em2){
    $check=mysql_query("SELECT username FROM durvesh WHERE username='$mn'");
    $rows=mysql_num_rows($check);

    if($rows==0){
      if($fn&&$mn&&$ln&&$em&&$em2&&$pwd&&$pwd2){
         $dm=mysql_query("SELECT * FROM durvesh WHERE email='$em'");
         $sm = mysql_num_rows($dm);
         if($sm==0){
        if($pwd==$pwd2){
          if(strlen($pwd)<6){
            echo "Minimum password length should be between 6 to 22 characters.";
          }else{
            $enc=$pwd;
            $enc2=$pwd2;
            $query=mysql_query("INSERT INTO durvesh VALUES('','$mn','$fn','$mn','$ln','$em','$enc','default.gif','','0','no')");
            echo "Account made successfully";
          }
        }
        else{
            echo "Passwords Dosen't match!!";

           }
         }else{
          echo "email already exists!!";
         }
      }else{
      echo "All fields are required!!";
    }
  }else{
    echo "Username exists!!";
  }
   }else{
    echo "Emails dosen't match!!";
   }

  }
  ?>
<?php
if(isset($_POST['username2']) and isset($_POST['password2'])){
  mysql_select_db("DURVESH");
$username=preg_replace('#[^A-Za-z0-9]#i', '', $_POST['username2']);
$password=preg_replace('#[^A-Za-z0-9]#i', '', $_POST['password2']);
$pass=strip_tags($_POST['password2']);
$pass2=md5($pass);
$passwrd=md5($password);
$fetch=mysql_query("SELECT * FROM durvesh WHERE username='$username' AND password='$pass'");
 $rows=mysql_num_rows($fetch);
if($rows==1){
while($array=mysql_fetch_array($fetch)){
$id=$array['id'];
$closed = $array['closed'];
}
if($closed=='no'){
$_SESSION['username']=$username;
header("Location:home.php");
}else{

  echo "Your account has been closed!!";
}
exit();
}else{
echo "Server encountered a problem!!";
exit();

}
                    
}else{
  
}



 ?>

 <div id="signup">
   <table>
    <tr>
      <td width="40%" valign="top" color="#0000FF">
        <br /><br />
       <p style="color:#0000B2;">ALREADY A MEMBER!!..LOGIN...</p>
        <form action="#" method="POST">
         <input type="text" size="40" name="username2" placeholder="username"/><br /><br />
         <input type="password" size="40" name="password2" placeholder="password"/><br /><br />
         <input type="submit" name="ra" value="LOGIN"/>
        </form> 
     </td>
     <td width="20%" valign="top" color="#0000FF">
      <br /><br />
       <p style="color:#0000B2;">SIGN UP TODAY..</p>
       <form action="#" method="POST">
         <input type="text" name="fname" size="40" placeholder="first name"/><br /><br />
         <input type="text" name="lname" size="40" placeholder="last name"/><br /><br />
         <input type="text" name="mname" size="40" placeholder="username"/><br /><br />
         <input type="text" name="email" size="40" placeholder="email.."/><br /><br />
         <input type="text" name="cemail" size="40" placeholder="confirm email..."/><br /><br />
         <input type="password" name="pwd" size="40" placeholder="password"/><br /><br />
         <input type="password" name="cpwd" size="40" placeholder="confirm password"/><br /><br />
         <input type="submit" name="submit" value="SIGN UP!!"/>
      </form>
     </td>
    </tr>

<?php
include("./footer.php");
?>