<?php
include("head.php");
?>
<?php
echo '<table class="pis" height="597">
  <tr>
    <td  valign="top" width="5%">

    </td>
    <td width="10%" valign="top" border="1px solid black">';

?>
<img src="<?php echo $final ; ?>" height="180" width="175" alt= "<?php echo '$username' ?> 's profile" title="<?php '$username' ?> 's profile" style="margin-top:10px;margin-right:7px;"></img><br/>
<?php

echo '<p style="font-size:10px;">user information goes here</p><br>
<p style="margin-top:0px;font-size:10px;">profile pic goes here</p><br>


</td>
 <td id="line5" valign="top" width="1%">
 </td>
 <td id="line" valign="top">
 </td>
 <td width="5%" valign="top">
  <table>
    <tr>
      <td id="POST">
      <div class="post">&nbsp;
         <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNEWS FEED</p>
      </div>
   </td>
    </tr>
    <tr>
      <td id="write">
      <div class="write">&nbsp';
?>

  <?php
      
            $conn = new mysqli("localhost", "root", "", "DURVESH");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, body, date_sent,sent_by FROM extras WHERE sent_to='$username2'";

$result = $conn->query($sql);
  echo "<br>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      $sent_by = $row["sent_by"];
      $querS = mysql_query("SELECT profile_pic FROM durvesh WHERE username='$sent_by'");
      $fet = mysql_fetch_assoc($querS);
      $pic = $fet['profile_pic'];
      $id = $row['id'];
       echo '<br /><div style="float:left;">     
             <img src="personal_data/profile_pics/'.$pic.'" height="44" width="40" margin="-100" style="padding:8px;">
             </div>';
       
        echo "                   ".$sent_by." posted on your profile"."  <div id='show' ><form action='home.php#id__".$id."' method='POST'><input type='submit' name='comment".$id."' value='Show Comment'></form><br /></div> &nbsp<br/><br/>&nbsp&nbsp" .$row["date_sent"] . "<br /><br />";
        
 

   echo '<div id="id__'.$id.'">';
       if(isset($_POST['comment'.$id.'']) ){
             
        echo "<div id='onOff' style='max_width:600px, display:block;'><br />" .$row["body"] . "</div><br /><br />";

        echo "<form action='home.php#essen'><input type='submit' name='post_back' value='Post Comment'></form><br /><br />";

       }
       echo '</div>';
    echo '<div id="essen">';
      if(isset($_POST['post_back'])){

        echo "<div id='onOff' style='max_width:600px, display:block;'><br />" .$row["body"] . "</div><br /><br />";
      }

   echo '</div>';    
      echo "<hr />";
  



    }
    ?>
<script type="text/javascript">
function toggle()
{
  if(document.getElementById("onOff").style.display=="block"){
   document.getElementById("onOff").style.display="none";}

  else if(document.getElementById("onOff").style.display=="none"){
   document.getElementById("onOff").style.display="block";}
}
</script>  


    <?php
} else {
    echo "0 results";
}

$conn->close();
?>


<?php
   echo   '</div>
      </td>
    </tr>
  </table>
 </td>
 <td id="line3" valign="top">
 </td>

 <td width="100%" valign="top">
 </td>

 <td id="line2" valign="top">
 </td>
 <td width="90%" valign="top">

 </td>

  </tr>
</table>'

?>
