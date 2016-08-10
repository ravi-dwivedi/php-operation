<?php
if(isset($_REQUEST['to']))
{
 header("Content-type:image/png");
    
 $time = $_REQUEST['to'];
  $handler = imagecreate(10,10);
  $bg_color = imagecolorallocate($handler,100,100,200);
   $handler = imagecreatefrompng('merge.png');
$txt_color = imagecolorallocate($handler,0,0,0);
imagestring($handler,25,32,18,$time,$txt_color);
imagepng($handler);
setcookie("time",$time);

}

?>
