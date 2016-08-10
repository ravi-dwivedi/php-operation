<?php
  $time = date('h:i:s');
  $time=str_replace(":","",$time);
  $time = md5($time);
  $time=substr($time,0,7);
  if(!(isset($_COOKIE['ti'])))
  {
  setcookie("ti",$time);
  }
?>
  <?php
  
echo "<img border='1px' src='captcha.php?to=$time'/>";
?>
<form>
<input type="text" name="t"/>
<input type="submit" name="sub"/>
</form>
<?php

if(isset($_REQUEST['sub']))
{

    if($_REQUEST['t']==$_COOKIE['ti'])
      {
        header("location:js1.html");
      }
            else
            echo "try again";
            unset($_COOKIE['ti']);
}
?>



