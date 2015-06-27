<?php include('head.php') ?>


<?php
echo '<table class="pis" height="597">
  <tr>
    <td  valign="top" width="5%">

    </td>
    <td width="20%" valign="top" border="1px solid black">
<p style="font-size:10px;"></p><br>
<p style="margin-top:0px;font-size:10px;"></p><br>

<img src="" height="180" width="160" alt= "<?php echo '.$username.' ?> \'s profile" title="<?php '.$username.' ?> \'s profile"></img><br/>
<div class="friends">
<img src="" height="55" width="50" ></img>
<img src="" height="55" width="50" ></img>
<img src="" height="55" width="50" ></img>
<img src="" height="55" width="50" ></img>
<img src="" height="55" width="50" ></img>
<img src="" height="55" width="50" ></img>
<img src="" height="55" width="50" ></img>
 </div>
 </td>
 <td id="line5" valign="top" width="4%">
 </td>
 <td id="line" valign="top">
 </td>
 <td width="5%" valign="top">
  <table>
    <tr>
      <td id="POST">
      <div class="post">&nbsp;
       <form action="" method="POST">
       <textarea rows="7" cols="130" background-color="black" id="textarea"></textarea>
       <input type="submit" value="Post" style="margin-left:5px;"/>
       </form>
      </div>
      </td>
    </tr>
    <tr>
      <td id="write">
      <div class="write">&nbsp;</div>
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
<?php
session_start();
session_destroy();
header("Location:index.php");

?>