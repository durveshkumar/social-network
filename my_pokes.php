<?php   include('head.php')  ?>
<?php
$query231 = mysql_query("SELECT * FROM pokes WHERE user_to='$username2'");

if($query231!=""){
  $rows = mysql_num_rows($query231);	
}else{
	$rows = 0;
}$i= 0;
if($rows>0){
while($poke = mysql_fetch_assoc($query231)){
  $from  = $poke['user_from'];
  $to = $poke['user_to'];

  echo $from.' '.'poked you!!<br /><br />';

  echo '<form action="" method = "POST"><input type="submit" name="poke_back_'.$i.'" value="Poke Back"></form><br /><br />';

  if(@$_POST['poke_back_'.$i.'']){

     mysql_query("INSERT INTO pokes VALUES('','$to','$from')");
     echo '&nbsp'.$from.' has been poked!!';
     mysql_query("DELETE FROM pokes WHERE user_from='$from'");
}
  echo '<hr /><br />';
$i++;
}
}else{
   echo "No pokes to show!!";
}


?>