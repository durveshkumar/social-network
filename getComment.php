<?php   include('head.php');   ?>

<?php

$id = @$_GET['id'];
echo $id;

$sql = "SELECT body FROM extras WHERE id='$id'";

$result = $conn->query($sql);
  echo "<br>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
      
      $body = $row['body'];
      
      
      
       echo '<br /><div style="float:left;">     
             <img src="personal_data/profile_pics/'.$pic.'" height="44" width="40" margin="-100" style="padding:8px;">
             </div>';
       
        echo "                   ".$sent_by." posted on your profile" ."  <div id='show' ><a href='getComment.php?id=".$id."'>Show Comment<br /></a></div> <div id='onOff' style='max_width:600px, display:block;'><br />" .$row["body"] . "</div>&nbsp<br/><br/>&nbsp&nbsp" .$row["date_sent"] . "<br /><br />";
        
 
      echo "<hr />";
    }
    
} else {
    echo "0 results";
}


?>